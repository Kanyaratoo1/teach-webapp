@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form action="{{url('/rooms/add')}}" method="post">
                @csrf
                <div class="card">
                    <div class="card-header">
                        {{ __('เพิ่มรายการห้องเรียน') }}
                        <div class="float-right">
                            <button type="submit" class="btn btn-sm btn-primary">
                                บันทึกข้อมูล
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col"><label for="room_title">หัวข้อห้อง:</label>
                                    <input id="room_title" name="room_title" type="text" class="form-control">
                                </div>
                                <div class="col"><label for="room_code">รหัส:</label>
                                    <input id="room_code" name="room_code" type="text" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for="room_limits">จำนวน/ห้อง:</label>
                                    <input id="room_limits" name="room_limits" type="number" class="form-control" value="20">
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
