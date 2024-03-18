@extends('admins.master')
@section('title', 'Finished Order Page')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h2>Finished Order Page</h2>
                        <hr>
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Order No</th>
                                    <th>Patient Name</th>
                                    <th>Provider Name</th>
                                    <th>Date</th>
                                    <th>Total Price</th>
                                    <th>Type</th>
                                    <th>Created</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $order->order_num }}</td>
                                        <td>{{ $order->user->name }} </td>
                                        <td>{{ $order->provider->name }}</td>
                                        <td>{{ $order->date }}</td>
                                        <td>{{ $order->total_price }}EG</td>
                                        <td>
                                            @if ($order->type == 'normal')
                                                <a href="{{ route('service.inactive', $order->id) }}"> <button
                                                        class="btn btn-success">Normal</button></a>
                                            @else
                                                <a href="{{ route('service.active', $order->id) }}"> <button
                                                        class="btn btn-danger">AbNormal</button></a>
                                            @endif
                                        </td>
                                        <td>{{ $order->created_at->translatedFormat('l, F jS, Y \a\t g:i A') }}</td>

                                        <td>
                                            <a href="{{ route('finished_order.show', $order->id) }}"> <button type="button" class="btn btn-primary">
                                                    <i class="bi bi-eye"></i>
                                                    Show
                                                </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
