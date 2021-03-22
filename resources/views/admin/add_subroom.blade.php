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
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible">
                                <ul>
                                    @foreach ($errors->all() as $e)
                                    <li>
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <strong>Error!</strong> {{$e}}
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
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
