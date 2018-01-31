@extends('layouts.sistema')
	
@section('content')

		@component('sistema.components.painel', ['colunas'=>'8'])
		
		<form action="">
			
			@slot('titulo')
				Criar novo post
			@endslot
			
			<div class="form-group">
				<label for="">Titulo</label>
				<input type="text" class="form-control " placeholder="">
			</div>

			<div class="form-group">
				<label for="">Descrição</label>
				<textarea rows="5" class="form-control editor"></textarea>
			</div>
			
		@endcomponent

		@component('sistema.components.painel', ['colunas'=>'4'])
			@slot('titulo')
				Publicar

			@endslot
			
			<div class="form-group">
				<label for="">Categorias</label>
				<select class="selectpicker form-control" multiple>
				  	<option>Mustard</option>
				  	<option>Ketchup</option>
				  	<option>Relish</option>
				</select>
			</div>

		 	<div class="form-group checkbox checkbox-primary">
			    <input type="checkbox" class="form-control" id="checkbox1">
			    <label for="checkbox1">
			        Post detacado
			    </label>
		  	</div>
			

			<button type="submit" class="btn btn-primary btn-block">Publicar</button>

		</form>

		@endcomponent

	
@stop


@section('scripts')
	@include('sistema._includes._js._tinymce')
@stop