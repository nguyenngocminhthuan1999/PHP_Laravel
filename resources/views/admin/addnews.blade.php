@extends('layouts.admin')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Create Bridge</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-xxl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="basic-form">
                                <form method="post" action="{{ url('admin-portal/add-news/create') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <h5>Name *</h5>
                                            <input type="text" class="form-control" value="" name="name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <h5>Country</h5>
                                            <select id="inputState" class="form-control" name="country">
                                                @foreach ($country as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <h5>Height</h5>
                                            <input type="text" class="form-control" value="" placeholder="m"
                                                name="height">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <h5>Length</label>
                                                <input type="text" class="form-control" value="" placeholder="m"
                                                    name="length">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <h5>Date</h5>
                                            <input name="datepicker" class="datepicker-default form-control" id="datepicker"
                                                value="" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <h5>Category</h5>
                                            <select id="inputState" class="form-control" name="category">
                                                <option value=" "></option>
                                                @foreach ($category as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="card form-group col-md-12">
                                            <h4 class="card-title">Description</h4>
                                            <div class="form-group">
                                                <textarea class="form-control summernote" id="comment" name="description"></textarea>
                                            </div>
                                        </div>
                                        <div class="card form-group col-md-12">
                                            <h4 class="card-title">Geo Location</h4>
                                            <div class="form-group">
                                                <textarea class="form-control" rows="4" id="comment" name="geolocation"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <h4 class="card-title">Upload Image</h4>
                                            <div class="input-image">
                                                <input type="file" name="image" accept="image/*">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <h4 class="card-title">Upload Historic</h4>
                                            <div class="input-image">
                                                <input type="file" name="file" accept=".doc, .docx, .pdf, *">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <h4>Bus</h4>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <h5>Bus Code</h5>
                                            <input type="text" value="" name="bus_id_input" hidden>
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
                                            <h5>Operating time (Min)</h5>
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
                                        <div class="form-group col-md-12">
                                            <h4>Plane</h4>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <h5>From</h5>
                                            <input type="text" class="form-control" value=""
                                                name="plane_id_input" hidden>
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
                                        <div class="form-group col-md-12" style="text-align:right">
                                            <button type="submit" class="btn btn-primary mb-2">Create Bridges</button>
                                        </div>
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
