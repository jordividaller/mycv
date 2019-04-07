@extends('template')

@section('contenu')
	<br>
	<div class="col-sm-offset-3 col-sm-6">
		<div class="panel panel-info">
			<div class="panel-heading">Ajout d'une experience</div>
			<div class="panel-body">
				{!! Form::open(['route' => 'experience.store']) !!}
					<div class="form-group {!! $errors->has('titre') ? 'has-error' : '' !!}">
						{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'title']) !!}
					</div>
					<div class="form-group {!! $errors->has('contenu') ? 'has-error' : '' !!}">
						{!! Form::textarea ('description', null, ['class' => 'form-control', 'placeholder' => 'description']) !!}
					</div>
					<div class="form-group {!! $errors->has('titre') ? 'has-error' : '' !!}">
						{!! Form::text('logo', null, ['class' => 'form-control', 'placeholder' => 'logo']) !!}
					</div>
					<div class="form-group {!! $errors->has('titre') ? 'has-error' : '' !!}">
						{!! Form::text('begin', null, ['class' => 'form-control', 'placeholder' => 'begin']) !!}
					</div>
					<div class="form-group {!! $errors->has('titre') ? 'has-error' : '' !!}">
						{!! Form::text('end', null, ['class' => 'form-control', 'placeholder' => 'end']) !!}
					</div>
					{!! Form::submit('Envoyer !', ['class' => 'btn btn-info pull-right']) !!}
				{!! Form::close() !!}
			</div>
		</div>
		<a href="javascript:history.back()" class="btn btn-primary">
			<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
		</a>
	</div>
@endsection
