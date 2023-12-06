@extends('layouts.admin')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Account Management</h4>
                        <p class="mb-0">Page for account management</p>
                    </div>
                </div>
            </div>
            <!-- row admin table -->
            <div class="row" style="display: {{ $displayAdmin }}">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Admin Table</h4>
                        </div>
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table
                                            class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                            <thead>
                                                <tr>
                                                    <th scope="col">User Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Level</th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- <form method="post" action="{{ url('/admin-portal/edit-profile') }}">
                                                    @csrf --}}
                                                @foreach ($admin as $acc)
                                                    <tr>
                                                        <td>{{ $acc->user_name }}</td>
                                                        <td>{{ $acc->email }}</td>
                                                        <td>{{ $acc->level }}</td>
                                                        <td>
                                                            {{-- <button data-toggle="tooltip"
                                                                    data-placement="top" title="Edit"
                                                                    style="border: none">
                                                                    <i class="fa fa-pencil color-muted"></i>
                                                                </button> --}}
                                                            <a
                                                                href="{{ url('/admin-portal/account-management/edit-acc-info/' . $acc->user_name) }}"><i
                                                                    class="fa fa-pencil color-muted"></i></a>
                                                            {{-- <button type="submit" name="action" value="delete"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="Delete" style="border: none">
                                                                    <i class="fa fa-close color-danger"></i>
                                                                </button> --}}
                                                            <a
                                                                href="{{ url('/admin-portal/account-management/delete-acc/' . $acc->user_name) }}"><i
                                                                    class="fa fa-close color-danger"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                {{-- </form> --}}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row user table -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">User Table</h4>
                        </div>
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table
                                            class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                            <thead>
                                                <tr>
                                                    <th scope="col">User Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Level</th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- <form method="post" action="{{ url('admin-portal/account-management/edit-acc-info/information/'.$acc->user_name) }}">
                                                    @csrf --}}
                                                @foreach ($user as $acc)
                                                    <tr>
                                                        <td>{{ $acc->user_name }}</td>
                                                        <td>{{ $acc->email }}</td>
                                                        <td>{{ $acc->level }}</td>
                                                        <td>
                                                            {{-- <button data-toggle="tooltip"
                                                                    data-placement="top" title="Edit"
                                                                    style="border: none">
                                                                    <i class="fa fa-pencil color-muted"></i>
                                                                </button> --}}
                                                            <a
                                                                href="{{ url('/admin-portal/account-management/edit-acc-info/' . $acc->user_name) }}"><i
                                                                    class="fa fa-pencil color-muted"></i></a>
                                                            {{-- <button type="submit" name="action" value="delete"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="Delete" style="border: none">
                                                                    <i class="fa fa-close color-danger"></i>
                                                                </button> --}}
                                                            <a
                                                                href="{{ url('/admin-portal/account-management/delete-acc/' . $acc->user_name) }}"><i
                                                                    class="fa fa-close color-danger"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                {{-- </form> --}}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
