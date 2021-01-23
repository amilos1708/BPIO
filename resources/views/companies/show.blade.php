@extends('layouts.app')

@section('content')
    <div class="mt-5">
        <h1>{{ $company->name }}</h1>
        <form method="POST" href="{{ route('companies.destroy', ['company' => $company->id]) }}">
            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
@endsection
