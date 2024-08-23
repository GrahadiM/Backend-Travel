@extends('admin.layout')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">History Order</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <div class="card-body">
            @if(session('message'))
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>{{ session('message') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>No Pesanan</th>
                            <th>Nama Pelanggan</th>
                            <th>Nama Paket</th>
                            <th>Total Harga</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->number }}</td>
                            <td>{{ Str::ucfirst($order->user->name) }}</td>
                            <td>{{ $order->package->name }}</td>
                            <td>{{ "Rp.".number_format($order->total_price, 2, ',', '.') }}</td>
                            <td>
                                @if ($order->payment_status == 1)
                                    Belum dibayar
                                @elseif ($order->payment_status == 2)
                                    Sudah dibayar
                                @else
                                    Sudah tidak berlaku
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center">Data Kosong</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Content Row -->

</div>
@endsection
