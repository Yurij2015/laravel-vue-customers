@extends('layouts.app')

@section('content')
    <div class="container">
        <a class="btn btn-primary mb-3" href="{{ route('services.create') }}" role="button">Add service</a>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Service Name</th>
                <th>Service Description</th>
                <th class="Actions">Actions</th>
            </tr>
            </thead>
            <tbody>
            @forelse($services as $service)
                <tr>
                    <td>{{$service->name}}</td>
                    <td>{{$service->description}}</td>
                    <td class="actions">
                        <a
                            href="{{ action('App\Http\Controllers\ServiceController@show', ['service' => $service->id]) }}"
                            alt="View"
                            title="View">
                            View
                        </a>
                        <a
                            href="{{ action('App\Http\Controllers\ServiceController@edit', ['service' => $service->id]) }}"
                            alt="Edit"
                            title="Edit">
                            Edit
                        </a>
                        <form action="{{ action('App\Http\Controllers\ServiceController@destroy', ['service' =>
                        $service->id]) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-link" title="Delete" value="DELETE">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
            @endforelse
            </tbody>
        </table>
        {{ $services->links() }}
    </div>
@endsection

