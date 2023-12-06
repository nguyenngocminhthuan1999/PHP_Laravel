<!DOCTYPE html>
<html lang="en">

@extends('layouts.index')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $accounts->user_name }}</h5>
            <p class="card-text">Email: {{ $accounts->email }}</p>
            <p class="card-text">Account created: {{ $accounts->created_at->format('F jS, Y') }}</p>
        </div>
    </div>
@endsection

</html>
