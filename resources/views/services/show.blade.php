@extends('layouts.app')

@section('content')
    <div class="container">
        <dl class="row">
            <dt class="col-sm-3">Service Name</dt>
            <dd class="col-sm-9">{{ $service->name }}</dd>

            <dt class="col-sm-3">Service Description</dt>
            <dd class="col-sm-9">{{ $service->description }}</dd>
        </dl>
    </div>
@endsection
