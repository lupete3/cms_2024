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
                        @foreach ($viewData['success'] as $success)
                        
                          <form method="post" action="{{ route('success.update',$success->id)}}" enctype="multipart/form-data">
                              @csrf
                            <div class="card-header">
                              <h4>{{$viewData['title']}}</h4>
                            </div>
                            <div class="card-body">

                              <div class="form-group">
                                <label>Titre</label>
                                <input type="text" class="form-control" value="{{ $success->title }}" name="title" required="">
                              </div>
                              
                              <div class="form-group mb-0">
                                <label>Courte Description </label>
                                <textarea class="form-control" name="description" required="">{{ $success->description }}</textarea><br>
                              </div>

                              <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Texte 01</label>
                                    <input type="text" class="form-control" value="{{ $success->text1 }}" name="text1" required="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Compteur</label>
                                    <input type="number" class="form-control" value="{{ $success->count1 }}" name="count1" required="">
                                </div>
                              </div>

                              <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Texte 02</label>
                                    <input type="text" class="form-control" value="{{ $success->text2 }}" name="text2" required="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Compteur</label>
                                    <input type="number" class="form-control" value="{{ $success->count2 }}" name="count2" required="">
                                </div>
                              </div>

                              <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Texte 03</label>
                                    <input type="text" class="form-control" value="{{ $success->text3 }}" name="text3" required="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Compteur</label>
                                    <input type="number" class="form-control" value="{{ $success->count3 }}" name="count3" required="">
                                </div>
                              </div>

                              <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Texte 04</label>
                                    <input type="text" class="form-control" value="{{ $success->text4 }}" name="text4" required="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Compteur</label>
                                    <input type="number" class="form-control" value="{{ $success->count4 }}" name="count4" required="">
                                </div>
                              </div>

                              <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Arrière plan gauche</label>
                                    <input type="file" class="form-control" name="background1" >
                                </div>
                                <div class="form-group col-md-6">
                                    <img src="{{ asset('success/'.$success->img1)}}" width="400" alt="">
                                </div>
                              </div>

                              <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Arrière plan droit</label>
                                    <input type="file" class="form-control" name="background2" >
                                </div>
                                <div class="form-group col-md-6">
                                    <img src="{{ asset('success/'.$success->img2)}}" width="400" alt="">
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