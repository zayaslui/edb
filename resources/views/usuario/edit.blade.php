@extends('layouts.admin')

@section('content')

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
								{!!Form::model($user,['route'=>['usuario.update',$user],'method'=>'PUT'])!!}
									@include('usuario.forms.usr')
									{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
								{!!Form::close()!!}

								{!!Form::open(['route'=>['usuario.destroy', $user], 'method' => 'DELETE'])!!}
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