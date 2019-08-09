@extends('layouts.admin')
@section('title','Usuarios')
@section('content')
    <div class="row top-md">
    	<div class="col-md-10 col-lg-10 col-xs-12 col-sm-12">
    		<form action="" style="margin-bottom: 5px;">
            	<input type="search" placeholder="Buscar clientes" class="form-control" name="search">
            </form>
    	</div>
    	<div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
    		<a href="/admin/clientes/create" class="btn btn-success bm-md">Agregar</a>
    	</div>
        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
            @include('layouts.card',['title'=>'Listado de clientes','data'=>'customers.data','count'=>count($customers),'mobile'=>'customers.mobile'])
        </div>
    </div>
@stop