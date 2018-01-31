@extends('layouts.sistema')

@section('content')
	
	@component('sistema.components.painel', ['colunas'=>'3'])
		@slot('titulo')
			<span class="label label-success pull-right">Mensal</span> Usuários 
		@endslot

		<h1 class="no-margins">
			<span data-counter="counterup" data-value="886,250">5.000</span>
		</h1>
        <div class="stat-percent font-bold text-success">
        	98% <i class="fa fa-bolt"></i>
        </div>
        <small>Total usuários</small> 

	@endcomponent

	@component('sistema.components.painel', ['colunas'=>'3'])
		@slot('titulo')
			<span class="label label-primary pull-right">Mensal</span> Usuários 
		@endslot

		<h1 class="no-margins">
			<span data-counter="counterup" data-value="886,250">5.000</span>
		</h1>
        <div class="stat-percent font-bold text-primary">
        	98% <i class="fa fa-bolt"></i>
        </div>
        <small>Total usuários</small> 

	@endcomponent
		

@stop