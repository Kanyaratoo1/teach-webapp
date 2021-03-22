@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('Dashboard') }}
                    <div class="float-right">
                        <a href="/rooms/add" type="button" class="btn btn-sm btn-primary">
                            เพิ่มรายการใหม่
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-borderless">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>เลขที่ห้อง</th>
                                <th>ห้อง</th>
                                <th>สถานะ</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($class_room as $c)
                            <tr>
                                <td>{{$c->id}}</td>
                                <td>{{$c->room_code}}</td>
                                <td>{{$c->room_title}}</td>
                                <td>{{$c->is_active}}</td>
                                <td>
                                    <a href="/rooms/{{$c->id}}" type="button" class="btn btn-sm btn-danger">
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
