<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Kampusku')</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: times new roman, sans-serif;
        }

        body {
            background-color: #f4f4f4;
            color: #333;
            main-height: 100vh;
            position: relative;
            padding: 20px;
        }

        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('/images/polinema.jpeg');
            background-size: cover;
            background-position: center;
            opacity: 0.15;
            z-index: -1;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            position: relative;
            z-index: 10;
        }

        .card-grid {
            display: flex;
            gap: 20px;
            margin-top: 20px;
        }

        .card {
            background: rgba(255, 255, 255, 0.85);
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            backdrop-filter: blur(5px);
        }

        .card-half {
            flex: 1;
        }

        .card-full {
            width: 100%;
            margin-top: 20px;
        }

        .text-center {
            text-align: center;
        }

        .header-title {
            margin-bottom: 10px;
            color: #1a365d;
        }

        .narasi {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #4a5568;
            margin-bottom: 25px;
        }

        .prodi-list {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            margin-top: 10px;
        }

        .prodi-item {
            background: #2b6cb0;
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
        }
    </style>
</head>

<body>

    <div class="container">
        @yield('content')
    </div>

</body>

</html>
