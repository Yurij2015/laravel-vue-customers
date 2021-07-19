@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th> Full Name</th>
                <th> Email</th>
                <th> Phone</th>
                <th> Telegram</th>
            </tr>
            </thead>
            <tbody>
            @foreach($customers as $customer)
                <tr>
                    <td>{{$customer->fullname}}</td>
                    <td>{{$customer->email}}</td>
                    <td>{{$customer->phone}}</td>
                    <td>{{$customer->telegram}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
