<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Curriculum Vitae')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #e5e7eb;
        }

        .cv-container {
            display: flex;
            flex-direction: row;
            width: 100%;
            height: 100vh; /* Full tinggi layar */
            background-color: #fff;
        }

        .sidebar {
            width: 30%;
            background-color: #1f2937; /* abu gelap */
            color: white;
            padding: 2rem;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .main-content {
            width: 70%;
            padding: 3rem;
            overflow-y: auto;
            background-color: #f9fafb;
        }

        /* Scroll bar yang lebih halus */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-thumb {
            background-color: #9ca3af;
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background-color: #6b7280;
        }

        footer {
            background: #111827;
            color: #9ca3af;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>

<body>
    <div class="cv-container">
        <!-- Sidebar kiri -->
        <aside class="sidebar">
            @component('components.profile') @endcomponent
        </aside>

        <!-- Konten utama kanan -->
        <main class="main-content">
            @include('partials.header')
            <hr class="my-4 border-gray-300">
            @yield('content')
        </main>
    </div>

    @include('partials.footer')
</body>
</html>
