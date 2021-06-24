@extends('template.admin')

@section('title')
	crear una categoria
@endsection()

@section('body')
	<h1>Crear una categoria</h1>
	<section>
		<div class="container">
			<form action="{{ route('category.update',$category->id)}}" method="post">
				<input type="hidden" name="_method" value="PUT"> 
				@csrf
			  	<div class="form-group">
			    	<label for="name">nombre</label>
			    	<input
			    		type="text"
			    		class="form-control"
			    		id="name"
			    		name="name"
			    		placeholder="Enter category name"
			    		value="{{$category->name}}"
			    	>
			  	</div>
				 <button type="submit" class="btn btn-primary">Actualizar</button>
			</form>
		</div>
	</section>
@endsection()
