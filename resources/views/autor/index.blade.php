@extends('template.admin')

@section('title')
 Autores 
@endsection()

@section('body')
	<div class="container-fluid">
		<div class="row">
			<div class="col-8">
				<h1>Cuerpo</h1>
			</div>
			<div class="col-4">
				<a href="{{ route('autor.create') }}" class="btn btn-primary">
					agregar autor
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
				      <th scope="col">Libros</th>
				      <th scope="col">Acciones</th>
				    </tr>
  				</thead>

		  		<tbody>
		  			@foreach($autors as $autor)
			    		<tr>
			      			<td>{{$autor->id}}</td>
			      			<td>{{$autor->name}}</td>

			      			<td>
			      				@foreach($autor->books as $book)
			      						<li>
			      							<a href="{{route('book.edit',$book->id)}}">
			      								{{$book->name}}
			      							</a>
			      						</li>
	      					@endforeach()
			      			</td>
			      			
			      			<td>
			      				<a class="btn btn-success" href="{{route('autor.edit',$autor->id)}}">
			      					Editar
			      				</a>

			      				<form method="post" action="{{route('autor.destroy',$autor->id)}}">
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

