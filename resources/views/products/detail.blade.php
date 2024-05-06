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
            <li class="breadcrumb-item"><a href="{{ route('products.all') }}">Produits</a></li>
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
                
                  <div class="col-sm-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class=" rounded  h-100 p-1">
                      <div
                        class="bg-white d-flex flex-column justify-content-center text-center rounded "
                      >
                        <img src="{{asset('products/'.$product->image)}}" class="rounded " alt="">
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-7 wow fadeIn" data-wow-delay="0.1s">
                    <h3 class="mb-0 mt-2">{{ $product->name }}</h3> 
                    <hr>
                    <label for=""><b>Description</b></label>
                    <p class="mt-4">{{ $product->description }}</p>
                    <hr>
                    @php
                        use App\Models\Organisation;
                        $organisation = Organisation::all()->first();
                    @endphp

                    <label class="mb-4"><b>Livraison </b></label>
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-primary px-3 mb-2" href="mailto:{{$organisation->email}}?subject=Bonjour cher assistant&body={{Request::getUri()}}"><i class="fas fa-envelope"></i> Contacter le fournisseur </a>
                        </div>
                        <div class="col-md-6">
                            <a class="btn btn-outline-primary px-2" href="https://wa.me/{{$organisation->phone}}"><i class="fas fa-phone"></i> Contactez-nous</a>
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


   
