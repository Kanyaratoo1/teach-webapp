@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form action="{{url('/student/'.$student->id)}}" method="post">
                @csrf
                <div class="card">
                    <div class="card-header">
                        {{ __('ข้อมูลนักศึกษา') }}
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
                        <div class="from-group row">
                            <div class="col-md-6">
                                <label>{{ __('ชื่อ:') }}</label>
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" required autocomplete="first_name" autofocus value="{{$student->first_name}}"/>
                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label>{{ __('สกุล:') }}</label>
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ $student->last_name }}" required autocomplete="last_name"/>
                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label>{{ __('รหัสนักศึกษา:') }}</label>
                                <input id="usercode" type="text" class="form-control @error('usercode') is-invalid @enderror" name="usercode" value="{{ $student->usercode }}" required autocomplete="usercode"/>
                                @error('usercode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="form-group">
                            <label for="username">ชื่อผู้ใช้งาน:</label>
                            <input type="text" class="form-control" placeholder="ระบุชื่อผู้ใช้งาน" id="username" name="username" value="{{$student->username}}">
                          </div>
                        <div class="form-group">
                          <label for="email">ที่อยู่เมล์:</label>
                          <input type="email" class="form-control" placeholder="ระบุที่อยู่เมล์" id="email" name="email" value="{{$student->email}}">
                        </div>
                        {{-- <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" placeholder="ระบุรหัสผ่าน" id="pwd" name="password" value="{{$student->password}}">
                        </div> --}}
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
