@extends('layouts.backend')

@php
  use Carbon\Carbon;
@endphp

@section('content')
    
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Tableau de bord</h1>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Membres</h4>
                  </div>
                  <div class="card-body">
                    {{ count($viewData['membres']) }}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Activités</h4>
                  </div>
                  <div class="card-body">
                    {{ count($viewData['activites']) }}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="fas fa-users"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Témoignages</h4>
                  </div>
                  <div class="card-body">
                    {{ count($viewData['temoignages']) }}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-envelope"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Mails</h4>
                  </div>
                  <div class="card-body">
                    {{ count($viewData['mails']) }}
                  </div>
                </div>
              </div>
            </div>                  
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h4>Derniers Messages</h4>
                </div>
                <div class="card-body">             
                  <ul class="list-unstyled list-unstyled-border">
                    @forelse ($viewData['contacts'] as $contact)
                      <li class="media">
                        
                        @php
                          $number = rand(1,4);
                          $currentTime = Carbon::now();
                          Carbon::setLocale('fr');
                        @endphp
                        <a  data-toggle="collapse" href="#collapseExample{{$contact->id}}" role="button" aria-expanded="false" aria-controls="collapseExample{{$contact->id}}">
                                <img class="mr-3 rounded-circle" width="50" src="{{asset('assets/backend/img/avatar/avatar-'.$number.'.png ')}}" alt="avatar">
                        </a>
                        <div class="media-body">
                          <div class="float-right text-primary">
                            {{ $contact->created_at->diffForHumans() }}
                            <a href="{{ route('deleteContact', $contact->id) }}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                        </div>
                          <div class="media-title">
                            <a  data-toggle="collapse" href="#collapseExample{{$contact->id}}" role="button" aria-expanded="false" aria-controls="collapseExample{{$contact->id}}">
                                {{ $contact->name }}
                            </a>
                            
                        </div>
                        <span class="text-small text-muted">{{ $contact->object }}</span> <br>
                        <span class="text-small text-muted"><a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></span>
                          
                            <div class="card-body">
                               
                                <div class="collapse" id="collapseExample{{$contact->id}}">
                                <p>
                                    {{$contact->message}}
                                </p>
                                </div>
                            </div>
                        </div>
                      
                      </li>   
                    @empty
                        
                    @endforelse
                    
                  </ul>
                  <div class="text-center pt-1 pb-1">
                    {!! $viewData['contacts']->links() !!}
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </section>
      </div>

@endsection
