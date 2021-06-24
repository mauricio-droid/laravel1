@extends('template.admin')

@section('title')
	crear un autor
@endsection()

@section('body')
	<h1>Crear un autor</h1>
	<section>
		<div class="container">
			<form action="{{ route('autor.store')}}" method="post">
				@csrf
			  	<div class="form-group">
			    	<label for="name">nombre</label>
			    	<input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter autor name" >
			  	</div>
				 <button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</section>
@endsection()

