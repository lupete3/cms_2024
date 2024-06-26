@extends('layouts.backend')

@section('content')

    <!-- Main Content -->
    <div class="main-content">
        
        <section class="section">
            <div class="section-header">
                <h1>{{ $viewData['title'] }}</h1>
                <div class="section-header-breadcrumb">
                  <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                  <div class="breadcrumb-item"><a href="{{ route('temoignages.index')}}">Témoignages</a></div>
                  <div class="breadcrumb-item">{{ $viewData['title'] }}</div>
                </div>
            </div>

            <div class="section-body ">
            
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12 align-center">
                        @if($errors->any())
                            @foreach ($errors->all() as $error)
                            <div class="alert alert-danger alert-dismissible" id="msg" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h6>
                                {{ $error }}
                                </h6>
                            </div>
                            @endforeach
                        @endif
                        @if(Session::has('success'))
                            <div class="alert alert-success alert-dismissible" id="msg" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h6>
                                {{ Session::get('success') }}
                            </h6>
                            </div> 
                        @endif
                      <div class="card ">
                        <form method="post" action="{{ route('temoignages.update',$temoignage->id)}}" enctype="multipart/form-data">
                            @csrf
                          <div class="card-header">
                            <h4>{{$viewData['title']}}</h4>
                            <div class="card-header-action">
                                <a href="{{ route('temoignages.index')}}" class="btn btn-icon icon-left btn-info"><i class="fas fa-list-alt"></i> Afficher les témoignages</a>
                            </div> 
                          </div>
                          <div class="card-body">
                            <div class="form-group">
                              <label>Nom Client</label>
                              <input type="text" class="form-control" name="name" value="{{ $temoignage->name }}" required="">
                            </div>
                            <div class="form-group">
                              <label>Fonction</label>
                              <input type="text" class="form-control" name="title" value="{{ $temoignage->title }}" required="">
                            </div>
                            <div class="form-group">
                              <label>Témoignage</label>
                              <textarea class="form-control" name="description" cols="30" rows="10">{{ $temoignage->description }}</textarea>
                            </div>
                            <div class="form-group ">
                                <label>Image </label><br>
                                <input type="file" name="image" class="form-control">                                
                            </div>
                            <div class="form-group ">
                              <img src="{{asset('temoignages/'.$temoignage->image)}}" alt="">                              
                          </div>
                          </div>
                          <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">Mettre à jour</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
          </div>
        </section>
    </div>

@endsection