@extends('layouts.app', ['title' => __('User Management')])
@section('content')
    @include('layouts.headers.cards')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
            <i class="ni ni-air-baloon text-white"></i>
            <span class="h8 font-weight-bold mb-0 text-white">Data Mahasiwa Baru 2021</span>
            <br><br><br><br><br><br>
                <!-- Card stats -->
                <div class="container-fluid mt--7">
                <div class="row">
                    <div class="col">
                        <div class="card shadow">
                            <div class="card-header border-0">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h3 class="mb-0">{{ __('Data Mahaiswa') }}</h3>
                                    </div>
                                    <div class="col-4 text-right">
                                        <a href="{{ route('mahasiswa.create') }}" class="btn btn-sm btn-primary">{{ __('Tambah Data') }}</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                @if (session('status'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('status') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                            </div>

                            <div class="table-responsive">
                            <div class="form-group mb-0 ">
                                <div class="input-group input-group-alternative thead-light">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                                    </div>
                                    <input id="myInput" onkeyup="myFunction()" class="form-control" placeholder="Cari Berdasarkan Nama" type="text">
                                </div>
                            </div>
                                <table id="myTable" class="table align-items-center table-flush">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">{{ __('Nama') }}</th>
                                            <th scope="col">{{ __('Alamat') }}</th>
                                            <th scope="col">{{ __('Tempat Lahir') }}</th>
                                            <th scope="col">{{ __('Tanggal Lahir') }}</th>
                                            <th scope="col">{{ __('Jenis Kelamin') }}</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($mahasiswas as $mahasiswa)
                                            <tr>
                                                <td>{{ $mahasiswa->nama }}</td>
                                                <td>{{ $mahasiswa->alamat }}</td>
                                                <td>{{ $mahasiswa->tmp_lahir }}</td>
                                                <td>{{ $mahasiswa->tgl_lahir }}</td>
                                                <td>{{ $mahasiswa->jk }}</td>
                                                <td class="text-right">
                                                    <div class="dropdown">
                                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fas fa-ellipsis-v"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                                <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="post">
                                                                    @csrf
                                                                    @method('delete')
                                                                    
                                                                    <a class="dropdown-item" href="{{ route('mahasiswa.edit', $mahasiswa->id) }}">{{ __('Edit') }}</a>
                                                                    <button type="button" class="dropdown-item" onclick="confirm('{{ __("Are you sure you want to delete this cabang?") }}') ? this.parentElement.submit() : ''">
                                                                        {{ __('Delete') }}
                                                                    </button>
                                                                </form>    
                                                                
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer py-4">
                                <nav class="d-flex justify-content-end" aria-label="...">
                                    {{ $mahasiswas->links() }}
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth')
    </div>
@endsection
