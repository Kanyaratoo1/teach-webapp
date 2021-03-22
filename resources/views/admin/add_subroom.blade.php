@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form action="{{url('/subroom/add')}}" method="post">
                @csrf
                <div class="card">
                    <div class="card-header">
                        {{ __('เลือกห้องเรียน') }}
                        <div class="float-right">
                            <button type="submit" class="btn btn-sm btn-primary">
                                {{ __('บันทึกข้อมูล') }}
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <sub-room
                        :subject_id="{{$subject_id}}"
                        :teach_id="{{$teach_id}}"
                        :room_id="{{$room_id}}"/>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
