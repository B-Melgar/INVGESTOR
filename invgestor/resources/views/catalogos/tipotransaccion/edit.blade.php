@extends ('layouts.admin')
@section ('contenido') 
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">


		@if (count($errors)>0)
		<div class="alert alert-danger">
			<ul>
			@foreach ($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
			</ul>
		</div>
		@endif
	</div>
</div>

		{!! Form::model ($tipotransaccion, ['method'=>'PATCH','route'=>['tipotransaccion.update',$tipotransaccion->idtipotransaccion]])!!}
		{{Form::token()}}
		@csrf
		<div class="form-row">			
			<div class="form-group col-md-6">
				<div class="page-header">
					<h3>Modificar</h3> 
				</div>		

				<div class="box-body">
					<div class="form-group col-md-6">
						<label for="descripcion">Descripci&oacute;n</label>
						<input type="text" name="descripciontipotransaccion" class="form-control" value="{{$tipotransaccion->descripciontipotransaccion}}" required>
					</div>
					<div  class="form-group col-md-12">
						<a href="{{url ('catalogos/tipotransaccion')}}" class="btn btn-danger"><i class="fa fa-ban"></i> Cancelar</a>
						<button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Guardar</button>
					</div>
				</div>
			</div>
		</div>

		{!!Form::close()!!}
@endsection