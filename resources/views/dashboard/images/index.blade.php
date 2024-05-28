@extends('layouts.dashboardlayout')
@section('title', 'images')


@section('content')
    <div class="d-flex justify-content-between px-3">
        <strong>IMAGES GALLARY</strong>
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
                <th>#</th>
                <th>image</th>
                <th>procedures</th>
            </tr>
        </thead>
        <tbody>
            @php $count = 0; @endphp
            @foreach ($images as $image)
                <tr>
                    <td>{{ ++$count }}</td>
                    <td><img src="{{asset($image->image)}}" width="150" alt="image {{$count}}" data-toggle="modal"
                        data-target="#imageModal{{ $image->id }}"></td>
                    <td>
                        <button type="button" class="btn btn-danger" data-toggle="modal"
                            data-target="#deleteModal{{ $image->id }}">
                            delete
                        </button>
                        <!-- The Modal -->
                        <div class="modal" id="deleteModal{{ $image->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">DELETE IMAGE</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <div class="row px-3">
                                            Are you sure you want to delete the image?
                                        </div>
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <a href="{{route('image.destroy', ['image' => $image->id])}}"
                                            class="btn btn-danger mx-1">delete</a>

                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Cancel</button>
                                    </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- The Modal -->
                        <div class="modal" id="imageModal{{ $image->id }}">
                            <div class="modal-dialog">
                                {{-- <div class="modal-content"> --}}
                                    <img src="{{asset($image->image)}}" width="400" alt="image {{$count}}">
                                {{-- </div> --}}
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

                <form method="POST" action="{{route('image.store')}}" enctype="multipart/form-data">
                    @csrf
                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="row">
                            <input type="file" name="image" class="form-control">
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
