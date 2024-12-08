@extends('layouts.app')

@section('content')

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @else
        {{Form::open(['route' => 'send.email', 'method' => 'POST'])}}
        {{ Form::token() }}
        <div>
            {{ Form::text('name', old('name'), ['required', 'placeholder' => __('sidebar.name')]) }}
        </div>
        
        <div>
            {{ Form::email('email', old('email'), ['required', 'placeholder' => __('sidebar.email')]) }}
        </div>
        
        <div>
            {{ Form::textarea('message', old('message'), ['required', 'placeholder' => __('sidebar.message')]) }}
        </div>
        
        <div>
            {{ Form::submit(__('sidebar.send')) }}
        </div>
    @endif


@endsection