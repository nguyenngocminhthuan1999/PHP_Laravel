@extends('layouts.admin')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <!-- row -->
            <div class="row">
                <div class="col-xl-4 col-xxl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Account Information</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form>
                                    <div class="form-row align-items-center">
                                        <div class="col-auto my-1">
                                            <label class="mr-sm-2">General Account Settings For {{ $username_acc }}</label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-xxl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="basic-form">
                                <form method="get"
                                    action="{{ url('admin-portal/account-management/edit-acc-info/information/' . $username_acc) }}">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Full Name *</label>
                                            <input type="text" class="form-control" value="{{ $profile->full_name }}"
                                                name="name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Phone Number *</label>
                                            <input type="text" class="form-control" value="{{ $profile->phone }}"
                                                name="phone">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Country *</label>
                                            <select class="form-control" name="country" id="country">
                                                <option value="{{ $profile->country }}">{{ $country_name }}</option>
                                                @foreach ($country as $count)
                                                    <option value="{{ $count->id }}">{{ $count->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Address *</label>
                                            <input type="text" class="form-control" value="{{ $profile->address }}"
                                                name="address">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Email *</label>
                                            <input type="email" class="form-control" value="{{ $profile->email }}"
                                                name="email">
                                        </div>
                                        <div class="form-group col-md-12" style="text-align:right">
                                            <button type="submit" class="btn btn-primary mb-2">Confirm identity</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Change Password</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form>
                                    <div class="form-row align-items-center">
                                        <div class="col-auto my-1">
                                            <label class="mr-sm-2">Change Password For {{ $username_acc }}</label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-xxl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="basic-form">
                                <form method="get"
                                    action="{{ url('/admin-portal/account-management/edit-acc-info/password/' . $username_acc) }}">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">User Name:</label>
                                        <div class="col-sm-9">
                                            <input type="text" readonly class="form-control-plaintext"
                                                value="{{ $username_acc }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Current password:</label>
                                        <div class="col-sm-6">
                                            <input type="password" class="form-control" name="current_password">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">New password:</label>
                                        <div class="col-sm-6">
                                            <input type="password" class="form-control" name="new_pass">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Re-Enter new password:</label>
                                        <div class="col-sm-6">
                                            <input type="password" class="form-control" name="re_enter_new_password">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12" style="text-align:right">
                                        <button type="submit" class="btn btn-primary mb-2">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
