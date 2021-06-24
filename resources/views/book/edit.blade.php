@extends('template.admin')

@section('title')
	editar libro
@endsection()

@section('body')
	<h1>Editar libro</h1>
	<section>
		<div class="container">
			<form action="{{ route('book.update',$book->id)}}" method="post">
				<input type="hidden" name="_method" value="PUT"> 
				@csrf
				<!-- Nombre -->
			  	<div class="form-group">
			    	<label for="name">Nombre</label>
			    	<input
			    		type="text"
			    		class="form-control"
			    		id="name"
			    		name="name"
			    		placeholder="Enter book name"
			    		value="{{$book->name}}"
			    	>
			  	</div>
			  	<!-- Autor -->
			  	<div class="form-group">
			    <label for="autor_id">Autor</label>
			    <select class="form-control" id="autor_id" name="autor_id">
			    	@foreach($autorsIds as $autor)
			      		<option value="{{$autor->id}}" @if($book->autor_id == $autor->id) selected @endif()>{{$autor->name}}</option>
			      	@endforeach
			    </select>
			 </div>
			  	<!-- Categoria -->
				<div class="form-group">
			    <label for="category_id">Categoría</label>
			    <select class="form-control" id="category_id" name="category_id">
			    	@foreach($categoriesId as $category)
			      		<option value="{{$category->id}}" @if($book->category_id == $category->id) selected @endif()>{{$category->name}}</option>
			      	@endforeach
			    </select>
			 </div>

				 <button type="submit" class="btn btn-primary">Actualizar</button>
			</form>
		</div>
	</section>
@endsection()
