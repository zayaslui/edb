@extends('layouts.admin')

@section('content')

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Generos</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Editar Generos
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
								{!!Form::model($genero,['route'=>['genero.update',$genero],'method'=>'PUT'])!!}
									@include('genero.forms.gen')
									{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
								{!!Form::close()!!}

								{!!Form::open(['route'=>['genero.destroy', $genero], 'method' => 'DELETE'])!!}
									{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
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
@endsection