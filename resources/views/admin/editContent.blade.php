@extends('layouts.admin')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <form method="post" action="{{ url('admin-portal/bridges-list/edit/save/' . $bridges->id) }}"
                enctype="multipart/form-data">
                @csrf
                <div class="col-xl-12 col-xxl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="basic-form">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <h5>Name</h5>
                                        <input type="text" class="form-control" value="{{ $bridges->name }}"
                                            name="name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h5>Country</h5>
                                        <select id="inputState" class="form-control" name="country">
                                            <option value="{{ $bridges->country_id }}">{{ $country_name }}</option>
                                            @foreach ($country as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h5>Height</h5>
                                        <input type="text" class="form-control" value="{{ $bridges->tall }}"
                                            name="height">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h5>Length</label>
                                            <input type="text" class="form-control" value="{{ $bridges->long }}"
                                                name="length">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h5>Date</h5>
                                        <input name="datepicker" class="datepicker-default form-control" id="datepicker"
                                            value="{{ $bridges->opened }}" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h5>Category</h5>
                                        <select id="inputState" class="form-control" name="category">
                                            <option value="{{ $bridges->category_id }}">{{ $category_name }}</option>
                                            @foreach ($category as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="card form-group col-md-12">
                                        <h4 class="card-title">Description</h4>
                                        <div class="form-group">
                                            <textarea class="form-control summernote" id="comment" name="description">{{ $bridges->description }}</textarea>
                                        </div>
                                    </div>
                                    <div class="card form-group col-md-12">
                                        <h4 class="card-title">Geo Location</h4>
                                        <div class="form-group">
                                            <textarea class="form-control" rows="4" id="comment" name="geolocation">{{ $bridges->geolocation }}</textarea>
                                        </div>
                                    </div>
                                    <div class="card form-group col-md-12">
                                        <h4 class="card-title">Picture</h4>
                                        <div class="table-responsive">
                                            <table id="example" class="display" style="min-width: 845px">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Image</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($images_list as $item)
                                                        <tr>
                                                            <td>
                                                                <a hidden>{{ $item->name }}</a>
                                                                {{ $item->name }}
                                                            </td>
                                                            <td><img src="{{ asset('imageBridge/' . $item->name) }}"
                                                                    alt="" width="200px" height="200px">
                                                            </td>
                                                            <td>
                                                                <a style="padding-left: 50px"
                                                                    href="{{ url('admin-portal/bridges-list/edit/delete-img/' . $item->id) }}"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="Delete"><i
                                                                        class="fa fa-close color-danger"></i></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <h4>Upload Image</h4>
                                        <div class="input-image">
                                            <input type="file" name="image" accept="image/*">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <h4>Upload Historic</h4>
                                        <h5>{{ $bridges->file }}</h5>
                                        <div class="input-image">
                                            <input type="file" name="file" accept=".doc, .docx, .pdf, *">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-xxl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="basic-form">
                                <div class="form-row">
                                    <div class="card form-group col-md-12">
                                        <h4 class="card-title">Bus</h4>
                                        <div class="table-responsive">
                                            <table id="example_2" class="display" style="min-width: 845px">
                                                <thead>
                                                    <tr>
                                                        <th>Bus Code</th>
                                                        <th>Carriage Way</th>
                                                        <th>Distance (Km)</th>
                                                        <th>Operating Time (Time)</th>
                                                        <th>Ride Time (Min)</th>
                                                        <th>Bus Line Frequency (Min)</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($bus as $item)
                                                        <tr>
                                                            <td>
                                                                <a hidden>{{ $item->bus_code }}</a>
                                                                {{ $item->bus_code }}
                                                            </td>
                                                            <td>
                                                                <a hidden>{{ $item->carriage_way }}</a>
                                                                {{ $item->carriage_way }}
                                                            </td>
                                                            <td>
                                                                <a hidden>{{ $item->distance }}</a>
                                                                {{ $item->distance }}
                                                            </td>
                                                            <td>
                                                                <a hidden>{{ $item->operating_time }}</a>
                                                                {{ $item->operating_time }}
                                                            </td>
                                                            <td>
                                                                <a hidden>{{ $item->ride_time }}</a>
                                                                {{ $item->ride_time }}
                                                            </td>
                                                            <td>
                                                                <a hidden>{{ $item->bus_line_frequency }}</a>
                                                                {{ $item->bus_line_frequency }}
                                                            </td>
                                                            <td>
                                                                <a style="padding-left: 20px"
                                                                    href="{{ url('admin-portal/bridges-list/edit/delete-bus/' . $item->id) }}"
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
                                        <h5>Bus Code</h5>
                                        <input type="text" class="form-control" value="" name="bus_code_input">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h5>Carriage Way</h5>
                                        <input type="text" class="form-control" value=""
                                            name="carriage_way_input">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h5>Distance (Km)</h5>
                                        <input type="text" class="form-control" value="" name="distance_input">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h5>Operating time (Time)</h5>
                                        <input type="text" class="form-control" value=""
                                            name="operating_time_input">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h5>Ride Time (Min)</h5>
                                        <input type="text" class="form-control" value=""
                                            name="ride_time_input">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h5>Bus Line Frequency (Min)</h5>
                                        <input type="text" class="form-control" value=""
                                            name="bus_line_frequency_input">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-xxl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="basic-form">
                                <div class="form-row">
                                    <div class="card form-group col-md-12">
                                        <h4 class="card-title">Plane</h4>
                                        <div class="table-responsive">
                                            <table id="example_3" class="display" style="min-width: 845px">
                                                <thead>
                                                    <tr>
                                                        <th>From</th>
                                                        <th>To</th>
                                                        <th>Airline Company</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($plane as $item)
                                                        <tr>
                                                            <td>
                                                                <a hidden>{{ $item->from }}</a>
                                                                {{ $item->from }}
                                                            </td>
                                                            <td>
                                                                <a hidden>{{ $item->to }}</a>
                                                                {{ $item->to }}
                                                            </td>
                                                            <td>
                                                                <a hidden>{{ $item->airline_company }}</a>
                                                                {{ $item->airline_company }}
                                                            </td>
                                                            <td>
                                                                <a style="padding-left: 50px"
                                                                    href="{{ url('admin-portal/bridges-list/edit/delete-plane/' . $item->id) }}"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="Delete"><i
                                                                        class="fa fa-close color-danger"></i></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h5>From</h5>
                                        <input type="text" class="form-control" value="" name="from_input">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h5>To</h5>
                                        <input type="text" class="form-control" value="" name="to_input">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h5>Arline Company</h5>
                                        <input type="text" class="form-control" value=""
                                            name="airline_company_input">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-xxl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="basic-form">
                                <div class="form-row">
                                    <div class="card form-group col-md-12">
                                        <h4 class="card-title">Comment</h4>
                                        <div class="table-responsive">
                                            <table id="example_4" class="display" style="min-width: 845px">
                                                <thead>
                                                    <tr>
                                                        <th>Name User</th>
                                                        <th>Comment</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($comment as $item)
                                                        <tr>
                                                            <td>
                                                                <a hidden>{{ $item->user_name }}</a>
                                                                {{ $item->user_name }}
                                                            </td>
                                                            <td>
                                                                <a hidden>{{ $item->cmt }}</a>
                                                                {{ $item->cmt }}
                                                            </td>
                                                            <td>
                                                                <a style="padding-left: 50px"
                                                                    href="{{ url('admin-portal/bridges-list/edit/delete-comment/' . $item->time) }}"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="Delete"><i
                                                                        class="fa fa-close color-danger"></i></a>
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
                <div class="form-group col-md-12" style="text-align:right">
                    <button type="submit" class="btn btn-primary mb-2">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
@endsection
