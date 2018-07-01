@extends('layouts.admin')

@section('content')
		{{-- alert --}}
			@include('alerts.request')
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Género</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Agregar Géneros
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
									{!!Form::open(['route'=> 'genero.store', 'method'=>'POST'])!!}                                    	
									    @include('genero.forms.gen')
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