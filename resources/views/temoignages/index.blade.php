@extends('layouts.backend')

@section('content')

    <!-- Main Content -->
    <div class="main-content">
        
        <section class="section">
            <div class="section-header">
                <h1>{{ $viewData['title'] }}</h1>
                <div class="section-header-breadcrumb">
                  <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                  <div class="breadcrumb-item"><a href="{{ route('temoignages.index')}}">Téemoignages</a></div>
                  <div class="breadcrumb-item">{{ $viewData['title'] }}</div>
                </div>
            </div>

            <div class="section-body ">
            
                <div class="row">
                <div class="col-12">
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
                    <div class="card">
                        <div class="card-header">
                            <h4>{{ $viewData['title'] }} </h4>
                            <div class="card-header-action">
                                <a href="{{ route('temoignages.create')}}" class="btn btn-icon icon-left btn-success"><i class="fas fa-plus"></i> Ajouter un témoignage</a>
                            </div>   
                            
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>                                 
                                        <tr>
                                            <th>Image </th>
                                            <th>Nom</th>
                                            <th>Profession</th>
                                            <th>Temoignage</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($viewData['temoignages'] as $temoignages)
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('temoignages/'.$temoignages->image)}}" width="70" alt="">
                                                </td>                                    
                                                <td>
                                                    {{ $temoignages->name }}
                                                </td>                                   
                                                <td>
                                                    {{ $temoignages->title }}
                                                </td>                                 
                                                <td>
                                                    {{ $temoignages->description }}
                                                </td> 
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle btn btn-primary" data-toggle="dropdown">Action</a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                          <a href="{{ route('temoignages.edit',$temoignages->id)}}" class="dropdown-item has-icon"><i class="far fa-edit text-primary"></i> Modifier</a>
                                                          <a href="{{ route('temoignages.destroy', $temoignages->id)}}" class="dropdown-item has-icon"><i class="fas fa-trash text-danger"></i> Supprimer</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
          </div>
        </section>
    </div>

@endsection