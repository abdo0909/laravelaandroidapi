@extends('layout.app')
@section('title','Categories')
@section('content')

	<div class="container">
		<dir class="clearfix">
			<a href="{{route('categories.create')}}" class="btn btn-success float-right ">add category</a>
		</dir>

	  <div class="card card-default" style="margin-top: 20px">
	  	<div class="card-header">
	  		All Categories
	  	</div>
	  	<div class="card-body">
	  		<ul class="list-group">
	  			@foreach($categories as $category)

	               <li class="list-group-item">
	               		{{$category->category}}
										<form class="float-right ml-2" action="{{route('categories.destroy',$category->id)}}" method="POST">
											@csrf
 											@method('DELETE')
											<button class="btn btn-danger btn-sm float-right">delete</button>
										</form>
										<a href="{{route('categories.edit',$category->id)}}" class="btn btn-primary btn-sm float-right">edit</a>

	               </li>

               @endforeach
             </ul>
	  	</div>
	</div>

@endsection
