@extends('layout.app')
@section('title','Posts')
@section('content')

	<div class="container">
		<dir class="clearfix">
			<a href="{{route('Posts.create')}}" class="btn btn-success float-right ">add post</a>
		</dir>

	  <div class="card card-default" style="margin-top: 20px">
	  	<div class="card-header">
	  		All post
	  	</div>
	  	<div class="card-body">
				<table class="table table-striped">
					<thead>
					 <tr>
						 <th scope="col">image</th>
						 <th scope="col">title</th>
						 <th scope="col">edit</th>
						 <th scope="col">delete</th>
					 </tr>
				 </thead>
				 <tbody>
					 @foreach($posts as $post)
					 <tr>

						 <td><img src="{{ asset('storage/'.$post->image)}}" alt="no" width="100px" height="50px" ></td>
						 <td>{{$post->title}}</td>
						 <td><a href="{{route('Posts.edit',$post->id)}}" class="btn btn-primary btn-sm">edit</a></td>
						 <td>
							 <form action="{{route('Posts.destroy',$post->id)}}" method="POST">
							 @csrf
							 @method('DELETE')
							 <button class="btn btn-danger btn-sm ">delete</button>
						 </form
						 ></td>
					 </tr>
					 @endforeach
				 </tbody>
				</table>

	  	</div>
	</div>

@endsection
