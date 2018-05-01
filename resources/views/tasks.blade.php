@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-3 col-sm-7">
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
                            <label for="task-name" class="col-sm-3 control-label">Task</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="task-name" class="form-control" value="{{ old('task') }}">
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <legend> Type de soirée</legend>
                                    <ul>
                                        <li><input type="radio" id = "choix"/><label for="choix">Choix<label/>
                                        <li><input type="radio" id = "choix2"/><label for="choix2">Choix2<label/>
                                    </ul>
                                </div>
                                <div class="col-sm-3">
                                    <legend>Taille de soirée</legend>
                                    <ul>
                                        <li><input type="radio" id = "choix"/><label for="choix">Choix<label/>
                                        <li><input type="radio" id = "choix2"/><label for="choix2">Choix2<label/>
                                    </ul>
                                </div>
                                <div class="col-sm-3">
                                    <legend>Alcoolisation </legend>
                                    <ul>
                                        <li><input type="radio" id = "choix"/><label for="choix">Choix<label/>
                                        <li><input type="radio" id = "choix2"/><label for="choix2">Choix2<label/>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Add Task
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Current Tasks -->
            @if (count($tasks) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Current Tasks
                    </div>
                    <p>LUL</p>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>Task</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td class="table-text"><div>{{ $task->name }}</div></td>

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
