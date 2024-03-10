@extends('layouts.app')

@section('title', 'User Profile')

@section('third_party_stylesheets')
    @include('includes.filepond-css')
@endsection

@section('breadcrumb')
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ trans('public.Home') }}</a></li>
        <li class="breadcrumb-item active">{{ trans('public.Profile') }}</li>
    </ol>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @include('utils.alerts')
                <h3>{{ trans('public.Hello') }}, <span class="text-primary">{{ auth()->user()->name }}</span></h3>
                <p class="font-italic">{{ trans('public.Change') }}</p>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('profile.update') }}" method="POST">
                            @csrf
                            @method('patch')

                            <div class="form-group">
                                <label for="image">{{ trans('public.ProfileImage') }} <span class="text-danger">*</span></label>
                                <img style="width: 100px;height: 100px;" class="d-block mx-auto img-thumbnail img-fluid rounded-circle mb-2" src="{{ auth()->user()->getFirstMediaUrl('avatars') }}" alt="Profile Image">
                                <input id="image" type="file" name="image" data-max-file-size="500KB">
                            </div>

                            <div class="form-group">
                                <label for="name">{{ trans('public.Name') }} <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="name" required value="{{ auth()->user()->name }}">
                                @error('name')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">{{ trans('public.Email') }} <span class="text-danger">*</span></label>
                                <input class="form-control" type="email" name="email" required value="{{ auth()->user()->email }}">
                                @error('email')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">{{ trans('public.UpdateProfile') }}  <i class="bi bi-check"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('profile.update.password') }}" method="POST">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <label for="current_password">{{ trans('public.CurrentPassword') }} <span class="text-danger">*</span></label>
                                <input type="password" class="form-control" name="current_password" required>
                                @error('current_password')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">{{ trans('public.NewPassword') }} <span class="text-danger">*</span></label>
                                <input class="form-control" type="password" name="password" required>
                                @error('password')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">{{ trans('public.ConfirmPassword') }} <span class="text-danger">*</span></label>
                                <input class="form-control" type="password" name="password_confirmation" required>
                                @error('password_confirmation')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">{{ trans('public.UpdatePassword') }} <i class="bi bi-check"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('page_scripts')
    @include('includes.filepond-js')
@endpush


