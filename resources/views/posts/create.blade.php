@extends('layout.app')
@section('title','create')
@section('content')
<div class="container">
		 <div class="card card-default" style="margin-top: 20px">
	  	<div class="card-header">
	  		{{ isset($post) ? "update Post" : "Add Post"}}
	  	</div>
	  	<div class="card-body">
	  		<form method="POST"
				 action="{{ isset($post) ? route('Posts.update',$post->id) : route('Posts.store') }}"
				  enctype="multipart/form-data">
	  			 @csrf
					 @if(isset($post))
					  @method('PUT')
					@endif
			  <div class="form-group">
			    <label for="post title">post title</label>
			    <input type="text" class="form-control" name="title" placeholder="enter post title">
			  </div>
        <div class="form-group">
			    <label for="post desc">post desc</label>
			    <input type="text" class="form-control" name="desc" placeholder="enter post desc" >
			  </div>
        <div class="form-group">
			    <label for="post image">post image</label>
			    <input type="file" class="form-control" name="image">
			  </div>
        <div class="form-group">
			    <label for="post imga">post imaga</label>
			    <input type="file" class="form-control" name="imaga">
			  </div>
        <div class="form-group">
			    <label for="post imgb">post imagb</label>
			    <input type="file" class="form-control" name="imagb">
			  </div>
        <div class="form-group">
			    <label for="post imgc">post imagc</label>
			    <input type="file" class="form-control" name="imagc">
			  </div>
				<div class="form-group">
			    <label for="price">enter price</label>
			    <input type="number" class="form-control" name="price" placeholder="enter post desc">
			  </div>
			   <button type="submit"  class="btn btn-success">
					 {{ isset($post) ? "update " : "Add "}}
				 </button>
			</form>

	</div>
@endsection
