@extends('layouts.admin')

@section('content')
		{{-- alert --}}
			@include('alerts.request')
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Usuarios</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Agregar Usuarios
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
									{!!Form::open(['route'=> 'usuario.store', 'method'=>'POST'])!!}                                    	
									    @include('usuario.forms.usr')
									    {{-- <button type="submit" class="btn btn-primary">Agregar</button> --}}
									    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
									{!!Form::close()!!}
                                </div>

                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        @stop