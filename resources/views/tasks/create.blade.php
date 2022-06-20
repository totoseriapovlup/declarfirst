
@extends('layouts.app')

@section('content')
    <form action="{{ route('task.store') }}" method="post">
        {{ csrf_field() }}
        <label for="name">Task name:</label>
        <input type="text" name="name" id="name"/>
        <input type="submit" value="Create"/>
    </form>
@endsection