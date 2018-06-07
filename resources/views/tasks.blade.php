@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Nouvelle soirée
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New Task Form -->
                    <form action="{{ url('task')}}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Descriptif soirée -->
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-6">
                                    <label for="nomSoiree">Soirée</label>
                                    <input type="text" name="nomSoiree" id="nomSoiree" class="form-control" value="{{ old('task') }}">
                                </div>
                                <div class="col-sm-3"></div>
                            </div>
                            <div class="row">                                
                                <div class="col-sm-4">
                                    <legend for="listeType">Type de la soirée</legend>
				    <select id="listeType" class="menu" name="listeType" size="4">
                                        <option value="Classique" selected>Classique</option>
                                        <option value="Anniversaire" >Anniversaire</option>
                                        <option value="Mariage" >Mariage</option>
                                        <option value="FinExamens" >Fin d'examens</option>
                                        <option value="NouvelAn" >Nouvel an</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <legend for="listeTaille">Taille de la soirée</legend>
                                    <select id="listeTaille" class="menu" name="listeTaille" size="4">
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
                                    <legend for="listeAlcool">Alcoolisation</legend>
                                    <select id="listeAlcool" class="menu" name="listeAlcool" size="4">
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
                        </div>

                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-offset-4 col-sm-6">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fa fa-btn fa-plus"></i>Ajouter une soirée
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Current Tasks -->
            @if (count($tasks) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Soirées créées
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>Soirée</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td class="table-text"><div>{{ $task->name }}</div>
                                        <div>{{ $task->type }}</div>
                                        <div>{{ $task->taille }}</div>
                                        <div>{{ $task->alcoolisation }}</div></td>

                                        <!-- Task Delete Button -->
                                        <td>
                                            <form action="{{ url('task/'.$task->id) }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i>Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
