<table class="table table-hover">
  

@if(isset($noticias))

<thead>
	<th>titulo</th>
	<th>descripcion</th>
	<th>imagen</th>

</thead>
<tbody>

@foreach($noticias as $n)


	<tr>
		<td>{{$n->titulo}}</td>
		<td>{{$n->descripcion}}</td>
		<td><img src="imgnoticias/{{$n->URLIMG}}" class="img-responsive" alt="Responsive image"></td>
	</tr>
@endforeach

</tbody>



@endif







</table>