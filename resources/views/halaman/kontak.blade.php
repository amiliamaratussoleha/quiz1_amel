@extends('layouts.kampus')

@section('title', 'Kontak')

@section('content')

<section class="page-header">

    <div class="page-header-content">

        <span class="page-badge">
           Ini Halaman Kontak Kampusku yaa
        </span>

        <h1>
            Hubungi Kampus ku
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
            Informasi Kontak kampus
        </span>

        <h2>
            kami Siap Membantu
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
                    Jl. Stadion No.IX/03 (atau Jl. Letnan Maksum No.3), Ombul, Lawangan Daya, 
                    Kec. Pademawu, Kabupaten Pamekasan, Jawa Timur 69323
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
                    +62 853-3022-5251
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
                    info@polinema.ac.id
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