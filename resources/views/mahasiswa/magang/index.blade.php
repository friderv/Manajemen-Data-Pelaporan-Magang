@extends('layouts/app')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">
        <i class="fas fa-tasks mr-2"></i>
    {{ $title }}
    </h1>

    <div class="card" >
        <div class="card-header d-flex flex-wrap justify-content-center justify-content-xl-between">
            <div class="mb-1 mr-1">
            </div>
            <div>
                @if (auth()->user()->magang!=null)
                    <a href="{{ route('magangPdf') }}" class="btn btn-sm btn-danger" target="__blank"><i class="fas fa-file-pdf mr-2"></i>PDF</a>
                @endif
            </div>
        </div>
        <div class="card-body">
            @if (auth()->user()->magang!=null)
                <div class="row">
                    <div class="col-6">
                        Nama
                    </div>
                    <div class="col-6">
                        : {{ $magang->user->nama }}
                    </div>
                    <div class="col-6">
                        Email
                    </div>
                    <div class="col-6">
                        :
                        <span class="badge badge-primary">
                            {{ $magang->user->email }}
                        </span>  
                    </div>
                    <div class="col-6">
                        Nama Perusahaan
                    </div>
                    <div class="col-6">
                        : {{ $magang->user->nama_perusahaan }}
                    </div>
                    <div class="col-6">
                        Tanggal Mulai
                    </div>
                    <div class="col-6">
                        :
                        <span class="badge badge-info">
                            {{ $magang->tanggal_mulai }}
                        </span>  
                    </div>
                    <div class="col-6">
                        Tanggal Selesai
                    </div>
                    <div class="col-6">
                        :
                        <span class="badge badge-danger">
                            {{ $magang->tanggal_selesai }}
                        </span>  
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col-6">
                        Status 
                    </div>
                    <div class="col-6">
                        :
                        <span class="badge badge-danger">
                            Belum Mengikuti Magang
                        </span>
                    </div>
                </div>
            @endif
        </div>

@endsection

