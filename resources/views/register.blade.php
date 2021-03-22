@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('เข้าห้องเรียน') }}
                    <div class="float-right">
                        <a href="/home" type="button" class="btn btn-sm btn-primary">
                            <i class="fas fa-home"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{url($link)}}">
                        @csrf
                        <register-class :objects="{{$objects}}"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
