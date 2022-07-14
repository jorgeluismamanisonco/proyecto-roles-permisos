@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Dashboard</h3>
        </div>
        <div class="section-body">      
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                @can('crear-producto')
                                <a class="btn btn-success" href="{{route('relaciones.create')}}">Agregar Nuevo Productos</a>
                                @endcan
                                @can('crear-producto')
                                <a class="btn btn-info" href="{{route('relaciones.create')}}">Agregar Categoria Productos</a>
                                @endcan
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <th>Id</th>
                                        <th>Descripcion</th>
                                        <th>Categoria</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($productos as $producto)
                                            <tr>
                                                <td>{{$producto->id}}</td>
                                                <td>{{$producto->descripcion}}</td>
                                                <td>{{$producto->categorias->descripcion}}</td>
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
@endsection