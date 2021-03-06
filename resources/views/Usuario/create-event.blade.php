@extends('layouts.header-footer-usuario')

@section('content')
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-center m-0 font-weight-bold" style="color: #267d24;font-size: 25px;">Crear evento</p>
        </div>
        <div class="card-body">
            <div class="row d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center">
                <div class="col-lg-7 col-lg-7-event">
                    <div class="p-5">
                        <form class="user" action="{{route('evento.store')}}" method="POST">
                            {{ csrf_field() }} 
                            <div class="resume-content">
                                <input name="id_usuario" type="hidden" value="{{$users->id}}" ></input>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0" style="min-width: 80%;">
                                    <input class="form-control form-control-user" type="text" placeholder="Nombre del evento" id="nombre" name="nombre" style="font-size: 18px;color: rgb(0,0,0);">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0" style="min-width: 90%;">
                                    <textarea class="form-control form-control-user" placeholder="Objetivo" id="objetivo" name="objetivo" style="font-size: 18px;color: rgb(0,0,0);"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0" style="min-width: 100%;">
                                    <textarea class="form-control form-control-user" placeholder="Descripción" id="descripcion" name="descripcion" style="font-size: 18px;color: rgb(0,0,0);"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0" style="min-width: 100%;">
                                    <input class="form-control" id="fecha_creacion" name="fecha_creacion" type="hidden" value="{{$date}}" placeholder="Fecha"></input>
                                </div>
                            </div>
                            
                            <div class="resume-content">
                                <h3 class="mb-0">Fecha  de inicio:</h3>
                                <input class="form-control form-control-user" id="fecha_inicio" name="fecha_inicio" type="date" placeholder="Fecha"></input>
                            </div>

                            <div class="resume-content">
                                <h3 class="mb-0">Hora de inicio:</h3>
                                <input class="form-control form-control-user" id="hora_inicio" name="hora_inicio" type="time" placeholder="Fecha"></input>
                            </div>

                            <div class="resume-content">
                                <h3 class="mb-0">Fecha de finalización:</h3>
                                <input class="form-control form-control-user" id="fecha_fin" name="fecha_fin" type="date" placeholder="Fecha"></input>
                            </div>

                            <div class="resume-content">
                                <h3 class="mb-0">Hora de finalización:</h3>
                                <input class="form-control form-control-user" id="hora_fin" name="hora_fin" type="time" placeholder="Fecha"></input>
                            </div>
                            
                            
                            <div class="form-group row">
                                <div class="col-sm-6 d-xl-flex align-items-xl-center mb-3 mb-sm-0" style="min-width: 100%;">
                                    <label style="font-size: 18px;color: rgb(0,0,0);margin-right: 10px;width: 350px;">Imagen (800x533 pixeles)</label>
                                    <input type="file" name="imagen" accept="image/*" style="font-size: 18px;color: rgb(0,0,0);width: 100%;">
                                </div>
                                <div class="col-sm-6 d-flex justify-content-center mb-3 mb-sm-0" style="margin-top: 10px;">
                                    <img src="assets/img/Eventos/image2.jpg" style="width: 100%;">
                                </div>
                            </div>
                            <button class="btn btn-primary btn-block text-white btn-user" type="submit" style="font-size: 18px;width: 80%;margin: auto;">Crear evento</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection