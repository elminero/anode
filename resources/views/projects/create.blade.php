@extends('layouts.master')

@section('title', 'Create Project')

@section('contents')
    <div class="row">
        <div class="col-sm-6">
            <h3>Add a New project</h3>

            <form method="post" action="/projects">

                @csrf

                <div class="form-group">
                    <label for="title" class="@error('title') error @enderror">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{old('title')}}">
                </div>

                <div class="form-group">
                    <label for="description" class="@error('description') error @enderror">Description</label>
                    <textarea name="description" id="description" class="form-control">{{old('description')}}</textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add a New Project</button>
                </div>

                @if($errors->count())
                    <ul class="error">
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                @endif




            </form>

        </div>
        <div class="col-sm-6">
            <h3>List of Current Projects</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        </div>
    </div>
@endsection
