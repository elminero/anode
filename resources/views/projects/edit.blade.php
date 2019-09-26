@extends('layouts.master')

@section('title', 'Edit:' . $project->title)

@section('contents')
    <div class="row">
        <div class="col-sm-4">
            <h3>Project: {{$project->title}}</h3>

            <h3>Description: </h3>
            <p>{{$project->description}}</p>

        </div>

        <div class="col-sm-4">
            <h3>Change This Project</h3>
            <form method="post" action="/projects/{{$project->id}}">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label for="title" >Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{$project->title}}">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control">{{$project->description}}</textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary form-control">Change It</button>
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
