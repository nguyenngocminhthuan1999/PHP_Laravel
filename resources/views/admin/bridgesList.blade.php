@extends('layouts.admin')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Bridge List</h4>
                    </div>
                </div>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>Country</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bridges as $item)
                                            <tr>
                                                <td><a href="#">{{ $item->name }}</a></td>
                                                <td><a href="#">{{ $item->category }}</a></td>
                                                <td><a href="#">{{ $item->country }}</a></td>
                                                <td>
                                                    <span>
                                                        <a href="{{ url('/admin-portal/bridges-list/edit/' . $item->id) }}"
                                                            class="mr-4" data-toggle="tooltip" data-placement="top"
                                                            title="Edit"><i class="fa fa-pencil color-muted"></i> </a>
                                                        <a href="{{ url('/admin-portal/bridges-list/delete/' . $item->id) }}"
                                                            data-toggle="tooltip" data-placement="top" title="Delete"><i
                                                                class="fa fa-close color-danger"></i></a>
                                                    </span>
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
        </div>
    </div>
@endsection
