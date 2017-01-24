@extends('layouts.index')

@section('title', 'Categories | AlgebraBox')

@section('content')
<div class="row">
  <ol class="breadcrumb">
    <li><a href="{{route('home')}}">Home</a></li>
	<li class="active">Categories</li>
  </ol>
</div>
<div class="row">
	<div class="col-md-3">
		<div class="list-group">
			<a href="{{route('home')}}" class="list-group-item">Folders &amp; Files </a>
			<a href="#" class="list-group-item active">Categories</a>
			<a href="#" class="list-group-item">Shared</a>
		</div>	
	</div>
	<div class="col-md-9">
		<div class="panel panel-default">
			<div class="panel-heading clearfix">
				<h3 class="pull-left panel-title">Categories</h3>
				<div class="pull-right">
					<a href="{{route('categories.create')}}">
						<span class="pull-right glyphicon glyphicon-tag" aria-hidden="true"></span>
						<span class="pull-right glyphicon glyphicon-plus" aria-hidden="true"></span>
					</a>
				</div>
			</div>
			<div class="panel-body">
<<<<<<< HEAD
			
			<ul class="list-group">
				@foreach($categories as $category)
					<li class="list-group-item">	
					{{$category -> name}}
					<div class="pull-right">
						<a href="{{route('categories.edit')}}" class="btn btn-default"></a>
					</div>
				@endforeach 
			</ul>						
=======
				
			</div>
>>>>>>> 782450502e9a4602bf19c4c6700b05f36b5721cc
		</div>
	</div>
</div>
@stop
