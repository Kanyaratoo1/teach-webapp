@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form action="{{url('/rooms/'.$rooms->id)}}" method="post">
                @csrf
                <div class="card">
                    <div class="card-header">
                        {{ __('แก้ไขข้อมูลห้องเรียน') }}
                        <div class="float-right">
                            <button type="submit" class="btn btn-sm btn-primary">
                                บันทึกข้อมูล
                            </button>
                            <a type="submit" href="{{url('/rooms/'.$rooms->id)}}" class="btn btn-sm btn-danger">
                                ลบ
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col"><label for="room_title">หัวข้อห้อง:</label>
                                    <input id="room_title" name="room_title" type="text" class="form-control" value="{{$rooms->room_title}}">
                                </div>
                                <div class="col"><label for="room_code">รหัส:</label>
                                    <input id="room_code" name="room_code" type="text" class="form-control" value="{{$rooms->room_code}}">
                                </div>
                                <div class="col-md-12">
                                    <label for="room_limits">จำนวน/ห้อง:</label>
                                    <input id="room_limits" name="room_limits" type="number" class="form-control" value="{{$rooms->room_limits}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
