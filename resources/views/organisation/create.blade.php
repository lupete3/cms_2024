@extends('layouts.backend')

@section('content')

    <!-- Main Content -->
    <div class="main-content">
        
        <section class="section">
            <div class="section-header">
                <h1>{{ $viewData['title'] }}</h1>
                <div class="section-header-breadcrumb">
                  <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">{{ $viewData['title']}}</a></div>
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
                        @foreach ($viewData['organisations'] as $organisation)
                        
                          <form method="post" action="{{ route('organisations.update',$organisation->id)}}" enctype="multipart/form-data">
                            @method('PUT')  
                            @csrf
                            <div class="card-header">
                              <h4>{{$viewData['title']}}</h4>
                            </div>
                            <div class="card-body">
                              <div class="form-group">
                                <label>Nom Organisation</label>
                                <input type="text" class="form-control" value="{{ $organisation->name }}" name="name" required="">
                              </div>
                              <div class="form-group">
                                <label>Téléphone de contact</label>
                                <input type="text" class="form-control" value="{{ $organisation->phone }}" name="phone" required="">
                              </div>
                              <div class="form-group">
                                <label>Email de contact</label>
                                <input type="mail" class="form-control" value="{{ $organisation->email }}" name="email" required="">
                              </div>
                              <div class="form-group">
                                <label>Adresse Physique</label>
                                <input type="text" class="form-control" value="{{ $organisation->adress }}" name="adress" required="">
                              </div>
                              <div class="form-group mb-0">
                                <label>Slogan ou Devise</label>
                                <textarea class="form-control" name="slogan" required="">{{ $organisation->slogan }}</textarea>
                              </div>
                              <hr>
                              <div class="form-group">
                                <label>Lien Facebook</label>
                                <input type="text" class="form-control" value="{{ $organisation->facebook }}" name="facebook" >
                              </div>
                              <div class="form-group">
                                <label>Lien Twitter</label>
                                <input type="text" class="form-control" value="{{ $organisation->twitter }}" name="twitter" >
                              </div>
                              <div class="form-group">
                                <label>Lien Instagram</label>
                                <input type="text" class="form-control" value="{{ $organisation->instagram }}" name="instagram" >
                              </div>
                              <div class="form-group">
                                <label>Lien YouTube</label>
                                <input type="text" class="form-control" value="{{ $organisation->toutube }}" name="youtube" >
                              </div>
                              <div class="form-group">
                                <label>Lien LinkedIn</label>
                                <input type="text" class="form-control" value="{{ $organisation->linkedin }}" name="linkedin" >
                              </div>
                              <div class="form-group">
                                <div class="form-group row mb-4">
                                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Icone du text 1</label>
                                  <div class="col-sm-12 col-md-7">
                                    <div id="image-preview" class="image-preview" style="width: 200px; height:200px">
                                      <img src="{{ asset('about/'.$organisation->logo)}}" width="200" alt="">
                                      <label for="image-upload" id="image-label">Choisir un logo</label>
                                      <input type="file" name="logo" id="image-upload" />
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="card-footer text-right">
                              <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> Mettre à jour</button>
                            </div>
                          </form>

                        @endforeach
                      </div>
                    </div>
                  </div>
          </div>
        </section>
    </div>

@endsection