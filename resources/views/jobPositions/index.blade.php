@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">List of Jobs Position</div>

                    <div class="panel-body">
                        <table class="table table-responsive table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($jobs as $key => $job)
                                <tr>
                                    <td>{{ $job->id }}</td>
                                    <td>{{ $job->name }}</td>
                                    @if($job->inactive)
                                    <td>Inactive</td>
                                    @else
                                    <td>Active</td>
                                    @endif
                                    <td>
                                        <a class="btn btn-default" href="{{url('admin/jobposition/'.$job->id.'/edit')}}"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit</a>&nbsp;
                                        <button class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete</button>
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
