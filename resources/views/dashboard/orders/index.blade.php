@extends('layouts.dashboardlayout')

@section('content')
    <div class="d-flex justify-content-between px-3">
        <strong>ORDERS</strong>
        <div>
            {{-- <a href="{{ route('category.add') }}" class="btn btn-success">add</a> --}}
            {{-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#createModal">
                add
            </button> --}}
            <select class="form-control bg-light" onchange="location = this.value">
                <option value="">filter</option>
                <option value="{{route('order.index', ['status' => App\Enums\OrderStatusEnum::PENDING->value])}}">
                    معلق
                </option>
                <option value="{{route('order.index', ['status' => App\Enums\OrderStatusEnum::PREPARING->value])}}">
                    يتم تجهيزه
                </option>
                <option value="{{route('order.index', ['status' => App\Enums\OrderStatusEnum::ONTHEWAY->value])}}">
                    في الطريق
                </option>
                <option value="{{route('order.index', ['status' => App\Enums\OrderStatusEnum::COMPLATED->value])}}">
                    مكتمل
                </option>
                <option value="{{route('order.index', ['status' => App\Enums\OrderStatusEnum::CANCELED->value])}}">
                    ملغي
                </option>
                <option value="{{route('order.index', ['status' => App\Enums\OrderStatusEnum::REJECTED->value])}}">
                    مرفوض
                </option>
            </select>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="text-center">owner</th>
                <th class="text-center">total</th>
                <th class="text-center">items</th>
                <th class="text-center">status</th>
                <th class="text-center">procedures</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td class="text-center">{{ $order->owner->name }}</td>
                    <td class="text-center">{{ $order->total }}</td>
                    <td class="text-center">{{ $order->items->count() }}</td>
                    <td class="bg-{{$order->status_details['color']}} text-light text-center">{{ $order->status_details['value'] }}</td>
                    <td>
                        {{-- <button type="button" class="btn btn-danger" data-toggle="modal"
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
                        </div> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
