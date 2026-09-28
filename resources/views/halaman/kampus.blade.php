@extends('layouts.kampus')

@section('title', $namaKampus)

@section('content')

    <section class="hero" style="background-image: url('{{ asset('images/polinema.jpeg') }}');">

        <div class="hero-overlay"></div>

            <div class="hero-content">

                <div class="hero-badge">
                    🎓 Polinema PSDKU Pamekasan
                </div>

                <h1>
                 Kampus Kecil dengan
                <br>
                Banyak Peluang Besar
                </h1>

                <p>
                Politeknik Negeri Malang PSDKU Pamekasan hadir sebagai
                rumah bagi generasi muda untuk tumbuh, belajar, dan
                mengembangkan potensi. Dengan lingkungan yang nyaman,
                fasilitas yang memadai, serta program studi yang relevan
                dengan kebutuhan industri, kami siap mencetak lulusan
                yang kompeten, berkarakter, dan siap bersaing di dunia kerja.
                </p>

                <a href="#tentang" class="hero-button">
                    Kenali Lebih Dekat
                    <span>→</span>
                </a>

            </div>

    </section>



    <section class="content-container">

        {{-- TENTANG + LOGO --}}
        <div class="top-cards">

            {{-- Tentang Kampus --}}
            <div class="card tentang-card" id="tentang">

                <div class="card-icon">
                    🏛
                </div>

                <div class="card-content">

                    <h2>Tentang Kampus</h2>

                    <p>
                        {{ $tentangKampus }}
                    </p>

                </div>

            </div>


            {{-- Logo Kampus --}}
            <div class="card logo-card">

                <div class="card-icon">
                    🖼
                </div>

                <div class="card-content">

                    <h2>Potret Kampus</h2>

                    <img src="{{ asset('images/polinemaa.jpeg') }}" alt="Logo Polinema PSDKU Pamekasan" class="logo-kampus">

                </div>

            </div>

        </div>


        {{-- PROGRAM STUDI --}}
        <div class="card prodi-card">

            <div class="prodi-icon">
                🎓
            </div>

            <div class="prodi-content">

                <h2>Program Studi</h2>

                <p>
                    Tersedia berbagai program studi yang dirancang sesuai
                    dengan kebutuhan industri dan perkembangan teknologi,
                    untuk menyiapkan kamu menjadi tenaga ahli yang profesional.
                </p>

            </div>

            <a href="#" class="outline-button">
                Lihat Program Studi
                <span>→</span>
            </a>

        </div>

    </section>

@endsection
