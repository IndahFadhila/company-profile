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

            <div class="flex space-x-5  mr-[65px]">
                <a href="/homelogin" class="flex space-x-2 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#2D3250" viewBox="0 0 256 256"><path d="M216,116.69V216H152V152H104v64H40V116.69l82.34-82.35a8,8,0,0,1,11.32,0Z" opacity="0.2"></path><path d="M240,208H224V136l2.34,2.34A8,8,0,0,0,237.66,127L139.31,28.68a16,16,0,0,0-22.62,0L18.34,127a8,8,0,0,0,11.32,11.31L32,136v72H16a8,8,0,0,0,0,16H240a8,8,0,0,0,0-16ZM48,120l80-80,80,80v88H160V152a8,8,0,0,0-8-8H104a8,8,0,0,0-8,8v56H48Zm96,88H112V160h32Z"></path></svg>
                    <h1 class="text-md hidden md:block text-[#2D3250]">Home</h1>
                </a>

                <a href="/logout" class="flex space-x-2 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#2D3250" viewBox="0 0 256 256"><path d="M120,216a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V40a8,8,0,0,1,8-8h64a8,8,0,0,1,0,16H56V208h56A8,8,0,0,1,120,216Zm109.66-93.66-40-40a8,8,0,0,0-11.32,11.32L204.69,120H112a8,8,0,0,0,0,16h92.69l-26.35,26.34a8,8,0,0,0,11.32,11.32l40-40A8,8,0,0,0,229.66,122.34Z"></path></svg>
                    <h1 class="text-md hidden md:block text-[#2D3250]">Log out</h1>
                </a>
            </div>
        </div>
    </nav>
    <div class="my-12 mx-[100px]">
        <div class="flex space-x-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#2D3250" viewBox="0 0 256 256">
                <path d="M208,32H64a8,8,0,0,0-8,8V216a8,8,0,0,0,8,8H208a8,8,0,0,0,8-8V40A8,8,0,0,0,208,32ZM136,144a32,32,0,1,1,32-32A32,32,0,0,1,136,144Z" opacity="0.2"></path>
                <path d="M83.19,174.4a8,8,0,0,0,11.21-1.6,52,52,0,0,1,83.2,0,8,8,0,1,0,12.8-9.6A67.88,67.88,0,0,0,163,141.51a40,40,0,1,0-53.94,0A67.88,67.88,0,0,0,81.6,163.2A8,8,0,0,0,83.19,174.4ZM112,112a24,24,0,1,1,24,24A24,24,0,0,1,112,112Zm96-88H64A16,16,0,0,0,48,40V64H32a8,8,0,0,0,0,16H48v40H32a8,8,0,0,0,0,16H48v40H32a8,8,0,0,0,0,16H48v24a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V40A16,16,0,0,0,208,24Zm0,192H64V40H208Z"></path>
            </svg>
            <h1 class="text-[#2D3250] text-4xl font-bold">Karyawan</h1>
        </div>


        <div class="flex mt-5 space-x-4 flex-col md:flex-row items-center">
            <!-- Search Bar -->
            <div class="relative w-full md:w-80 mb-4 md:mb-0">
                <form action="{{ route('dashboard') }}" method="GET" id="searchForm">
                    <input
                        type="text"
                        name="search"
                        id="search"
                        value="{{ $search ?? '' }}"
                        oninput="searchKaryawan()"
                        class="w-full px-4 py-2 pr-10 text-sm text-gray-700 bg-white border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-[#2D3250] focus:border-transparent"
                        placeholder="Search..."
                    />
                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                        <svg 
                            class="w-5 h-5 text-gray-500" 
                            xmlns="http://www.w3.org/2000/svg" 
                            fill="none" 
                            viewBox="0 0 24 24" 
                            stroke="currentColor">
                                <path 
                                    stroke-linecap="round" 
                                    stroke-linejoin="round" 
                                    stroke-width="2" 
                                    d="M21 21l-4.35-4.35M11 18a7 7 0 100-14 7 7 0 000 14z"
                                />
                        </svg>
                    </div>
                </form>
            </div>

            <script>
                function searchKaryawan() {
                    const searchInput = document.getElementById('search');
                    const form = document.getElementById('searchForm');
                    const searchValue = searchInput.value;
            
                    // Mengirim permintaan GET jika ada input
                    if (searchValue.length > 0) {
                        form.submit(); // Mengirim form secara otomatis
                    } else {
                        // Jika input kosong, reset ke semua data
                        window.location.href = "{{ route('dashboard') }}"; // Kembali ke route dashboard tanpa parameter
                    }
                }
            </script>
        
            <!-- Add Button -->
            <a 
                href="/create" 
                class="btn-custom w-full md:w-auto text-white bg-[#2D3250] text-sm px-4 py-2 flex items-center justify-center rounded-full hover:bg-opacity-90 focus:outline-none focus:ring-2 focus:ring-white">
                    <svg 
                        class="w-4 h-4 mr-2" 
                        xmlns="http://www.w3.org/2000/svg" 
                        fill="none" 
                        viewBox="0 0 24 24" 
                        stroke="currentColor">
                            <path 
                                stroke-linecap="round" 
                                stroke-linejoin="round" 
                                stroke-width="2" 
                                d="M12 4v16m8-8H4"
                            />
                    </svg>
                Tambah
            </a>
        </div>        

        <div class="p-3 mt-5 shadow-lg rounded-lg">
            <div class="overflow-y-auto">
                <table class="w-full p-3 bg-white text-center text-graydark">
                    <thead class="bg-gray text-black">
                        <tr>
                            <th class="px-6 py-3 text-sm leading-4 font-medium tracking-wider">No</th>
                            <th class="px-6 py-3 text-sm leading-4 font-medium tracking-wider">Nama</th>
                            <th class="px-6 py-3 text-sm leading-4 font-medium tracking-wider">Jabatan</th>
                            <th class="px-6 py-3 text-sm leading-4 font-medium tracking-wider">Jenis Kelamin</th>
                            <th class="px-6 py-3 text-sm leading-4 font-medium tracking-wider">Telepon</th>
                            <th class="px-6 py-3 text-sm leading-4 font-medium tracking-wider">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($karyawans as $index => $karyawan)
                            <tr>
                                <td class="px-6 py-4 text-sm">{{ $index + 1 }}</td>
                                <td class="px-6 py-4 text-sm">{{ $karyawan->nama_lengkap }}</td>
                                <td class="px-6 py-4 text-sm">{{ $karyawan->jabatan }}</td>
                                <td class="px-6 py-4 text-sm">{{ $karyawan->jenis_kelamin }}</td>
                                <td class="px-6 py-4 text-sm">{{ $karyawan->no_hp }}</td>
                                <td class="px-6 py-4 text-sm">
                                    <div class="flex justify-center items-center space-x-2">
                                        <a href="{{ route('show', $karyawan->id) }}"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#2D3250" viewBox="0 0 256 256"><path d="M128,56C48,56,16,128,16,128s32,72,112,72,112-72,112-72S208,56,128,56Zm0,112a40,40,0,1,1,40-40A40,40,0,0,1,128,168Z" opacity="0.2"></path><path d="M247.31,124.76c-.35-.79-8.82-19.58-27.65-38.41C194.57,61.26,162.88,48,128,48S61.43,61.26,36.34,86.35C17.51,105.18,9,124,8.69,124.76a8,8,0,0,0,0,6.5c.35.79,8.82,19.57,27.65,38.4C61.43,194.74,93.12,208,128,208s66.57-13.26,91.66-38.34c18.83-18.83,27.3-37.61,27.65-38.4A8,8,0,0,0,247.31,124.76ZM128,192c-30.78,0-57.67-11.19-79.93-33.25A133.47,133.47,0,0,1,25,128,133.33,133.33,0,0,1,48.07,97.25C70.33,75.19,97.22,64,128,64s57.67,11.19,79.93,33.25A133.46,133.46,0,0,1,231.05,128C223.84,141.46,192.43,192,128,192Zm0-112a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160Z"></path></svg></a>
                                        <a href="{{ route('edit', $karyawan->id) }}"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#2D3250" viewBox="0 0 256 256"><path d="M221.66,90.34,192,120,136,64l29.66-29.66a8,8,0,0,1,11.31,0L221.66,79A8,8,0,0,1,221.66,90.34Z" opacity="0.2"></path><path d="M227.31,73.37,182.63,28.68a16,16,0,0,0-22.63,0L36.69,152A15.86,15.86,0,0,0,32,163.31V208a16,16,0,0,0,16,16H92.69A15.86,15.86,0,0,0,104,219.31L227.31,96a16,16,0,0,0,0-22.63ZM51.31,160,136,75.31,152.69,92,68,176.68ZM48,179.31,76.69,208H48Zm48,25.38L79.31,188,164,103.31,180.69,120Zm96-96L147.31,64l24-24L216,84.68Z"></path></svg></a>
                                        <form action="{{ route('karyawan.destroy', $karyawan->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data karyawan ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">
                                        <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#2D3250" viewBox="0 0 256 256"><path d="M200,56V208a8,8,0,0,1-8,8H64a8,8,0,0,1-8-8V56Z" opacity="0.2"></path><path d="M216,48H176V40a24,24,0,0,0-24-24H104A24,24,0,0,0,80,40v8H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM96,40a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8v8H96Zm96,168H64V64H192ZM112,104v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm48,0v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Z"></path></svg></a>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" style="text-align: center;" class="p-3">Data tidak ditemukan</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>