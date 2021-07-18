@extends('layouts.app', ['title' => __('User Management')])

@section('content')
    @include('mahasiswa.partials.header', ['title' => __('Tambah Data')])   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Tambah Data Mahasiswa') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('mahasiswa') }}" class="btn btn-sm btn-primary">{{ __('Back to Board') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('mahasiswa.store') }}" autocomplete="off">
                            @csrf
                            
                            <h6 class="heading-small text-muted mb-4">{{ __('') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('nama') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Nama') }}</label>
                                    <input type="text" name="nama" id="input-name" class="form-control form-control-alternative{{ $errors->has('nama') ? ' is-invalid' : '' }}" placeholder="{{ __('Nama') }}" value="{{ old('nama') }}" required autofocus>

                                    @if ($errors->has('nama'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('nama') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('alamat') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Alamat') }}</label>
                                    <input type="text" name="alamat" id="input-name" class="form-control form-control-alternative{{ $errors->has('alamat') ? ' is-invalid' : '' }}" placeholder="{{ __('Alamat') }}" value="{{ old('alamat') }}" required autofocus>

                                    @if ($errors->has('alamat'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('alamat') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('alamat') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Tempat Lahir') }}</label>
                                    <input type="text" name="tmp_lahir" id="input-name" class="form-control form-control-alternative{{ $errors->has('tmp_lahir') ? ' is-invalid' : '' }}" placeholder="{{ __('Tempat Lahir') }}" value="{{ old('tmp_lahir') }}" required autofocus>

                                    @if ($errors->has('tmp_lahir'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('tmp_lahir') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('alamat') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Tanggal Lahir') }}</label>
                                    <!-- <input type="text" name="tgl_lahir" id="input-name" class="form-control form-control-alternative{{ $errors->has('tgl_lahir') ? ' is-invalid' : '' }}" placeholder="{{ __('Tanggal Lahir') }}" value="{{ old('tgl_lahir') }}" required autofocus> -->
                                    <input type="date" id="tgl_lahir" name="tgl_lahir" value="<?php echo date('Y-m-d'); ?>" required autofocus>
                                    
                                    @if ($errors->has('tgl_lahir'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('tgl_lahir') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('jk') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Jenis Kelamin') }}</label>
                                    <input type="text" name="jk" id="input-name" class="form-control form-control-alternative{{ $errors->has('jk') ? ' is-invalid' : '' }}" placeholder="{{ __('Jenis Kelamin') }}" value="{{ old('jk') }}" required autofocus>

                                    @if ($errors->has('jk'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('jk') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                
                                
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        @include('layouts.footers.auth')
    </div>
@endsection