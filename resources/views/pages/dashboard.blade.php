<x-app-layout>
    {{-- Logika Header yang Berubah Sesuai Status Login --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @auth
                {{-- Jika pengguna sudah login --}}
                {{ __('Selamat Datang, ' . Auth::user()->name) }}
            @else
                {{-- Jika pengguna belum login --}}
                {{ __('Halaman Utama') }}
            @endauth
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- Pesan yang ditampilkan di konten utama --}}
                    @auth
                        {{ __('Anda berhasil masuk! Ini adalah beranda utama Anda.') }}
                    @else
                        {{ __('Silakan Log in atau Registrasi untuk mengakses fitur lengkap.') }}
                        <div class="mt-4">
                            <a href="{{ route('login') }}" class="text-blue-600 hover:text-blue-800 underline">Log In</a>
                            <span class="mx-2">|</span>
                            <a href="{{ route('register') }}" class="text-blue-600 hover:text-blue-800 underline">Registrasi</a>
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</x-app-layout>