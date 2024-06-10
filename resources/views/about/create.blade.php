@extends('layouts.backend')

@section('content')

    <!-- Main Content -->
    <div class="main-content">

        <section class="section">
            <div class="section-header">
                <h1>{{ $viewData['title'] }}</h1>
                <div class="section-header-breadcrumb">
                  <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                  <div class="breadcrumb-item"><a href="#">Slides</a></div>
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
                        @foreach ($viewData['abouts'] as $about)

                          <form method="post" action="{{ route('about.update',$about->id)}}" enctype="multipart/form-data">
                              @csrf
                            <div class="card-header">
                              <h4>{{$viewData['title']}}</h4>
                            </div>
                            <div class="card-body">
                              <div class="form-group">
                                <label>Titre</label>
                                <input type="text" class="form-control" value="{{ $about->title }}" name="title" required="">
                              </div>
                              <div class="form-group">
                                <label>Année d'expérience</label>
                                <input type="number" class="form-control" value="{{ $about->annee_experience }}" name="annee" required="">
                              </div>
                              <div class="form-group">
                                <label >Adresses de contact</label>
                                <div class="col-sm-12 col-md-7">
                                  <textarea class="summernote-simple" name="phone">{{ $about->telephone }}</textarea>
                                </div>
                              </div>
                              <div class="form-group mb-0">
                                <label>Courte Description</label>
                                <textarea class="form-control" name="short_description" required="">{{ $about->short_description }}</textarea>
                              </div>
                              <hr>
                              <div class="form-group form-row">
                                <div class="col-md-6">
                                  <label>Raison N°1</label>
                                  <input type="text" class="form-control" value="{{ $about->text1 }}" name="raison1" required=""><br>
                                  <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Icone du text 1</label>
                                    <div class="col-sm-12 col-md-7">
                                      <button name="icon1" class="btn btn-primary" data-iconset="fontawesome5" data-icon="{{ $about->img1 }}" role="iconpicker"></button>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <label>Raison N°2</label>
                                  <input type="text" class="form-control" value="{{ $about->text2 }}" name="raison2" required=""><br>
                                  <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Icone du text 1</label>
                                    <div class="col-sm-12 col-md-7">
                                      <button name="icon2" class="btn btn-primary" data-iconset="fontawesome5" data-icon="{{ $about->img2 }}" role="iconpicker"></button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group mb-0">
                                <label>Description Coplète</label>
                                <textarea class="form-control summernote" name="full_description" required="">{{ $about->full_description }}</textarea>
                              </div>
                              <div class="form-group mb-0">
                                <label>Nos projets</label>
                                <textarea class="form-control summernote" name="projets" required="">{{ $about->projets }}</textarea>
                              </div>

                              <br>
                              <div class="form-group">
                                <div class="form-group row mb-4">
                                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Icone du text 1</label>
                                  <div class="col-sm-12 col-md-7">
                                    <div id="image-preview" class="image-preview" style="width: 300px; height:300px">
                                      <img src="{{ asset('about/'.$about->about_img)}}" width="300" alt="">
                                      <label for="image-upload" id="image-label">Choisir une icône</label>
                                      <input type="file" name="about_img" id="image-upload" />
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
