@extends('layouts.dashboardlayout')
@section('title', 'tables')


@section('content')
    <div class="d-flex justify-content-between px-3">
        <strong>TABLES</strong>
        <div>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#createModal">
                add
            </button>
        </div>
    </div>
    <table class="table table-striped text-center">
        <thead>
            <tr>
                <th>QR</th>
                <th>code</th>
                <th>type</th>
                <th>allowed</th>
                {{-- <th>procedures</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($tables as $table)
                <tr>
                    <td>{{$table->QR}}</td>
                    <td>{{$table->code}}</td>
                    <td>{{$table->type->name}}</td>
                    @if($table->allowed)
                    <td class="bg-success text-light"  data-toggle="modal" data-target="#allowModal{{$table->id}}">Y</td>
                    @else
                    <td class="bg-danger text-light"  data-toggle="modal" data-target="#allowModal{{$table->id}}">N</td>
                    @endif
                    <!-- The Modal -->
    <div class="modal" id="allowModal{{$table->id}}">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">TOGGLE TABLE ALLOWED</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <a href="{{route('table.allow', ['table' => $table->id])}}" class="btn btn-info">change</a>
                    </div>

            </div>
        </div>
    </div>
                    {{-- <td></td> --}}
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
                    <h4 class="modal-title">ADD TABLE</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <form method="POST" action="{{ route('table.store') }}">
                    @csrf
                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="row">
                            <input type="text" class="form-control" id="code" placeholder="Enter code"
                                name="code">
                            <select name="type" id="" class="form-control">
                                <option value="{{App\Enums\TableTypeEnum::REGULAR->value}}">Regular</option>
                                <option value="{{App\Enums\TableTypeEnum::FAMILY->value}}">Family</option>
                                <option value="{{App\Enums\TableTypeEnum::VIP->value}}">VIP</option>
                            </select>
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
