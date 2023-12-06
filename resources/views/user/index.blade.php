@extends('layouts.index')

@section('content')
    <div class="container">
        <h1>Danh sách người dùng</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>User_name</th>
                    <th>Email</th>
                    <th>Information</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->user_name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @if ($user->information)
                                <a href="{{ route('user.information.show', $user->id) }}">Xem thông tin</a>
                            @else
                                <a href="{{ route('user.information.create', $user->id) }}">Thêm thông tin</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection