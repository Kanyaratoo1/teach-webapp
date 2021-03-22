@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('ผลการเข้าห้องเรียน') }}
                    <div class="float-right">
                        <a href="/subroom/add" type="button" class="btn btn-sm btn-primary">
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>
                </div>
                <sub-room-list :subject_room="{{$subject_room}}" />
            </div>
        </div>
    </div>
</div>
@endsection
