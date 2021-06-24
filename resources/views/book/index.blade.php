@extends('template.admin')

@section('title')
 Libros 
@endsection()

@section('body')
	<div class="container-fluid">
		<div class="row">
			<div class="col-8">
				<h1>Cuerpo</h1>
			</div>
			<div class="col-4">
				<a href="{{ route('book.create') }}" class="btn btn-primary">
					Agregar libro
				</a>
			</div>
		</div>
	</div>	
	<section>
		<div class="container">
			<table class="table">
  				<thead>
				    <tr>
				      <th scope="col">Id</th>
				      <th scope="col">Nombre</th>
				      <th scope="col">Autor</th>
				      <th scope="col">Categoria</th>
				      <th scope="col">Acciones</th>
				    </tr>
  				</thead>

		  		<tbody>
		  			@foreach($books as $book)
			    		<tr>
			    			<td>{{$book->id}}</td>
			      			<td>{{$book->name}}</td>
			      			<td>{{$book->autor->name}}</td>
			      			<td>{{$book->category->name}}</td>
			      			<td>
			      				<a class="btn btn-success" href="				{{route('book.edit',$book->id)}}">	
		      					Editar
			      				</a>
			      			</td>
			    		</tr>
		    		@endforeach()
				</tbody>
			</table>
		</div>
	</section>

@endsection()