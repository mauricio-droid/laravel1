@extends('template.admin')

@section('title')
	Crear categoria
@endsection()

@section('body')
	<h1>Crear una categoria</h1>
	<section>
		<div class="container">
			<form action="{{ route('category.store')}}" method="post">
				@csrf
			  	<div class="form-group">
			    	<label for="nameCategory">Nombre</label>
			    	<input type="text" class="form-control" id="nameCategory" name="name" aria-describedby="emailHelp" placeholder="Enter category name" >
			  	</div>
				 <button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</section>
@endsection()
