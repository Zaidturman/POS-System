@extends('layouts.app')

@section('title', 'Create Unit')

@section('breadcrumb')
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ trans('public.Home') }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('units.index') }}">{{ trans('public.Units') }}</a></li>
        <li class="breadcrumb-item active">{{ trans('public.Add') }}</li>
    </ol>
@endsection

@section('content')
    <div class="container-fluid">
        <form action="{{ route('units.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="name">{{ trans('public.UnitName') }} <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="name" required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="short_name">{{ trans('public.ShortName') }} <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="short_name" required>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="operator">{{ trans('public.Operator') }}</label>
                                        <input type="text" class="form-control" name="operator" placeholder="ex: * / + -">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="operation_value">{{ trans('public.OperationValue') }}</label>
                                        <input type="text" class="form-control" name="operation_value" placeholder="Enter a number">
                                    </div>
                                </div>
                                <div class="col-lg-12 d-flex justify-content-end">
                                    <div class="form-group">
                                        <button class="btn btn-primary">{{ trans('public.CreateUnit') }} <i class="bi bi-check"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

