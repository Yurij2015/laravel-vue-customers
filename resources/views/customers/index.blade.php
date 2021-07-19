@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>
                Full Name
            </th>
            <th>
                Email
            </th>
            <th>
                Phone
            </th>
            <th>
                Telegram
            </th>
            <th>
                Create Date
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($customers as $customer)
            <tr>
                <td>{{$customer->fullname}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
