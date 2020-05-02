@extends('layout.app')
@section('title','create')
@section('content')
<div class="container">
		 <div class="card card-default" style="margin-top: 20px">
	  	<div class="card-header">
	  		{{ isset($category) ? "update category" : "add category" }}
	  	</div>
	  	<div class="card-body">
	  		<form method="POST"
				 action="{{isset($category) ?  route('categories.update',$category->id) : route('categories.store')}}">
	  			 @csrf
					 @if(isset($category))
					  @method('PUT')
					@endif	
			  <div class="form-group">
			    <label for="category">category name</label>
			    <input type="text" class="form-control @error('name')is-invalid  @enderror" name="category" placeholder="enter category name"
					value="{{isset($category) ? $category->category : "" }}">
			    @error('name')
			    <div class="alert alert-danger">
			    	{{$message}}
			    </div>
			    @enderror
			    <br>
			   <button  class="btn btn-success">{{ isset($category) ? "update" : "add" }}</button>
			</form>
	  	</div>
	</div>
@endsection
