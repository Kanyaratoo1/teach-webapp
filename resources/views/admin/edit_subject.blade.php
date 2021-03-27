@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form action="{{url('/subjects/'.$subjects->id)}}" method="post">
                @csrf
                <div class="card">
                    <div class="card-header">
                        {{ __('แก้ไขข้อมูลรายวิชาใหม่') }}
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
                            <teacher-edit-component :teachers="{{$teachers}}" :subjects="{{$subjects}}"></teacher-edit-component>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
