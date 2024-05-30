@extends('adminlte::page')

@section('title', 'Expediente')

@section('content_header')
    <div class="header-flex">
        <h1>Evidencias Cursos</h1>
        <div>
            <a href="{{ route('cursosExpediente.index') }}" class="btn btn-secondary">Regresar</a>
        </div>
    </div>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body header-flex">
                                        <div class="left-content">
                                            <div class="text-center">
                                                <img src="{{ asset('path_to_default_avatar') }}" alt=""
                                                    class="img-circle">
                                            </div>
                                            <h6 class="text-left mt-2">Nombres: {{ $evidenciasCU->name }}
                                                {{ $evidenciasCU->secondName }}</h6>
                                            <h6 class="text-left mt-2">Apellidos:
                                                {{ $evidenciasCU->paternalSurname }}
                                                {{ $evidenciasCU->maternalSurname }}</h6>
                                            <h6 class="text-left mt-2">Edad: {{ $evidenciasCU->age }} años</h6>
                                        </div>
                                        <div class="right-content">
                                            <span class="badge badge-info">Estatus: Activo</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <table class="table">
                                <thead>
                                    <tr style="text-align: center">
                                        <th scope="col">id</th>
                                        <th scope="col">Cursos</th>
                                        <th scope="col">Documentos <br>(Evidencias)</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="text-align: center">
                                        <td>1</td>
                                        <td>2</td>
                                        <td><a href="#" class="btn btn-primary">Ver</a></td>
                                        <td>4</td>
                                        <td><a href=""" class="btn btn-warning">Archivar</a></td>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <style>
        .header-flex {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .content-flex {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .left-content {
            width: 50%;
            float: left;
        }

        .right-content {
            width: 50%;
            float: right;
            text-align: right;
        }

        .button-right {
            float: right;
        }
    </style>
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script>
        console.log("Hi, I'm using the Laravel-AdminLTE package!");
    </script>
@stop
