@extends('layouts.dashboard', ['menu' => "Fortnite"])

@section('content')

<div class="ibox float-e-margins">
	<div class="ibox-title">
		<h5>Comando contador de wins por sesion</h5>
		<div class="ibox-tools">
			<a class="collapse-link">
				<i class="fa fa-chevron-up"></i>
			</a>
		</div>
	</div>
	 <div class="ibox-content">
	 	{!! Form::open(['url' => 'fortnite/comenzarContadorWins', 'method' => 'POST', 'id' => 'form-wins', 'class' => 'form-horizontal']) !!}
	 		<div class="form-group">
		 		<div class="row">
		 			<label class="col-lg-2 control-label">Nombre de Epic Games</label>
		 			<div class="col-lg-4">
		 				<input type="text" placeholder="Nombre de usuario" class="form-control input-lg" required="" name="username">
		 			</div>
		 			<div class="col-lg-2">
		 				<select class="form-control input-lg" required="" name="plataforma">
		 					<option value="pc">PC</option>
		 					<option value="xbl">Xbox</option>
		 					<option value="psn">Playstation</option>
		 				</select>
		 			</div>
		 			<div class="col-lg-3">
		 				<input type="text" placeholder="Wins" class="form-control" name="wins_extra">
		 				<span class="help-block m-b-none pull-right">Puedes introducir wins manualmente.</span>
		 			</div>
		 			<div class="col-lg-1">
		 				<button class="btn btn-info btn-circle btn-lg" type="submit"><i class="fa fa-check"></i></button>
		 			</div>
		 		</div>
		 	</div>
	 	{!! Form::close() !!}
	 	<div class="row">
	 		<div class="col-md-6">
	 			<div class="alert alert-success alert-dismissable hidden" id="alerta-contador-done">
	 				<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
	 				Contador inicializado, usa el siguiente comando: <br>
	 				<strong>!addcom !wins $(urlfetch {{ Request::url() }}/wins/<label id="id_api_fortnite_add"></label>) wins en esta transmision. </strong><br>
	 				Si ya existe el comando entonces: <br>
	 				<strong>!editcom !wins $(urlfetch {{ Request::url() }}/wins/<label id="id_api_fortnite_edit"></label>) wins en esta transmision. </strong><br>
	 			</div>
	 		</div>
	 	</div>
	 </div>
	</div>

@stop

@section('scripts')
    {!!Html::script('scripts/dashboard/fortnite.js')!!}
@stop