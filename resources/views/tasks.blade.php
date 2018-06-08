@extends('layouts.app')

@section('content')
        <div class="col-sm-offset-2 col-sm-8 formulaire">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Nouvelle soirée
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New Task Form -->
                    <form action=# method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Descriptif soirée -->
                            <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-6">
                                    <label for="nomSoiree">Soirée</label>
                                    <input type="text" name="nomSoiree" id="nomSoiree" class="form-control titre" value="{{ old('task') }}">
                                </div>
                                <div class="col-sm-3"></div>
                            </div>
                            <div class="row">                                
                                <div class="col-sm-4">
                                    <legend class="listeLegende" for="listeType">Type de la soirée</legend>
				    <select id="listeType" class="menu" name="listeType" size="1">
                                        <option value="Classique" selected>Classique</option>
                                        <option value="Anniversaire" >Anniversaire</option>
                                        <option value="Mariage" >Mariage</option>
                                        <option value="FinExamens" >Fin d'examens</option>
                                        <option value="NouvelAn" >Nouvel an</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <legend class="listeLegende" for="listeTaille">Taille de la soirée</legend>
                                    <select id="listeTaille" class="menu" name="listeTaille" size="1">
                                        <option value="Minimale" selected>Minimale</option>
                                        <option value="Faible" >Faible</option>
                                        <option value="Petite" >Petite</option>
                                        <option value="Moyenne" >Moyenne</option>
                                        <option value="Grande" >Grande</option>
                                        <option value="Enorme" >Enorme</option>
                                        <option value="Immense" >Immense</option>
                                        <option value="Gala" >Gala</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <legend class="listeLegende" for="listeAlcool">Alcoolisation</legend>
                                    <select id="listeAlcool" class="menu" name="listeAlcool" size="1">
                                        <option value="Aucune" >Aucune</option>
                                        <option value="Minimale" selected>Minimale</option>
                                        <option value="Faible" >Faible</option>
                                        <option value="Petite" >Petite</option>
                                        <option value="Moyenne" >Moyenne</option>
                                        <option value="Grande" >Grande</option>
                                        <option value="Enorme" >Enorme</option>
                                    </select>
                                </div>
                        </div>
			<div class="row">
				<div class="col-sm-12">
					<textarea id="description" name="description rows="5" cols="150">Description de la soirée</textarea>
				</div>
			</div>

                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-offset-4 col-sm-6">
                                    <button type="button" class="btn btn-default creation bouton">
                                        <i class="fa fa-btn fa-plus"></i>Ajouter une soirée
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
