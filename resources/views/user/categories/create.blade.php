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
			<a href="{{route('index')}}" class="list-group-item active">Categories</a>
			<a href="#" class="list-group-item">Shared</a>
		</div>	
	</div>
	<div class="col-md-9">
		<div class="panel panel-default">
			<div class="panel-heading clearfix">
				<h3 class="pull-left panel-title">Create Category</h3>
				
			</div>
			<div class="panel-body">
				
			<form accept-charset="UTF-8" role="form" method="post" action="{{ route('create.category') }}">
				<div class="form-group">
					<label for="formGroupExampleInput">Category Name</label>
					<input type="text" class="form-control" id="category" placeholder="Category Name" maxlenght="100">
				</div>	
			</form>
			
			 <a class="btn btn-primary" type="submit" role="button">Create</a>
			 <a class="btn btn-primary" type="submit" role="button">Edit</a>
			 <a class="btn btn-primary" type="submit" role="button">Delete</a>
			<a href="{{route('index')}}" ><button type="button" class="btn btn-primary" id="create_category">Back</button></a>
		</div>
	</div>
</div>
@stop