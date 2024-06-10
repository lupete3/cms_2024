@extends('layouts.frontend')

@section('content')
    
@php
  use App\Models\Organisation;
@endphp
    <!-- Page Header Start -->
    <div
      class="container-fluid page-header py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <h1 class="display-4 animated slideInDown mb-4">{{ $viewData['title']}}</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{ route('home')}}">Accueil</a></li>
            <li class="breadcrumb-item active" aria-current="page">
                {{ $viewData['title']}}
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- Page Header End -->
    
    <!-- About Start -->
    @foreach ($viewData['abouts'] as $about)
    
      <div class="container-xxl py-5">
        <div class="container">
          <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
              <div
                class="position-relative overflow-hidden rounded ps-5 pt-5 h-100"
                style="min-height: 400px"
              >
                <img
                  class="position-absolute w-100 h-100"
                  src="{{ asset('about/'.$about->about_img) }}"
                  alt=""
                  style="object-fit: cover"
                />
                <div
                  class="position-absolute top-0 start-0 bg-white rounded pe-3 pb-3"
                  style="width: 200px; height: 200px"
                >
                  <div
                    class="d-flex flex-column justify-content-center text-center bg-primary rounded h-100 p-3"
                  >
                    <h1 class="text-white mb-0">{{ $about->annee_experience }}</h1>
                    <h2 class="text-white">Années</h2>
                    <h5 class="text-white mb-0">Expériences</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
              <div class="h-100">
                <h1 class="display-6 mb-5">
                  {{ $about->title }}
                </h1>
                <p class="fs-5 text-primary mb-4">
                  {{ $about->short_description }}
                </p>
                <div class="row g-4 mb-4">
                  <div class="col-sm-6">
                    <div class="d-flex align-items-center">
                      <i class=" ico {{ $about->img1 }}" ></i>
                      <h5 class="mb-0">{{ $about->text1 }}</h5>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="d-flex align-items-center">
                      <i class=" ico {{ $about->img2 }}" ></i>
                      <h5 class="mb-0">{{ $about->text2 }}</h5>
                    </div>
                  </div>
                </div>
                <p class="mb-4">
                  {{ $about->full_description }}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

    @endforeach
    <!-- About End -->

    <!-- Facts Start -->
    @foreach ($viewData['successes'] as $success)
        
      <div class="container-fluid overflow-hidden my-5 px-lg-0">
        <div class="container facts px-lg-0">
          <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 facts-text wow fadeIn" data-wow-delay="0.1s" 
              style="
                background: linear-gradient(rgba(1, 95, 201, .6), 
                rgba(1, 95, 201, .7)), 
                url(@php echo asset('success/'.$success->img1)@endphp) center right no-repeat;
                background-size: cover;
              " >
              <div class="h-100 px-4 ps-lg-0">
                <h1 class="text-white mb-4">{{ $success->title }}</h1>
                <p class="text-light mb-5">
                  {{ $success->description }}
                </p>
                
                >
              </div>
            </div>
            <div class="col-lg-6 facts-counter wow fadeIn" data-wow-delay="0.5s"
              style="
                background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)),  
                url(@php echo asset('success/'.$success->img2)@endphp) center right no-repeat;
                background-size: cover;
              " >
              
              <div class="h-100 px-4 pe-lg-0">
                <div class="row g-5">
                  <div class="col-sm-6">
                    <h1 class="display-5" data-toggle="counter-up">{{ $success->count1 }}</h1>
                    <p class="fs-5 text-primary">{{ $success->text1 }}</p>
                  </div>
                  <div class="col-sm-6">
                    <h1 class="display-5" data-toggle="counter-up">{{ $success->count2 }}</h1>
                    <p class="fs-5 text-primary">{{ $success->text2 }}</p>
                  </div>
                  <div class="col-sm-6">
                    <h1 class="display-5" data-toggle="counter-up">{{ $success->count3 }}</h1>
                    <p class="fs-5 text-primary">{{ $success->text3 }}</p>
                  </div>
                  <div class="col-sm-6">
                    <h1 class="display-5" data-toggle="counter-up">{{ $success->count4 }}</h1>
                    <p class="fs-5 text-primary">{{ $success->text4 }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    @endforeach
    <!-- Facts End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
          <div class="text-center mx-auto" style="max-width: 500px">
            <h1 class="display-6 mb-5">Rencontrez les membres de notre équipe professionnelle</h1>
          </div>
          <div class="row g-4">
            @foreach ($viewData['teams'] as $team)
              <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item rounded">
                  <img class="img-fluid" src="{{ asset('teams/'.$team->image)}}" alt="" />
                  <div class="text-center p-4">
                    <h5>{{ $team->name }}</h5>
                    <span>{{ $team->role }}</span>
                  </div>
                  <div class="team-text text-center bg-white p-4">
                    <h5>{{ $team->name }}</h5>
                    <p>{{ $team->role }}</p>
                    @php

                      $organisations = Organisation::latest()->get();
                      foreach ($organisations as $organisation) {
                              
                      }
                    @endphp
                    <div class="d-flex justify-content-center">
                      <a class="btn btn-square btn-light m-1" href="{{ $organisation->twitter }}"
                        ><i class="fab fa-twitter"></i
                      ></a>
                      <a class="btn btn-square btn-light m-1" href="{{ $organisation->facebook }}"
                        ><i class="fab fa-facebook-f"></i
                      ></a>
                      <a class="btn btn-square btn-light m-1" href="{{ $organisation->youtube }}"
                        ><i class="fab fa-youtube"></i
                      ></a>
                      <a class="btn btn-square btn-light m-1" href="{{ $organisation->linkedin }}"
                        ><i class="fab fa-linkedin-in"></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
            
            
          </div>
        </div>
    </div>
    <!-- Team End -->
    
    <!-- Vendor Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="text-center mx-auto" style="max-width: 500px">
            <h1 class="display-6 mb-5">Nos partenaires</h1>
        </div>
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    @foreach ($viewData['partenaires'] as $partenaire)
                        <img src="{{asset('partenaires/'.$partenaire->image)}}" alt="">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->

    

@endsection


   
