@extends('layouts.dashboardlayout')

@section('content')
    <div class="d-flex justify-content-between px-3">
        <strong>CATEGORIES</strong>
        <div>
            {{-- <a href="{{ route('category.add') }}" class="btn btn-success">add</a> --}}
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
                add
            </button>
        </div>
    </div>
    <table class="table table-striped">
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

    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">ADD CATEGORY</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <form method="POST" action="{{ route('category.store')}}">
                    @csrf
                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="row">
                            <input type="text" class="form-control" id="name" placeholder="Enter name"
                                name="name">
                            <textarea name="description" class="form-control px-3" id="description" cols="30" rows="10" placeholder="Enter description"></textarea>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Add</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
