@extends('layouts.sistema')

@section('content')

	@component('sistema.components.painel', ['colunas'=>'12'])
		@slot('titulo')
			Todos os posts
		@endslot

		<table id="example0" class="table display dataTable" role="grid" aria-describedby="example0_info">
            <thead>
            	<tr>	
					<th>#ID</th>
					<th>Titulo</th>
					<th>Autor</th>
            	</tr>
            </thead>     
            <tbody>
            	<tr>
            		<td>1</td>
            		<td>New Post</td>
            		<td>Admin</td>
            	</tr>
            </tbody>
        </table>
	@endcomponent
@stop

@section('scripts')
	<script src="{{ asset('public/js/datatables/datatables.min.js')}}"></script>
	<script src="{{ asset('public/js/datatables/config.js')}}"></script>
@stop