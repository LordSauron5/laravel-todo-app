@extends('layouts.app')

@section('title', "Edit Task")

@section('styles')
    <style>
        .error-message {
            color: red;
            font-size: 0.8rem
        }
    </style>
@endsection

@section('content')
    <form action="{{ route('tasks.update', ['id' => $task->id]) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ $task->title }}">
            @error('title')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>
        
        <div>
            <label for="description">Description</label>
            <textarea type="description" name="description" id="description" rows="5">{{ $task->description }}</textarea>
            @error('description')
            <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="long_description">Description</label>
            <textarea type="long_description" name="long_description" id="long_description" rows="10">{{ $task->long_description }}</textarea>
            @error('long_description')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <button type="submit">Update Task</button>
        </div>
    </form>
@endsection