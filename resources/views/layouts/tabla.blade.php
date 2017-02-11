<table class="table table-hover">
  

@if(isset($noticias))

<thead>
	<th>titulo</th>
	<th>descripcion</th>
	<th>imagen</th>
	<th></th>
	<th></th>


</thead>
<tbody>

@foreach($noticias as $n)


	<tr>
		<td>{{$n->titulo}}</td>
		<td>{{$n->descripcion}}</td>
		<td><img src="imgnoticias/{{$n->URLIMG}}" class="img-responsive" alt="Responsive image"></td>


	<td>
		
		<a href="noticias/{{$n->id}}/edit" class="btn btn-warning btn-xs">modificar</a>
		
		<form action="{{ route('noticias.destroy',$n->id)}}" method="POST">
		<input name="_method" type="hidden" value="DELETE">
		{{csrf_field()}}

		<input type="submit" class="btn btn-danger btn-xs" value="eliminar">
</form>
	</td>

	</tr>
@endforeach

</tbody>



@endif







</table>