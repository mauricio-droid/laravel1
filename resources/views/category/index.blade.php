@extends('template.admin')

@section('title')
 Categorias 
@endsection()

@section('body')
	<div class="container-fluid">
		<div class="row">
			<div class="col-8">
				<h1>Cuerpo</h1>
			</div>
			<div class="col-4">
				<a href="{{ route('category.create') }}" class="btn btn-primary">
					Agregar categoria
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
				      <th scope="col">cuantos libros</th>
				      <th scope="col">Acciones</th>
				    </tr>
  				</thead>

		  		<tbody>
		  			@foreach($categories as $category)
			    		<tr>
			      			<td>{{$category->id}}</td>
			      			<td>{{$category->name}}</td>
			      			<td>
			      				<ul>
			      					@foreach($category->books as $book)
			      						<li>
			      							<a href="{{route('book.edit',$book->id)}}">
			      								{{$book->name}}
			      							</a>
			      						</li>
			      					@endforeach()
			      				</ul>
			      			</td>
			      			<td>
			      				<a class="btn btn-success" href="{{route('category.edit',$category->id)}}">	
		      						Editar
			      				</a>

			      				<form method="post" action="{{route('category.destroy',$category->id)}}">
                  					<input type="hidden" name="_method" value="DELETE"> 
                 				 	@csrf
                  					<button type="submit" class="btn btn-danger">Eliminar</button>
                  				</form>

			      			</td>
			    		</tr>
		    		@endforeach()
				</tbody>
			</table>
		</div>
	</section>

@endsection()

