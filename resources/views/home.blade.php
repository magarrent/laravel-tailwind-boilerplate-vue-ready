@extends('layout')

@section('meta-title') Home - Laravel Tailwind Boilerplate Vue Ready @endsection

@push('css')

@endpush

@section('content')
    <div class="relative max-w-4xl h-screen mx-auto justify-center mb-12 flex flex-col">
        <h1 class="pb-2 text-4xl font-extrabold text-left text-transparent sm:text-5xl  md:text-7xl md:text-center bg-clip-text bg-gradient-to-r from-blue-500 to-indigo-600">
            Laravel Tailwind Boilerplate Vue Ready
        </h1>
        <a href="/login" class="w-1/3 mx-auto mt-4 box-border relative z-30 inline-flex items-center justify-center px-8 py-3 overflow-hidden font-bold text-white transition-all duration-300 bg-indigo-600 rounded-md cursor-pointer group ring-offset-2 ring-1 ring-indigo-300 ring-offset-indigo-200 hover:ring-offset-indigo-500 ease focus:outline-none">
            <span class="absolute bottom-0 right-0 w-8 h-20 -mb-8 -mr-5 transition-all duration-300 ease-out transform rotate-45 translate-x-1 bg-white opacity-10 group-hover:translate-x-0"></span>
            <span class="absolute top-0 left-0 w-20 h-8 -mt-1 -ml-12 transition-all duration-300 ease-out transform -rotate-45 -translate-x-1 bg-white opacity-10 group-hover:translate-x-0"></span>
            <span class="relative z-20 flex items-center text-sm">
                <svg class="relative w-5 h-5 mr-2 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                Login
            </span>
        </a>
    </div>
@endsection

@push('js')
    <script>

    </script>
@endpush
