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
                                <label for="task-name" class="col-sm-3 control-label">Soirée</label>

                                <div class="col-sm-6">
                                    <input type="text" name="name" id="task-name" class="form-control" value="{{ old('task') }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-3">
                                    <legend>Type de soirée</legend>
                                    <ul>
                                        <li><input type="radio" name="type" id = "choixtype" value="choixtype1"/>Choix<br/>
                                        <li><input type="radio" name="type" id = "choixtype2" value="choixtype2"/>Choix2<br/>
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <legend>Taille de soirée</legend>
                                    <ul>
                                        <li><input type="radio" name="taille" id = "choixtaille" value="choixtaille1"/>Choix<br/>
                                        <li><input type="radio" name="taille" id = "choixtaille2" value="choixtaille2"/>Choix2<br/>
                                    </ul>
                                </div>
                                <div class="col-sm-3">
                                    <legend>Alcoolisation</legend>
                                    <ul>
                                        <li><input type="radio" name="alcoolisation" id = "choixalcool" value="choixalcool1"/>Choix<br/>
                                        <li><input type="radio" name="alcoolisation" id = "choixalcool2" value="choixalcool2"/>Choix2<br/>
                                    </ul>
                                </div>
                                <div class="col-sm-1"></div>
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
                                        <td class="table-text"><div>{{ $task->name,type,taille,alcoolisation }}</div></td>

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
