<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Karyawan</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Raleway', sans-serif;
        }
    </style>
</head>
<body class="bg-white">
    <div class="my-10 mx-[300px] bg-[#2D3250] rounded-xl py-5 px-10 shadow-lg">
        <div class="flex space-x-3">
            <a href="/dashboard">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#f5f5f5" viewBox="0 0 256 256">
                <path d="M200,48V208l-80-80Z" opacity="0.2"></path>
                <path d="M203.06,40.61a8,8,0,0,0-8.72,1.73l-80,80a8,8,0,0,0,0,11.32l80,80A8,8,0,0,0,208,208V48A8,8,0,0,0,203.06,40.61ZM192,188.69,131.31,128,192,67.31Zm-66.34,13.65a8,8,0,0,1-11.32,11.32l-80-80a8,8,0,0,1,0-11.32l80-80a8,8,0,0,1,11.32,11.32L51.31,128Z"></path>
            </svg>
            </a>
            <h1 class="text-white font-bold text-2xl">Detail Data Karyawan</h1>
        </div>


        <div class="space-y-12">
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="col-span-full">
                    <label class="block text-sm font-medium leading-6 text-white">Nama Lengkap</label>
                    <div class="mt-2">
                        <p class="text-white">{{ $karyawan->nama_lengkap }}</p> <!-- Menampilkan data -->
                    </div>
                </div>


                <div class="col-span-full">
                    <label class="block text-sm font-medium leading-6 text-white">Jabatan</label>
                    <div class="mt-2">
                        <p class="text-white">{{ $karyawan->jabatan }}</p> <!-- Menampilkan data -->
                    </div>
                </div>


                <div class="col-span-full">
                    <label class="block text-sm font-medium leading-6 text-white">Jenis Kelamin</label>
                    <div class="mt-2">
                        <p class="text-white">{{ $karyawan->jenis_kelamin }}</p> <!-- Menampilkan data -->
                    </div>
                </div>


                <div class="col-span-full">
                    <label class="block text-sm font-medium leading-6 text-white">No. Handphone</label>
                    <div class="mt-2">
                        <p class="text-white">{{ $karyawan->no_hp }}</p> <!-- Menampilkan data -->
                    </div>
                </div>


                <div class="col-span-full">
                    <label class="block text-sm font-medium leading-6 text-white">Alamat Lengkap</label>
                    <div class="mt-2">
                        <p class="text-white">{{ $karyawan->alamat }}</p> <!-- Menampilkan data -->
                    </div>
                </div>
            </div>
        </div>


        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="{{ route('dashboard') }}" class="rounded-md bg-[#FF9A42] px-6 py-2 text-sm font-semibold text-[#424769] shadow-sm hover:bg-[#FFC28C]">
                Kembali
            </a>
            <a href="{{ route('edit', $karyawan->id) }}" class="rounded-md bg-[#42FF7A] px-6 py-2 text-sm font-semibold text-[#424769] shadow-sm hover:bg-[#8CFFC2]">
                Edit
            </a>
        </div>
    </div>
</body>
</html>


