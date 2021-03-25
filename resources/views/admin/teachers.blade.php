@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('รายชื่ออาจารย์') }}
                    <div class="float-right">
                        <a href="/teachers/add" type="button" class="btn btn-sm btn-primary">
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <teacher-component :teacher="{{$teacher}}"></teacher-component>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
