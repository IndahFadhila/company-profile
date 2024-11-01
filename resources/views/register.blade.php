<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <style>
        body {
            font-family: 'Raleway', sans-serif;
        }
    </style>
</head>
<body class="h-screen grid grid-cols-2">
    <div class="bg-[#2D3250]">
        <a href="/login"><svg class="my-4 ml-3" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#ffffff" viewBox="0 0 256 256"><path d="M205.66,194.34a8,8,0,0,1-11.32,11.32L128,139.31,61.66,205.66a8,8,0,0,1-11.32-11.32L116.69,128,50.34,61.66A8,8,0,0,1,61.66,50.34L128,116.69l66.34-66.35a8,8,0,0,1,11.32,11.32L139.31,128Z"></path></svg></a>
        <div class="flex">
            <div class="space-y-6 text-center">
                <h1 class="text-3xl font-bold text-white">Create Account</h1>
                <form action="{{ route('register') }}" class="space-y-6" method="POST">
                    @csrf
                    <input type="text" name="name" class="w-[350px] rounded-full bg-[#424769] px-8 py-4 text-white" placeholder="Masukan Nama" required>
                    <input type="text" name="email" class="w-[350px] rounded-full bg-[#424769] px-8 py-4 text-white" placeholder="Masukan Email" required>
                    <input type="password" name="password" class="w-[350px] rounded-full bg-[#424769] px-8 py-4 text-white" placeholder="Masukan Password" required>
                    <input type="password" name="password_confirmation" class="w-[350px] rounded-full bg-[#424769] px-8 py-4 text-white" placeholder="Confirm Password">
                    <button type="submit" class="w-[350px] rounded-full bg-[#FFC28C] px-8 py-3 text-lg font-bold text-[#2D3250] hover:bg-[#ffae68]">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    <div class="bg-white flex items-center justify-center">
        <img src="/assets/webProfile.svg" class="w-[340px] h-[380px]" alt="">
    </div>
</body>
</html>


