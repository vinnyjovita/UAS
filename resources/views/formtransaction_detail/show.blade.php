@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">formtransaction_detail {{ $formtransaction_detail->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/formtransaction_detail') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/formtransaction_detail/' . $formtransaction_detail->id . '/edit') }}" title="Edit formtransaction_detail"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/formtransaction_detail' . '/' . $formtransaction_detail->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete formtransaction_detail" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $formtransaction_detail->id }}</td>
                                    </tr>
                                    <tr><th> Productid </th><td> {{ $formtransaction_detail->Productid }} </td></tr><tr><th> Transactionnumber </th><td> {{ $formtransaction_detail->Transactionnumber }} </td></tr><tr><th> Qty </th><td> {{ $formtransaction_detail->Qty }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
