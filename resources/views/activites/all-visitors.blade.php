@extends('layouts.frontend')

@section('content')
    
    <!-- Page Header Start -->
    <div
      class="container-fluid page-header py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s" 
    >
      <div class="container py-5" >
        <h1 class="display-4 animated slideInDown mb-4">{{ $viewData['title'] }}</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{ route('home')}}">Accueil</a></li>
            <li class="breadcrumb-item"><a href="#">Activités</a></li>
            <li class="breadcrumb-item active" aria-current="page">
              {{$viewData['title']}}
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- Page Header End -->
    
    <!-- Product Start -->
      
      <div class="container-xxl py-5">
        <div class="">
          <div class="row g-5">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
              <div class="row text-center" style="margin-top: -50px">
                <div class="filterable-btn">
                  <a class=" btn px-3 {{ Route::is('activites.all') ? 'bg-primary text-white' : 'btn-light' }}"  href="{{route('activites.all')}}" data-filter="*">Tout</a>
                  @foreach ($viewData['categories'] as $category)
                    <a class="btn px-3 {{ Request::is('produits/category/'.$category->slug) ? 'bg-primary text-white' : 'btn-light' }} "  href="{{ route('activites.category',$category->slug )}}" data-filter="*">{{$category->name}}</a>
                  @endforeach
                </div>
              </div>
              
              <div class="row g-1 mt-4">
                
                @foreach ($viewData['activites'] as $product)
                  <div class="col-6 col-md-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded">
                      <img class="img-fluid" src="{{asset('activites/'.$product->image)}}" alt="" />
                      <div class="text-center p-4">
                        <h5>{{ $product->name }}</h5>
                      </div>
                      <div class="team-text text-center bg-white p-4">
                        <h5>{{ $product->name }}</h5>
                        <p>{!! Str::limit($product->description,50) !!}</p>
                        
                          <div class="d-flex justify-content-center">
                            <a class="btn btn-light m-1" href="{{ route('activites.detail',$product->slug)}}"
                              ><i class="fas fa-eye"></i
                            > Voir le détail</a>
                            
                          </div>
                      </div>
                    </div>
                  </div>  
                @endforeach
                
              </div>
              <!-- /.card-body -->
              <div class="row container ">
                <div class="mailbox-controls mt-3 ">
                  <ul class="pagination ">
                    @if(\Request::route()->getName() == 'activites.category') 
                    
                    @else 
                        {!! $product = $viewData['activites'];  $product->withQueryString()->links('pagination::bootstrap-5') !!} 
                    @endif 
                      
                  </ul>
                </div>
              </div>
            </div>            

          </div>
        </div>
      </div>

    <!-- Product End -->


@endsection


   
