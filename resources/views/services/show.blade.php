@extends('layouts.app')

@section('content')
    <dl>
{{--        @foreach($services as $service)--}}
            <dt>{{ $services->name }}</dt>
{{--            <dd>{{ $name }}</dd>--}}
{{--        @endforeach--}}
    </dl>
@endsection
