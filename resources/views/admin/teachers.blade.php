@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('รายชื่ออาจาร์ย') }}
                    <div class="float-right">
                        <a href="/teachers/add" type="button" class="btn btn-sm btn-primary">
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
                    {{ $teacher}}
                    <table class="table table-striped table-borderless">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>รหัส</th>
                                <th>ชื่อ-สกุล</th>
                                <th>ตำแหน่ง</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($teacher as $t)
                            <th>
                                <td>{{$t->id}}</td>
                                <td>{{$t->user_id}}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </th>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
