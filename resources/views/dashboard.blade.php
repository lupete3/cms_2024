@extends('layouts.backend')

@php
  use Carbon\Carbon;
@endphp

@section('content')
    
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Admin</h4>
                  </div>
                  <div class="card-body">
                    10
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
                    <h4>News</h4>
                  </div>
                  <div class="card-body">
                    42
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Reports</h4>
                  </div>
                  <div class="card-body">
                    1,201
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-circle"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Online Users</h4>
                  </div>
                  <div class="card-body">
                    47
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
                        <a href="" >
                          <img class="mr-3 rounded-circle" width="50" src="{{asset('assets/backend/img/avatar/avatar-'.$number.'.png ')}}" alt="avatar">
                        </a>
                        <div class="media-body">
                          <div class="float-right text-primary">{{ $contact->created_at->diffForHumans() }}</div>
                          <div class="media-title">{{ $contact->name }}</div>
                          <span class="text-small text-muted">{{ $contact->object }}</span>
                        </div>
                      
                      </li>   
                    @empty
                        
                    @endforelse
                    
                  </ul>
                  <div class="text-center pt-1 pb-1">
                    <a href="#" class="btn btn-primary btn-lg btn-round">
                      Afficher tout
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </section>
      </div>

@endsection
