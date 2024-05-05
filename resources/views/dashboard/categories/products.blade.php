@extends('layouts.dashboardlayout')

@section('content')
    <div class="d-flex justify-content-between px-3">
        <div>
            <a href="{{ route('category.index') }}" class="btn btn-secondary px-2 py-1">&LeftArrow;</a>
            <strong>PRODUCT</strong>
        </div>
        <div>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#createModal">
                add
            </button>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>image</th>
                <th>name</th>
                <th>description</th>
                <th>price</th>
                <th>discount</th>
                <th>procedures</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($category->products as $product)
                <tr>
                    <td></td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->discount_percent }}</td>
                    <td>
                        <button type="button" class="btn btn-danger" data-toggle="modal"
                            data-target="#deleteModal{{ $product->id }}">
                            delete
                        </button>
                        <!-- The Modal -->
                        <div class="modal" id="deleteModal{{ $product->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">DELETE PRODUCT</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <div class="row px-3">
                                            Are you sure you want to delete the product?
                                        </div>
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <a href="{{ route('product.destroy', ['product' => $product->id]) }}"
                                            class="btn btn-danger mx-1">delete</a>

                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
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
                    <h4 class="modal-title">ADD PRODUCT</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <form method="POST" action="">
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
