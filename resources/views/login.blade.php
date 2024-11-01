<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    @vite('resources/css/app.css')
    <style>
        body {
            font-family: 'Raleway', sans-serif;
        }

        .close-alert {
            cursor: pointer;
        }
    </style>
</head>

<body class="h-screen grid grid-cols-2">
    <div class="bg-[#2D3250] flex items-center justify-center">
        <div class="space-y-6 text-center">
            <h1 class="text-3xl font-bold text-white">SIGN IN</h1>

            <!-- Tampilkan pesan error jika ada -->
            @if ($errors->has('message'))
            <div id="errorAlert" class="flex items-center bg-red-100 shadow-md rounded-full p-4 w-[350px] border-t-4 border-red-500 mx-auto mb-6">
                <i class="fas fa-exclamation-circle text-red-500 mr-3"></i>
                <span class="flex-grow text-red-700 font-bold">Email atau Password Salah</span>
                <i class="fas fa-times text-gray-500 close-alert" onclick="closeAlert('errorAlert')"></i>
            </div>
            @endif

            <!-- Tampilkan pesan sukses jika login berhasil -->
            @if (session('success'))
            <div id="successAlert" class="flex items-center bg-green-100 shadow-md rounded-full p-4 w-[350px] border-t-4 border-green-500 mx-auto mb-6">
                <i class="fas fa-check-circle text-green-500 mr-3"></i>
                <span class="flex-grow text-green-700 font-bold">Berhasil Login</span>
                <i class="fas fa-times text-gray-500 close-alert" onclick="closeAlert('successAlert')"></i>
            </div>
            @endif

            <form action="{{ route('login') }}" class="space-y-6" method="POST">
                @csrf
                <input type="text" name="email" class="w-[350px] rounded-full bg-[#424769] px-8 py-4 text-white" placeholder="Masukan Email" required>
                <input type="password" name="password" class="w-[350px] rounded-full bg-[#424769] px-8 py-4 text-white" placeholder="Masukan Password" required>
                <button type="submit" class="w-[350px] rounded-full bg-[#FFC28C] px-8 py-3 text-lg font-bold text-[#2D3250] hover:bg-[#ffae68]">Login</button>
            </form>

            <div class="flex justify-center items-center space-x-2">
                <h1 class="text-white text-sm">Belum punya akun?</h1>
                <h1 class="text-blue-500"><a href="/register"> Buat Akun </a></h1>
            </div>
        </div>
    </div>

    <div class="bg-white flex items-center justify-center">
        <img src="/assets/webProfile.svg" class="w-[340px] h-[380px]" alt="">
    </div>

    <script>
        function closeAlert(alertId) {
            document.getElementById(alertId).style.display = 'none';
        }
    </script>
</body>

</html>
