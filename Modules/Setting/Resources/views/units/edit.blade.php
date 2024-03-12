@extends('layouts.app')

@section('title', 'Edit Unit')

@section('breadcrumb')
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ trans('public.Home') }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('units.index') }}">{{ trans('public.Units') }}</a></li>
        <li class="breadcrumb-item active">{{ trans('public.Edit') }}</li>
    </ol>
@endsection

@section('content')
    <div class="container-fluid">
        <form action="{{ route('units.update', $unit) }}" method="POST">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="name">{{ trans('public.UnitName') }} <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="name" required value="{{ $unit->name }}">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="short_name">{{ trans('public.ShortName') }} <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="short_name" required value="{{ $unit->short_name }}">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="operator">{{ trans('public.Operator') }}</label>
                                        <input type="text" class="form-control" name="operator" value="{{ $unit->operator }}">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="operation_value">{{ trans('public.OperationValue') }}</label>
                                        <input type="text" class="form-control" name="operation_value" value="{{ $unit->operation_value }}">
                                    </div>
                                </div>
                                <div class="col-lg-12 d-flex justify-content-end">
                                    <div class="form-group">
                                        <button class="btn btn-primary">{{ trans('public.UpdateUnit') }} <i class="bi bi-check"></i></button>
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

