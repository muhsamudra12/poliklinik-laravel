<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poliklinik</title>
    
    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://googleapis.com">
    <link href="https://googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cloudflare.com">
    <link rel="stylesheet" href="https://jsdelivr.net">
    
    <!-- Pemanggilan Vite (Tailwind & JS) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 p-8">

    <!-- Contoh Penggunaan Tailwind CSS -->
    <div class="mb-8 p-6 bg-white rounded-xl shadow-sm border border-slate-100 max-w-2xl mx-auto">
        <h2 class="text-2xl font-bold text-slate-800">
            Selamat Datang
        </h2>
        <p class="text-sm text-slate-600 mt-1">
            {{ now()->translatedFormat('l, d F Y') }} - Berikut ringkasan aktivitas anda hari ini
        </p>
    </div>

</body>
</html>