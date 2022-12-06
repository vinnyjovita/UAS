@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">formKategori {{ $formkategori->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/form-kategori') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/form-kategori/' . $formkategori->id . '/edit') }}" title="Edit formKategori"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/formkategori' . '/' . $formkategori->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete formKategori" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $formkategori->id }}</td>
                                    </tr>
                                    <tr><th> Userid </th><td> {{ $formkategori->Userid }} </td></tr><tr><th> Kategori </th><td> {{ $formkategori->Kategori }} </td></tr><tr><th> Isi </th><td> {{ $formkategori->Isi }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
