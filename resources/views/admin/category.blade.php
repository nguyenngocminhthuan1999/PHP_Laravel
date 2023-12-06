@extends('layouts.admin')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Category List</h4>
                    </div>
                </div>
            </div>
            <form method="post" action="{{ url('admin-portal/category/add') }}">
                @csrf
                <div class="col-xl-12 col-xxl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Category</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <div class="form-row">
                                    <div class="card form-group col-md-12">
                                        <div class="table-responsive">
                                            <table id="example_2" class="display" style="min-width: 845px">
                                                <thead>
                                                    <tr>
                                                        <th>Category</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($category as $item)
                                                        <tr>
                                                            <td>
                                                                <a hidden>{{ $item->name }}</a>
                                                                {{ $item->name }}
                                                            </td>
                                                            <td>
                                                                <a style="padding-left: 20px"
                                                                    href="{{ url('admin-portal/category/delete/' . $item->id) }}"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="Edit"><i
                                                                        class="fa fa-close color-danger"></i></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h5>Add Category</h5>
                                        <input type="text" class="form-control" value="" name="category_input">
                                    </div>
                                    <div class="form-group col-md-6">
                                    </div>
                                    <div class="form-group col-md-6" style="text-align:right">
                                        <button type="submit" class="btn btn-primary mb-2">Add</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
