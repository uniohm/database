@extends('acctype.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <table border=1>
                        <tr>
                            <td>Type_No</td>
                            <td>Type_Name</td>
                            <td>DateBegin</td>
                            <td>DateEnd</td>
                            <td>Rate</td>
                        </tr>
                        @foreach($acctype as $acct)
                        <tr>
                            <td>{{ $acct->Type_No }}</td>
                            <td>{{ $acct->Type_Name }}</td>
                            <td>{{ $acct->DateBegin }}</td>
                            <td>{{ $acct->DateEnd }}</td>
                            <td>{{ $acct->Rate }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection