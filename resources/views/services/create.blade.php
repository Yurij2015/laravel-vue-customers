@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('services.store') }}" method="POST">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="name">Service Name</label>
                <div class="col-sm-10">
                    <input name="name" id="name" type="text" class="form-control" placeholder="Service Name">
                    <small class="form-text text-muted">Add service name</small>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="description">Service Description</label>
                <div class="col-sm-10">
                    <input name="description" id="description" type="text" class="form-control"
                           placeholder="Service Description">
                    <small class="form-text text-muted">Add service description</small>
                </div>
            </div>
            @csrf
            <div class="form-group row">
                <div class="col-sm-3">
                    <input type="submit" class="btn btn-primary" value="Add Service">
                </div>
                <div class="col-sm-9">
                    <a href="{{ route('services.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
        </form>
    </div>
@endsection
