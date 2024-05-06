@extends('layouts.frontend')

@section('content')
    
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

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
          <div class="text-center mx-auto" style="max-width: 500px">
            <h1 class="display-6 mb-5">
              Nous fournissons des services professionnels 
            </h1>
          </div>
          <div class="row g-4 justify-content-center">
            @foreach ($viewData['services'] as $service)
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded h-100 p-5">
                  <div class="d-flex align-items-center ms-n5 mb-4">
                    <div
                      class="service-icon flex-shrink-0 bg-primary rounded-end me-4"
                    >
                      <i class="ico-service {{ $service->icon }}"></i>
                    </div>
                    <h4 class="mb-0">{{ $service->title }}</h4>
                  </div>
                  <p class="mb-4">
                    {{ $service->description }}
                  </p>
                  <a class="btn btn-light px-3" href="">En savoir plus</a>
                </div>
              </div>
            @endforeach
            
          </div>
        </div>
      </div>
      <!-- Service End -->
    
 @endsection


   
