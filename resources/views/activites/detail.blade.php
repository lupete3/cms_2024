@extends('layouts.frontend')

@section('content')
    
    <!-- Page Header Start -->
    <div
      class="container-fluid page-header py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <h1 class="display-4 animated slideInDown mb-4">{{ $product->name }}</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{ route('home')}}">Accueil</a></li>
            <li class="breadcrumb-item"><a href="{{ route('activites.all') }}">Activités</a></li>
            <li class="breadcrumb-item active" aria-current="page">
              {{ $product->name }}
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- Page Header End -->
    
    <!-- Product Start -->
      
      <div class="container-xxl py-5">
        <div class="container">
          <div class="row g-5">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
              
              <div class="row g-3">
                  <div class="col-sm-12 wow fadeIn" data-wow-delay="0.1s">
                    <h3 class="mb-0 mt-2">{{ $product->name }}</h3> 
                    <hr>
                    <div class="  h-100 p-1">
                        <div class="bg-white d-flex flex-column justify-content-center text-center rounded ">
                          <img src="{{asset('activites/'.$product->image)}}" class="rounded " alt="">
                        </div>

                        <div class="mt-4">
                            {!! $product->description !!}
                        </div>

                    </div>
                    
                  </div>
              </div>
              
            </div>

          </div>
        </div>
      </div>

    <!-- Product End -->

@endsection


   
