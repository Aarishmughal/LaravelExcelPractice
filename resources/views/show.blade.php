@extends('layouts.app')
@section('title', 'Your Excel Files')
@section('content')
    <div class="card bg-primary-subtle">
        <h1 class="card-header">Show Imported Data</h1>
        <div class="card-body p-3 rounded-5">
            <table class="table table-striped table-hover bg-info">
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password(Hashed)</th>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ strlen($user->password) >= 10 ? substr($user->password, 0, 10) . '...' : hash($user->password)}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{ Route('export')}}" class="btn btn-success">Export Data to Excel File</a>
            <a href="{{ Route('index')}}" class="btn btn-dark"><<</a>
        </div>
        @include('layouts.footer')
    </div>
@endsection
