@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Cars</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Model Name</th>
                <th>Date Created</th>
                <th>Manufacture</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cars as $car)
                <tr>
                    <td>{{ $car->id }}</td>
                    <td>{{ $car->name }}</td>
                    <td>{{ $car->date_created->format('d M Y h:i A') }}</td>
                    <td>{{ $car->manufacture->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
