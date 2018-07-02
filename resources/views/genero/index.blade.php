@extends('layouts.admin')



@include('alerts.success')
@section('content')
		<table class="table">
			<thead>
				<th>Descripcion</th>
				<th>Operaciones</th>
			</thead>
			@foreach ($generos as $genero)
				<tbody>
					<td>{{$genero->descripcion}}</td>
					<td>
						<a class="btn btn-small btn-info" href="{{ URL::to('genero/' . $genero->id . '/edit') }}">Editar este genero</a>
					</td>
				</tbody>
			@endforeach
		</table>

		{{ $generos->links() }}
@stop