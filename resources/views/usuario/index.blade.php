@extends('layouts.admin')


@if (session('message'))
	<div class="alert alert-success alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <strong>{{ session('message') }}</strong>
	</div>
@endif

@section('content')
		<table class="table">
			<thead>
				<th>Nombre</th>
				<th>Correo</th>
				<th>Operaciones</th>
			</thead>
			@foreach ($users as $user)
				<tbody>
					<td>{{$user->name}}</td>
					<td>{{$user->email}}</td>
					<td>
						<a class="btn btn-small btn-info" href="{{ URL::to('usuario/' . $user->id . '/edit') }}">Edit this User</a>
					</td>
				</tbody>
			@endforeach
		</table>

		{{ $users->links() }}
@stop