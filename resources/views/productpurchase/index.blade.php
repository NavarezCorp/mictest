@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Manage Product Purchase
                </div>

                <div class="panel-body">
                    <div class="pull-right">{!! $data->links() !!}</div>
                    <table class="table table-striped table-hover table-condensed">
                        <thead>
                            <th>ID</th>
                            <th>IBO ID</th>
                            <th>Purchase Amount</th>
                            <th>Date Added</th>
                            <th></th>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $value)
                                <tr>
                                    <td>{{ $value->id }}</td>
                                    <td>{{ $value->ibo_id }}</td>
                                    <td>{{ $value->purchase_amount }}</td>
                                    <td>{{ $value->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pull-right">{!! $data->links() !!}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
