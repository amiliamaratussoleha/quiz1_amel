@extends('layouts.kampus')

@section('title', 'Program Studi')

@section('content')

<section class="page-header">

    <div class="page-header-content">

        <span class="page-badge">
            Program Studi
        </span>

        <h1>
            Pilihan Program Studi
        </h1>

        <p>
            Kenali program studi yang tersedia di Polinema PSDKU Pamekasan
            dan temukan bidang yang sesuai dengan minatmu.
        </p>

    </div>

</section>


<section class="prodi-section">

    <div class="prodi-title">

        <span class="section-label">
            Pendidikan
        </span>

        <h2>
            Program Studi di PSDKU Pamekasan
        </h2>

        <p>
            Program studi dirancang untuk memberikan pengetahuan dan
            keterampilan yang dapat diterapkan dalam dunia kerja.
        </p>

    </div>


    <div class="prodi-grid">

        @foreach ($programStudi as $prodi)

            <div class="prodi-item">

                <div class="prodi-number">
                    {{ $loop->iteration }}
                </div>

                <div>

                    <h3>
                        {{ $prodi }}
                    </h3>

                    <p>
                        Program pendidikan vokasi yang membantu mahasiswa
                        mengembangkan pengetahuan dan keterampilan di bidangnya.
                    </p>

                </div>

            </div>

        @endforeach

    </div>

</section>

@endsection