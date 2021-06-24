@extends('template.admin')

@section('title')
	editar un autor
@endsection()

@section('body')
	<h1>Editar un autor</h1>
	<section>
		<div class="container">
			<form action="{{ route('autor.update',$autor->id)}}" method="post">
				<input type="hidden" name="_method" value="PUT"> 
				@csrf
			  	<div class="form-group">
			    	<label for="name">Nombre</label>
			    	<input
			    		type="text"
			    		class="form-control"
			    		id="name"
			    		name="name"
			    		placeholder="Enter autor name"
			    		value="{{$autor->name}}"
			    	>
			  	</div>
				 <button type="submit" class="btn btn-primary">Actualizar</button>
			</form>
		</div>
	</section>
@endsection()
