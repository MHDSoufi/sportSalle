@extends('adminlte::page')
<!-- LE TABLEAU DES UTILISATEURS-->
@section('content')

<div class="card user" >
    <div class="card-header">
        <h2 class="card-title">Utilisateur : {{ $user->nom . ' ' . $user->prenom }}</h2>
    </div>
            <!-- /.card-header -->
    <div class="card-body">
    	<div class="row">
    		<div class="col">
    			Abonné au forfait: {{ $user->forfait->intitulet }}<br>
    			Nombre de séance autorisées : {{ $user->forfait->nbr_seance }}
    		</div>
    		<div class="col">
    			Adresse e-mail : {{ $user->email }}
    			<br>
    			Numero de téléphone : 0775213698
    		</div>
    	</div>
    	<div class="row">
    		cours inscrit de la semaine 
    	</div>
    </div>
    <div class="card-footer">
    	<a href="" class="btn btn-info">Modifier <i class="fas fa-edit"></i></a>
        <button type="submit" class="btn btn-danger" style="border-top-left-radius: 0;
                border-bottom-left-radius: 0;"
                data-toggle="modal" data-target="#modal-default"
        >Suprimer <i class="fas fa-trash" style="color: black;"></i></button>
    </div>
</div>

@stop
@section('css')
<style type="text/css">
	.user h2{font-size: 28px;}
	.user{
		font-size: 24px;
	}
</style>
@stop
