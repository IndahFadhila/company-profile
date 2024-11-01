<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Karyawan</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
         body {
            padding-top: 70px;
            font-family: 'Raleway', sans-serif;
        }
    </style>
</head>
<body class="bg-[#ffffff]">
    <nav class="bg-white/70 backdrop-blur-lg shadow-lg fixed top-0 left-0 right-0 z-50">
        <div class="container mx-auto flex justify-between items-center font-bold py-4">
            <div class="flex items-center ml-[60px]">
                <img src="favicon.ico" class="w-[50px] h-[50px] mr-[15px]">
                <div>
                    <h1 class="text-xl text-[#2D3250]">PT. Hexagon</h1>
                    <h1 class="text-base text-[#000000]">Karyatama Indonesia</h1>
                </div>
            </div>
            <div class="flex items-center mr-[50px]">
                <ul class="flex gap-6 text-[#000000] text-l font-bold">
                    <li><a class="p-3 rounded-full hover:text-[#2D3250]" href="#">About</a></li>
                    <li><a class="p-3 rounded-full hover:text-[#2D3250]" href="#">Project</a></li>
                    <li><a class="p-3 rounded-full hover:text-[#2D3250]" href="#">Partner</a></li>
                    <li><a class="p-3 rounded-full hover:text-[#2D3250]" href="#">Contact</a></li>
                    <li><a class="p-3 rounded-full hover:text-[#fdfdfd] hover:bg-[#2D3250]" href="/dashboard">Dashboard</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="mt-12 mx-10">
        <div class="flex space-x-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#2D3250" viewBox="0 0 256 256">
                <path d="M208,32H64a8,8,0,0,0-8,8V216a8,8,0,0,0,8,8H208a8,8,0,0,0,8-8V40A8,8,0,0,0,208,32ZM136,144a32,32,0,1,1,32-32A32,32,0,0,1,136,144Z" opacity="0.2"></path>
                <path d="M83.19,174.4a8,8,0,0,0,11.21-1.6,52,52,0,0,1,83.2,0,8,8,0,1,0,12.8-9.6A67.88,67.88,0,0,0,163,141.51a40,40,0,1,0-53.94,0A67.88,67.88,0,0,0,81.6,163.2A8,8,0,0,0,83.19,174.4ZM112,112a24,24,0,1,1,24,24A24,24,0,0,1,112,112Zm96-88H64A16,16,0,0,0,48,40V64H32a8,8,0,0,0,0,16H48v40H32a8,8,0,0,0,0,16H48v40H32a8,8,0,0,0,0,16H48v24a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V40A16,16,0,0,0,208,24Zm0,192H64V40H208Z"></path>
            </svg>
            <h1 class="text-[#2D3250] text-4xl font-bold">Karyawan</h1>
        </div>

        <div class="p-3 mt-5 shadow-lg dark:bg-boxdark rounded-lg">
            <div class="overflow-y-auto">
                <table class="w-full p-3 bg-white text-center text-graydark dark:bg-boxdark dark:text-gray">
                    <thead class="bg-gray dark:bg-boxdark text-black dark:text-white">
                        <tr>
                            <th class="px-6 py-3 text-sm leading-4 font-medium tracking-wider">No</th>
                            <th class="px-6 py-3 text-sm leading-4 font-medium tracking-wider">Nama</th>
                            <th class="px-6 py-3 text-sm leading-4 font-medium tracking-wider">Jabatan</th>
                            <th class="px-6 py-3 text-sm leading-4 font-medium tracking-wider">Jenis Kelamin</th>
                            <th class="px-6 py-3 text-sm leading-4 font-medium tracking-wider">Telepon</th>
                            <th class="px-6 py-3 text-sm leading-4 font-medium tracking-wider">Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($karyawan as $index => $karyawan)
                            <tr>
                                <td class="px-6 py-4 text-sm">{{ $index + 1 }}</td>
                                <td class="px-6 py-4 text-sm">{{ $karyawan->nama_lengkap }}</td>
                                <td class="px-6 py-4 text-sm">{{ $karyawan->jabatan }}</td>
                                <td class="px-6 py-4 text-sm">{{ $karyawan->jenis_kelamin }}</td>
                                <td class="px-6 py-4 text-sm">{{ $karyawan->no_hp }}</td>
                                <td class="px-6 py-4 text-sm">{{ $karyawan->alamat }}</td>
                                <td></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>