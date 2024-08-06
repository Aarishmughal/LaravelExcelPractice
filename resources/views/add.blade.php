@extends('layouts.app')
@section('title', 'Upload File')
@section('content')
    <div class="card bg-primary-subtle">
        <h1 class="card-header">Upload an Excel File</h1>
        <div class="card-body p-3">
            <form action="{{ Route('store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="file" class="form-text">Select your file</label>
                <input type="file" name="file" id="file"
                    class="form-control bg-info @error('file') is-invalid @enderror">
                @if ($errors->has('file'))
                    <span class="text-danger">
                        {{ $errors->first('file') }}
                    </span><br>
                @endif
                <button class="btn btn-primary mt-3" type="submit">Submit</button>
                <a class="btn btn-dark mt-3" href="{{ Route('index') }}">
                    <<</a>
            </form>
        </div>
        @include('layouts.footer')
    </div>
@endsection
