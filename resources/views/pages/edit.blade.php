@section('title')
    Create Todos
@endsection

@extends('layouts.app')
@section('content')
<h2 class="text-center mt-4">Update New Todo</h2>
    <a href="/showTodo/{{$todo->id}}" class="btn btn-defult buttonGo">Go Back</a>
    <form method="POST" action="{{route('Todo.update',$todo->id)}}">

    
        @csrf
                
        {{--                text     --}}
        <div class="form-group">

        <label class="la">text</label>
        <input type="text" class="form-control" name="text" value="{{$todo->text}}"/>

        @error('text')                   {{--  error message   --}}
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    
        </div>
        <div class="form-group">
            <label class="la">body</label>
            <textarea type="text" class="form-control" name="body" >{{$todo->body}}</textarea>

            @error('body')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="form-group">

        <label class="la">due</label>
            <input type="text" class="form-control" name="due" value="{{$todo->due}}"/>
            @error('due')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

       
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

   
@endsection














