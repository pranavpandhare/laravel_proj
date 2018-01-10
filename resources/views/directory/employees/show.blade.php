@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">employee {{ $employee->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/employees') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/employees/' . $employee->id . '/edit') }}" title="Edit employee"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/employees' . '/' . $employee->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-xs" title="Delete employee" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $employee->id }}</td>
                                    </tr>
                                    <tr><th> Name </th><td> {{ $employee->name }} </td></tr><tr><th> Email </th><td> {{ $employee->email }} </td></tr><tr><th> Cname </th><td> {{ $employee->cname }} </td></tr>tr><th> Created Time </th><td> {{ $employee->created_at }} </td></tr>tr><th> Updated Time </th><td> {{ $employee->updated_at }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
