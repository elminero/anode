@extends('layouts.master')

@section('title', 'Project:' . $project->title)

@section('contents')
    <div class="row">
        <div class="col-sm-4">
            <h3>Project: {{$project->title}}</h3>

            <h3>Description: </h3>
            <p>{{$project->description}}</p>

            <a href="/projects/{{$project->id}}/edit"><button class="btn btn-primary">Edit</button></a>

            <form style="float:right" method="post" action="/projects/{{$project->id}}">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <div style="clear: both"></div>

        </div>

        <div class="col-sm-4">
            <h3>Add a Task</h3>
            <form method="post" action="/projects/{{$project->id}}/Task">
                @csrf
                <div class="form-group">
                    <label for="title" >Title</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary form-control">Add a Task</button>
                </div>

            </form>
        </div>

        <div class="col-sm-4">
            <h3>List of Current Tasks</h3>

                @foreach($project->tasks as $task)

                    <form method="post" action="/projects/{{$project->id}}/Task">
                        @csrf
                        @method('patch')
                        <label for="completed" class="{{$task->completed?'completed':''}}">
                            <input type="checkbox" name="completed" onchange="form.submit()"
                            {{$task->completed?'checked':''}}
                            >
                            {{$task->title}}
                        </label>
                    </form>

                @endforeach
        </div>

    </div>
@endsection
