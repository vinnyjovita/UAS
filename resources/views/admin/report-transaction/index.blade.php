@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Laporan Rata-Rata Jumlah Snack Dibeli</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/laporan-transaksi/pdf') }}" class="btn btn-success btn-sm" title="Add New UtilityStock">
                            <i class="fa fa-print" aria-hidden="true"></i> Print PDF
                        </a>

                        <form method="GET" action="{{ url('/admin/utility-stock') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Transaction Number</th><th>Product Name</th><th>Average Qty</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($result as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->ProductName }}</td>
                                        <td>{{ $item->Kategori }}</td>
                                        <td>{{ $item->Qty }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $result->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
