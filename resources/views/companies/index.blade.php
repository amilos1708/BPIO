<!-- resources/views/child.blade.php -->

@extends('layouts.app')


@section('content')

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Company name</th>
            <th scope="col">Company address</th>
            <th scope="col">Company phone number</th>
            <th class="text-center" scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($companies->items() as $company)
            <tr>
                <td>{{ $company->id }}</td>
                <td>{{ $company->name }}</td>
                <td>{{ $company->address }}</td>
                <td>{{ '+' . $company->company_phone_number }}</td>
                <td class="text-center">
                    <a href="{{ route('companies.show', ['company' => $company->id]) }}" class="btn btn-outline-secondary btn-sm">Details</a>
                    <a href="{{ route('companies.edit', ['company' => $company->id]) }}" class="btn btn-outline-primary btn-sm">Edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection


