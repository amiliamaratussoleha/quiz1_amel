@extends('layouts.kampus')

@section('title', 'Tentang Kampus')

@section('content')

<section class="page-header">

    <div class="page-header-content">

        <span class="page-badge">
            Tentang KAmpus ku
        </span>

        <h1>
            Mengenal Polinema PSDKU Pamekasan
        </h1>

        <p>
            Mengenal lebih dekat kampus ku yuk, lingkungan pendidikan,
            serta tujuan hadirnya Politeknik Negeri Malang PSDKU Pamekasan.
        </p>

    </div>

</section>


<section class="about-section">

    <div class="about-image">

        <img
            src="{{ asset('images/polinemaa.jpeg') }}"
            alt="Polinema PSDKU Pamekasan"
        >

    </div>


    <div class="about-content">

        <span class="section-label">
            Tentang Kampus Ku
        </span>

        <h2>
            Politeknik Negeri Malang PSDKU Pamekasan
        </h2>

        <p>
            {{ $tentangKampus }}
        </p>

        <p>
            Polinema PSDKU Pamekasan menjadi salah satu tempat
            mahasiswa untuk mendapatkan pendidikan vokasi sekaligus
            mengembangkan kemampuan yang dapat diterapkan dalam dunia kerja.
        </p>

    </div>

</section>


<section class="about-info">

    <div class="info-card">

        <div class="info-icon">
            🎓
        </div>

        <h3>
            Pendidikan Vokasi
        </h3>

        <p>
            Pembelajaran diarahkan pada pengembangan kemampuan
            praktis dan keterampilan yang sesuai dengan kebutuhan dunia kerja.
        </p>

    </div>


    <div class="info-card">

        <div class="info-icon">
            💻
        </div>

        <h3>
            Berbasis Teknologi
        </h3>

        <p>
            Mahasiswa belajar mengikuti perkembangan teknologi
            dan kebutuhan industri yang terus berkembang.
        </p>

    </div>


    <div class="info-card">

        <div class="info-icon">
            🌱
        </div>

        <h3>
            Pengembangan Mahasiswa
        </h3>

        <p>
            Lingkungan kampus mendukung mahasiswa untuk belajar,
            berkembang, dan meningkatkan kemampuan mereka.
        </p>

    </div>

</section>

@endsection
