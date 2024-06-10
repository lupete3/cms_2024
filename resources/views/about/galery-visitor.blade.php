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
      <!-- Blog Start -->
      <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="row">
                
            <!-- Blog list Start -->
            <div class="col-lg-12">
                <div class="text-center mx-auto" style="max-width: 500px">
                    <h1 class="display-6 mb-5">Nos photos</h1>
                </div>
                <div class="row ">
                    @foreach ($viewData['galeries'] as $galerie)

                        <div class="col col-md-3 wow mb-4 fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item rounded">
                                <a href="{{ asset('galery/'.$galerie->image)}}" target="_blank" rel="noopener noreferrer">
                                    <img class="img-fluid" src="{{ asset('galery/'.$galerie->image)}}" alt="{{ $galerie->name }}" />
                                </a>
                                @if ($galerie->name)
                                    <div class="text-center p-4">
                                        <p>{{ $galerie->name }}</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- Blog list End -->
        
        </div>
    </div>
<!-- Blog End -->
    <!-- About End -->

@endsection



