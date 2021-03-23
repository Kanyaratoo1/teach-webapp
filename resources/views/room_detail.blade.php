@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('ข้อมูลเพิ่มเติม') }}
                    <div class="float-right">
                        <a href="/subroom" type="button" class="btn btn-sm btn-primary">
                            <i class="fas fa-home"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <room-detail :rooms="{{$rooms}}"/>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
