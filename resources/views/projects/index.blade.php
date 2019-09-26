@extends('layouts.master')

@section('title', 'Project List')

@section('contents')
    <div class="row">
        <div class="col-sm-6">
            <h3>Project List</h3>

            <ul>
                @foreach($projects as $project)
                    <li><a href="/projects/{{$project->id}}">{{$project->title}}</a></li>
                @endforeach
            </ul>

        </div>
        <div class="col-sm-6">
            <h3>List of Current Projects</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        </div>
    </div>
@endsection

