@extends('layouts.admin')

@section('content')
    <form method="post" action="{{ url('/add') }}">
        @csrf
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi {{ $username }}, welcome back!</h4>
                            <p class="mb-0">Dashboard template</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-one card-body">
                                <div class="stat-icon d-inline-block">
                                    <i class="ti-money text-success border-success"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text">Bridge</div>
                                    <div class="stat-digit">{{ $counter_bridges }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-one card-body">
                                <div class="stat-icon d-inline-block">
                                    <i class="ti-user text-primary border-primary"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text">Admin</div>
                                    <div class="stat-digit">{{ $counter_admin }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-one card-body">
                                <div class="stat-icon d-inline-block">
                                    <i class="ti-layout-grid2 text-pink border-pink"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text">User</div>
                                    <div class="stat-digit">{{ $counter_user }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-xxl-12 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3>Contact</h3>
                            </div>
                            <div class="card-body">
                                <div class="recent-comment m-t-15">
                                    @foreach ($contacts as $contact)
                                        <div class="media">
                                            <div class="media-body">
                                                <h4 class="media-heading text-primary">{{ $contact->name }}-{{ $contact->email }}</h4>
                                                <h5>{{ $contact->subject }}</h5>
                                                <p>{{ $contact->message }}</p>
                                                <p class="comment-date">{{ $contact->time }} ago</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
