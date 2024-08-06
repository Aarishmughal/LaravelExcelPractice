@extends('layouts.app')
@section('title', 'Excel Handler')
@section('content')
    <div class="card bg-info-subtle">
        <h1 class="card-header">Welcome to Excel Handler</h1>
        <div class="card-body p-3">
            <a href="{{Route('add')}}" class="btn btn-primary">Go to Upload File Form</a>
            <a href="{{Route('show')}}" class="btn btn-success">Go to Data Table</a>
        </div>
        @include('layouts.footer')
    </div>
@endsection