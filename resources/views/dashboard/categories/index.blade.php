@extends('layouts.dashboardlayout')
@section('title', 'categories')


@section('content')
    <div class="d-flex justify-content-between px-3">
        <strong>CATEGORIES</strong>
        <div>
            {{-- <a href="{{ route('category.add') }}" class="btn btn-success">add</a> --}}
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#createModal">
                add
            </button>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>name</th>
                <th>description</th>
                <th>products</th>
                <th>procedures</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td>{{ $category->products_count }}</td>
                    <td>
                        <button type="button" class="btn btn-danger" data-toggle="modal"
                            data-target="#deleteModal{{ $category->id }}">
                            delete
                        </button>
                        <button type="button" class="btn btn-info" data-toggle="modal"
                            data-target="#editModal{{ $category->id }}">
                            edit
                        </button>
                        <a href="{{ route('category.show', ['category' => $category->id]) }}"
                            class="btn btn-secondary">products</a>
                        <!-- The Modal -->
                        <div class="modal" id="deleteModal{{ $category->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">DELETE CATEGORY</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <div class="row px-3">
                                            Are you sure you want to delete the category?
                                        </div>
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <a href="{{ route('category.destroy', ['category' => $category->id]) }}"
                                            class="btn btn-danger mx-1">delete</a>

                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Cancel</button>
                                    </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- The Modal -->
                        <div class="modal" id="editModal{{ $category->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">EDIT CATEGORY</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <form method="POST" action="{{ route('category.update', ['category' => $category->id]) }}">
                                        @csrf
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <div class="row">
                                                <input type="text" class="form-control" id="name"
                                                    placeholder="Enter name" name="name" value="{{ $category->name }}">
                                                <textarea name="description" class="form-control px-3" id="description" cols="30" rows="10"
                                                    placeholder="Enter description">{{ $category->description }}</textarea>
                                            </div>
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-info mx-1">Edit</button>
                                            <button type="button" class="btn btn-danger"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- The Modal -->
    <div class="modal" id="createModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">ADD CATEGORY</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <form method="POST" action="{{ route('category.store') }}">
                    @csrf
                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="row">
                            <input type="text" class="form-control" id="name" placeholder="Enter name"
                                name="name">
                            <textarea name="description" class="form-control px-3" id="description" cols="30" rows="10"
                                placeholder="Enter description"></textarea>
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
