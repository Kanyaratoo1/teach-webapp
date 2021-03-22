@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{url('/subjects/add')}}" method="post">
                @csrf
                <div class="card">
                    <div class="card-header">
                        {{ __('เพิ่มรายวิชาใหม่') }}
                        <div class="float-right">
                            <button type="submit" class="btn btn-sm btn-primary">
                                {{ __('บันทึกข้อมูล') }}
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="from-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="subject_id">รหัสวิชา:</label>
                                    <input class="form-control" type="text" id="subject_id" name="subject_id" required autofocus>
                                </div>
                                <div class="col-md-6">
                                    <label for="subject_title">รายวิชา:</label>
                                    <input class="form-control" type="text" id="subject_title" name="subject_title" required>
                                </div>
                                <teacher-selector-component :teacher="{{$teacher}}"></teacher-selector-component>
                                <div class="col-md-6">
                                    <label for="on_date">วันทีเริ่มสอน:</label>
                                    <input class="form-control" type="date" id="on_date" name="on_date">
                                </div>
                                <div class="col-md-6">
                                    <label for="on_time">เวลาเริ่มสอน:</label>
                                    <input class="form-control" type="time" id="on_time" name="on_time" required>
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
