@extends('template.admin')

@section('title')
	añadir libro
@endsection()

@section('body')
	<h1>Añadir libro</h1>
	<section>
		<div class="container">
			<form action="{{ route('book.store')}}" method="post">
				@csrf
			  	<div class="form-group">
			    	<label for="name">Nombre</label>
			    	<input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter book name" >
			  	</div>

			  	<div class="form-group">
				    <label for="autor_id">Autor</label>
				    <select class="form-control" id="autor_id" name="autor_id">		
				    	@foreach($autorsIds as $autor)
				      		<option value="{{$autor->id}}">{{$autor->name}}</option>
				      	@endforeach
				    </select>
				 </div>

				 <div class="form-group">
				    <label for="category_id">Categoría</label>
				    <select class="form-control" id="category_id" name="category_id">
				    	@foreach($categoriesId as $category)
				      		<option value="{{$category->id}}">{{$category->name}}</option>
				      	@endforeach
				    </select>
				 </div>
				 <button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</section>
@endsection()
