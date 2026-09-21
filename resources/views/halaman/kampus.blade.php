@extends('layouts.app')

@section('title', $namaKampus)

@section('content')

    <div class="text-center" style="padding: 20px 0;">
        <h1 class="header-title">{{ strtoupper($judul) }}</h1>
        <p class="narasi">{{ $narasi }}</p>
    </div>

    <div class="card-grid">
        <div class="card card-half">
            <h2 align="center">Tentang Kampus</h2>
            <hr style="margin: 10px 0; border: 0; border-top: 1px; solid #ddd;">
            <p style="line-height: 1.6;">
                {{ $tentangKampus }}
            </p>
        </div>

        <div class="card card-half text-center"
            style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
            <h2 style="margin-bottom: 15px;">Logo Kampus</h2>

            <img src="/images/logo.png" alt="Logo Kampus" width="190" style="object-fit: contain;">
        </div>
    </div>

    <div class="card card-full">
        <h2 align="center">Daftar Program Studi</h2>
        <hr style="margin: 10px 0; border: 0; border-top: 2px; solid #ddd;">
        <div class="prodi-list">
            @foreach ($programStudi as $prodi)
                <span class="prodi-item">{{ $prodi }}</span>
            @endforeach
        </div>
    </div>

@endsection
