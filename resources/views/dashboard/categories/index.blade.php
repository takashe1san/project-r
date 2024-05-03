@extends('layouts.dashboardlayout')

@section('content')
    <table class="table table-striped">
        <tr>CATEGORIES</tr>
        <thead>
            <tr>
                <th>name</th>
                <th>description</th>
                <th>procedures</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
