@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Articulos</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @can('crear-articulo')
                                <a class="btn btn-success" href="{{route('articulos.create')}}">Nuevo</a>
                            @endcan
                            <table class="table table-striped mt-2">
                                <thead style="background-color: #6777ef">
                                    <th style="display: none;">Id</th>
                                    <th style="color: #fff;">Nombre</th>
                                    <th style="color: #fff;">Sigla</th>
                                    <th style="color: #fff;">Precio</th>
                                    <th style="color: #fff;">Descripcion</th>
                                    <th style="color: #fff;">Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach ($articulos as $articulo)
                                        <tr>
                                            <td style="display: none;">{{$articulo->id}}</td>
                                            <td>{{$articulo->nombre}}</td>
                                            <td>{{$articulo->sigla}}</td>
                                            <td>{{$articulo->precio}}</td>
                                            <td>{{$articulo->descripcion}}</td>
                                            <td>
                                                <form action="{{ route('articulos.destroy',$articulo->id) }}" method="POST">
                                                    @can('editar-articulo')
                                                        <a href="{{ route('articulos.edit', $articulo->id) }}" class="btn btn-info">Editar</a>
                                                    @endcan
                                                    @csrf
                                                    @method('DELETE')
                                                    @can('borrar-articulo')
                                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                                    @endcan
                                                </form>
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
    </section>
@endsection
