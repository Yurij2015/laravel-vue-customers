@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('services.update', ['service' => $service]) }}" method="POST">
            @method('PUT')
            @include('services.fields')
            <div class="form-group row">
                <div class="col-sm-3">
                    <input type="submit" class="btn btn-primary" value="Edit Service">
                </div>
                <div class="col-sm-9">
                    <a href="{{ route('services.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
        </form>
    </div>
@endsection
