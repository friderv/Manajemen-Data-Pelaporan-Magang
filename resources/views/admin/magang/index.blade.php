@extends('layouts/app')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">
        <i class="fas fa-tasks mr-2"></i>
    {{ $title }}
    </h1>

    <div class="card" >
        <div class="card-header d-flex flex-wrap justify-content-center justify-content-xl-between">
            <div class="mb-1 mr-1">
                <a href="{{ route('magangCreate') }}" class="btn btn-sm btn-primary"><i class="fas fa-plus mr-2"></i>Tambah Data</a>
            </div>
            <div>
                <a href="{{ route('magangExcel') }}" class="btn btn-sm btn-success"><i class="fas fa-file-excel mr-2"></i>Excel</a>
                <a href="{{ route('magangPdf') }}" class="btn btn-sm btn-danger" target="__blank"><i class="fas fa-file-pdf mr-2"></i>PDF</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-primary text-white">
                        <tr class="text-center">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Magang</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                       @foreach ($magang as $item)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $item->user->nama }}</td>
                            <td class="text-center"><span class="badge badge-primary">{{ $item->magang }}</span></td>
                            <td class="text-center">
                                <span class="badge badge-info">{{ $item->tanggal_mulai }}</span>
                            </td>
                            <td class="text-center">
                                <span class="badge badge-info">{{ $item->tanggal_selesai }}</span>
                            </td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#modalMagangShow{{ $item->id }}"><i class="fas fa-eye"></i></button>
                                <a href="{{ route('magangEdit', $item->id) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete-{{ $item->id }}"><i class="fas fa-trash"></i></button>
                                @include('admin/magang/modal')
                            </td>
                        </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>
        </div>

@endsection

