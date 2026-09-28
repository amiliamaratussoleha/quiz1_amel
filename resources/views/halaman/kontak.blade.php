@extends('layouts.kampus')

@section('title', 'Kontak')

@section('content')

<section class="page-header">

    <div class="page-header-content">

        <span class="page-badge">
            Kontak
        </span>

        <h1>
            Hubungi Kami
        </h1>

        <p>
            Temukan informasi kontak Polinema PSDKU Pamekasan
            untuk mendapatkan informasi lebih lanjut.
        </p>

    </div>

</section>


<section class="contact-section">

    <div class="contact-info">

        <span class="section-label">
            Informasi Kontak
        </span>

        <h2>
            Kami Siap Membantu
        </h2>

        <p>
            Jika membutuhkan informasi mengenai kampus, program studi,
            atau kegiatan akademik, kamu dapat menghubungi kami melalui
            informasi berikut.
        </p>


        <div class="contact-item">

            <div class="contact-icon">
                📍
            </div>

            <div>
                <h3>Alamat</h3>

                <p>
                    Politeknik Negeri Malang PSDKU Pamekasan
                </p>
            </div>

        </div>


        <div class="contact-item">

            <div class="contact-icon">
                📞
            </div>

            <div>
                <h3>Telepon</h3>

                <p>
                    Informasi kontak kampus
                </p>
            </div>

        </div>


        <div class="contact-item">

            <div class="contact-icon">
                ✉️
            </div>

            <div>
                <h3>Email</h3>

                <p>
                    Informasi email kampus
                </p>
            </div>

        </div>

    </div>


    <div class="contact-card">

        <h2>
            Polinema PSDKU Pamekasan
        </h2>

        <p>
            Silakan hubungi pihak kampus untuk memperoleh informasi
            yang lebih lengkap mengenai kegiatan akademik dan layanan kampus.
        </p>

        <a href="mailto:info@polinema.ac.id" class="contact-button">
            Kirim Email
            <span>→</span>
        </a>

    </div>

</section>

@endsection