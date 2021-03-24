@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <room-detail :rooms="{{$rooms}}" :room_id="{{$room_id}}"/>
        </div>
    </div>
</div>
@endsection
