@if (session()->has('msj'))
<div class="alert alert-success" role="alert">{{session('msj')}}</div>


@endif
@if (session()->has('msj2'))
<div class="alert alert-danger" role="alert">{{session('msj2')}}</div>
@endif

<form class="form-horizontal"  method="POST" action="{{ url('noticias') }}"   enctype="multipart/form-data">
{{csrf_field()}}
  <div class="form-group">
    <label for="titulo" class="col-sm-2 control-label">Titulo</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="titulo" placeholder="Titulo">
		
	@if($errors->has('titulo'))
	<span style="color:red">{{$errors->first('titulo')}}</span>	
	@endif


    </div>
  </div>
  <div class="form-group">
    <label for="descripcion" class="col-sm-2 control-label">Descripcion</label>
    <div class="col-sm-10">
      <textarea type="text" class="form-control" name="descripcion" placeholder="Descripcion"></textarea>

    @if($errors->has('descripcion'))
		<span style="color:red">{{$errors->first('descripcion')}}</span>	
	@endif
   
    </div>
  </div>

<div class="form-group">
    <label for="UrlImg" class="col-sm-2 control-label">Imagen</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" name="UrlImg" >
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Crear</button>
    </div>
  </div>
</form>