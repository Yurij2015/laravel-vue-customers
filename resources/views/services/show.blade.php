@extends('layouts.app')

@section('content')
    <div class="container">
        <dl>
            <dt>{{ $service->name }}</dt>
            <dt>{{ $service->description }}</dt>
        </dl>
    </div>
@endsection
