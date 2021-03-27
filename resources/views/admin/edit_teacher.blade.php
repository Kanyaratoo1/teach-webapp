@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form action="{{url('/teachers/'.$teachers->user_id.'/'.$teachers->id.'/edit')}}" method="post">
                @csrf
                <div class="card">
                    <div class="card-header">
                        {{ __('แก้ไขข้อมูล') }}
                        <div class="float-right">
                            <button type="submit" class="btn btn-sm btn-primary">
                                {{ __('บันทึก') }}
                            </button>
                            <a href="{{url('/teachers/'.$teachers->id.'/delete')}}" type="button" class="btn btn-sm btn-danger">
                                {{ __('ลบ') }}
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="from-group row">
                            <div class="col-md-6">
                                <label>{{ __('ชื่อ:') }}</label>
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" required autocomplete="first_name" autofocus value="{{$username->first_name}}"/>
                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label>{{ __('สกุล:') }}</label>
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" required autocomplete="last_name" value="{{$username->last_name}}"/>
                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label>{{ __('รหัสประจำตัว:') }}</label>
                                <input id="usercode" type="text" class="form-control @error('usercode') is-invalid @enderror" name="usercode" required autocomplete="usercode" value="{{$username->usercode}}"/>
                                @error('usercode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label>{{ __('ตำแหนง:') }}</label>
                                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" utocomplete="description" value="{{$teachers->description}}"/>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="form-group">
                            <label for="username">ชื่อผู้ใช้งาน:</label>
                            <input type="text" class="form-control" placeholder="ระบุชื่อผู้ใช้งาน" id="username" name="username" disabled value="{{$username->username}}">
                          </div>
                        <div class="form-group">
                          <label for="email">ที่อยู่เมล์:</label>
                          <input type="email" class="form-control" placeholder="ระบุที่อยู่เมล์" id="email" name="email" disabled value="{{$username->email}}">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
