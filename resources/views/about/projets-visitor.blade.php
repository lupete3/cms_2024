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
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">
                {!! $about->projets !!}
            </div>
          </div>
        </div>
      </div>

    @endforeach
    <!-- About End -->


@endsection



