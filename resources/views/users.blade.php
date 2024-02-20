@extends('layouts.app')

@section('content')
    <h1>Users</h1>
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    <p>Hello {{ Auth::user()->name }}</p>
    <p>Your favourite class is {{ session()->get('favorite_class') }}! 🎉</p>
    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Date Joined</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
