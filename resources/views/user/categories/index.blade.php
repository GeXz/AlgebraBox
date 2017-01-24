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
<<<<<<< HEAD
			
				<ul class="list-group">
					@foreach($categories as $category)
						<li class="list-group-item">
				
						{{$category -> name}}
					<div class="pull-right">
						<a href="{{route('categories.edit')}}" class="btn btn-default">
							<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
								Edit
						</a>
						<a href="" class="btn btn-danger" data-method="delete" data-token="{{ csrf_token() }}">
							<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
							Delete
						</a>
					</div>	
					@endforeach 
				</ul>	
=======
				
>>>>>>> 69a0515a584a7c3776696f7a01a0d672b419637c
			</div>
=======
			
			<ul class="list-group">
				@foreach($categories as $category)
					<li class="list-group-item">
				
					{{$category -> name}}
					<div class="pull-right">
						<a href="{{route('categories.edit')}}" class="btn btn-default">
                    </div>                   
				@endforeach 
			</ul>	
>>>>>>> 2405146f2ca736a9b705733b6e9d047983c51929
		</div>
	</div>
</div>
@stop
