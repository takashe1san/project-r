@extends('layouts.dashboardlayout')
@section('title', 'orders')

@section('content')
    <div class="d-flex justify-content-between px-3">
        <strong>ORDERS</strong>
        <div class="d-flex">

            @if (request('status') !== null)
                <a href="{{ route('order.index') }}" class="btn btn-secondary px-2 py-1">X</a>
            @endif
            <select class="form-control bg-light" onchange="location = this.value">
                <option value="">filter</option>
                <option value="{{ route('order.index', ['status' => App\Enums\OrderStatusEnum::PENDING->value]) }}">
                    معلق
                </option>
                <option value="{{ route('order.index', ['status' => App\Enums\OrderStatusEnum::PREPARING->value]) }}">
                    يتم تجهيزه
                </option>
                <option value="{{ route('order.index', ['status' => App\Enums\OrderStatusEnum::ONTHEWAY->value]) }}">
                    في الطريق
                </option>
                <option value="{{ route('order.index', ['status' => App\Enums\OrderStatusEnum::COMPLATED->value]) }}">
                    مكتمل
                </option>
                <option value="{{ route('order.index', ['status' => App\Enums\OrderStatusEnum::CANCELED->value]) }}">
                    ملغي
                </option>
                <option value="{{ route('order.index', ['status' => App\Enums\OrderStatusEnum::REJECTED->value]) }}">
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
                    <td class="text-center" title="show owner details" data-toggle="modal" data-target="#ownerModal{{ $order->id }}">
                        {{ $order->owner->name }}</td>
                    <td class="text-center">{{ $order->total }}</td>
                    <td class="text-center" title="show items" data-toggle="modal" data-target="#itemsModal{{ $order->id }}">
                        {{ $order->items->count() }}</td>
                    <td class="bg-{{ $order->status_details['color'] }} text-light text-center"
                        @if ($order->status != App\Enums\OrderStatusEnum::CANCELED->value) data-toggle="modal" data-target="#statusModal{{ $order->id }}" title="change status" @else title="you can't change this status" @endif>
                        {{ $order->status_details['value'] }}</td>
                    <td class="text-center">
                        <a class="btn btn-success" target="_blank" href="{{ route('order.show', ['order' => $order->id]) }}"
                            title="print">
                            <i class='fas fa-print'></i>
                        </a>
                        <button class="btn btn-secondary" title="reject order" data-toggle="modal" data-target="#rejectModal{{ $order->id }}">X</button>
                        <!-- The Modal -->
                        <div class="modal " id="ownerModal{{ $order->id }}">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">OWNER DETAILS</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <div class="d-flex justify-content-center">
                                            <table class="border">
                                                <tr>
                                                    <td class="px-4">
                                                        name
                                                    </td>
                                                    <td class="px-4">
                                                        {{ $order->owner->name }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4">
                                                        phone
                                                    </td>
                                                    <td class="px-4">
                                                        {{ $order->owner->phone }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4">
                                                        status
                                                    </td>
                                                    <td class="px-4">
                                                        {{ $order->owner->status }}
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- The Modal -->
                        <div class="modal " id="itemsModal{{ $order->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">ITEMS DETAILS</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <div class="d-flex justify-content-center">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">name</th>
                                                        <th class="text-center">quantity</th>
                                                        <th class="text-center">price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($order->items as $item)
                                                        <tr>
                                                            <td class="text-center">{{ $item->product->name }}</td>
                                                            <td class="text-center">{{ $item->quantity }}</td>
                                                            <td class="text-center">{{ $item->total_price }}</td>

                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- The Modal -->
                        <div class="modal " id="statusModal{{ $order->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <form action="{{route('order.changeStatus', ['order' => $order->id])}}" method="get">
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">CHANGE STATUS</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <div class="row">
                                                <select name='status' class="form-control bg-light">
                                                    <option value={{ App\Enums\OrderStatusEnum::PENDING->value }}
                                                        @selected($order->status == App\Enums\OrderStatusEnum::PENDING->value)>
                                                        معلق
                                                    </option>
                                                    <option value={{ App\Enums\OrderStatusEnum::PREPARING->value }}
                                                        @selected($order->status == App\Enums\OrderStatusEnum::PREPARING->value)>
                                                        يتم تجهيزه
                                                    </option>
                                                    <option value={{ App\Enums\OrderStatusEnum::ONTHEWAY->value }}
                                                        @selected($order->status == App\Enums\OrderStatusEnum::ONTHEWAY->value)>
                                                        في الطريق
                                                    </option>
                                                    <option value={{ App\Enums\OrderStatusEnum::COMPLATED->value }}
                                                        @selected($order->status == App\Enums\OrderStatusEnum::COMPLATED->value)>
                                                        مكتمل
                                                    </option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button class="btn btn-success" type="submit">change</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- The Modal -->
                        <div class="modal " id="rejectModal{{ $order->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <form action="{{route('order.reject', ['order' => $order->id])}}" method="get">
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">REJECT ORDER</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <div class="row">
                                                <input type="text" name="rejection_notes" class="form-control" placeholder="rejection notes" required>
                                                {{-- <textarea name="rejection_notes" cols="30" rows="10" class="form-control mx-2" placeholder="rejection notes"></textarea> --}}
                                            </div>
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="submit">send</button>
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
@endsection
