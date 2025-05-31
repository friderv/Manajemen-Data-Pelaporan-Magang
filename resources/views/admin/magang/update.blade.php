@extends('layouts/app')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">
        <i class="fas fa-plus mr-2"></i>
    {{ $title }}
    </h1>

    <div class="card" >
        <div class="card-header bg-warning">
            <a href="{{ route('magang') }}" class="btn btn-sm btn-success"><i class="fas fa-arrow-left mr-2"></i>Kembali</a>
            </div>
                <div class="card-body">
                    <form action="{{ route('magangUpdate', $magang->id) }}" method="POST">
                    @csrf
                    <div class="row">
                    <div class="col-md-12 mb-2">
                        <label class="form-label">
                            <span class="text-danger">*</span>
                            Nama :
                        </label>
                        <input type="text" value="{{ $magang->user->nama }}" class="form-control" disabled>
                    </div>
                    <div class="col-md-12 mb-2">
                        <label class="form-label">
                            <span class="text-danger">*</span>
                            Magang :
                        </label>
                        <select name="magang" class="form-control @error('magang') is-invalid @enderror">
                        <option selected disabled>--Pilih Status--</option>
                        <option value="Magang">Magang</option>
                        <option value="Selesai Magang">Selesai Magang</option>
                        </select>
                        @error('magang')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-2">
                    <label class="form-label">
                        <span class="text-danger">*</span>
                        Tanggal Mulai :
                    </label>
                    <input type="date" name="tanggal_mulai" class="form-control @error('tanggal_mulai') is-invalid @enderror" value="{{ $magang->tanggal_mulai }}">
                        @error('tanggal_mulai')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-2">
                    <label class="form-label">
                        <span class="text-danger">*</span>
                        Tanggal Selesai :
                    </label>
                    <input type="date" name="tanggal_selesai" class="form-control @error('tanggal_selesai') is-invalid @enderror" value="{{ $magang->tanggal_selesai }}">
                        @error('tanggal_selesai')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-sm btn-warning">
                        <i class="fas fa-edit mr-2"></i>
                        Edit
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

