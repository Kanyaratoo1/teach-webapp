@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('รายชื่อนักศึกษา') }}
                    <div class="float-right">
                        <a href="/student/add" type="button" class="btn btn-sm btn-success">
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-striped table-boderless">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ชื่อผู้ใช้งาน</th>
                                <th>รหัส</th>
                                <th>ชื่อ-สกุล</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($student as $user)
                            <tr>
                                <td>
                                    {{ $user->id }}
                                </td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->usercode }}</td>
                                <td>{{ $user->first_name . ' ' . $user->last_name}}</td>
                                <td>
                                    <a href="/student/{{ $user->id }}" type="button" class="btn btn-sm btn-danger">
                                        <i class="fas fa-edit"></i>
                                    </a>
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
