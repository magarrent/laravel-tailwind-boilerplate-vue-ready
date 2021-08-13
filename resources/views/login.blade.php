@extends('layout')

@section('meta-title') Home - Laravel Tailwind Boilerplate Vue Ready @endsection

@push('css')

@endpush

@section('content')

<!-- Section 1 -->
<section class="w-full bg-white">
    <div class="grid grid-cols-1 lg:grid-cols-2 h-screen">
        <div class="w-full flex flex-col justify-center px-10 py-16 ml-auto mr-auto bg-white xl:py-32 md:w-3/5 lg:w-4/5 xl:w-4/5">
            <p class="mb-4 text-2xl font-extrabold leading-snug tracking-tight text-left text-gray-900 md:text-4xl">Sign in</p>
            <div class="mt-8 space-y-10">
                <div class="grid grid-cols-2 gap-4">
                    <a class="inline-flex items-center justify-center w-full pt-3 pb-3 text-white bg-blue-500 rounded-md cursor-pointer hover:bg-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="mr-1"><path d="M20.283,10.356h-8.327v3.451h4.792c-0.446,2.193-2.313,3.453-4.792,3.453c-2.923,0-5.279-2.356-5.279-5.28 c0-2.923,2.356-5.279,5.279-5.279c1.259,0,2.397,0.447,3.29,1.178l2.6-2.599c-1.584-1.381-3.615-2.233-5.89-2.233 c-4.954,0-8.934,3.979-8.934,8.934c0,4.955,3.979,8.934,8.934,8.934c4.467,0,8.529-3.249,8.529-8.934 C20.485,11.453,20.404,10.884,20.283,10.356z"></path></svg>
                        <p>Google</p>
                    </a>
                    <div class="inline-flex items-center justify-center w-full pt-3 pb-3 text-white bg-black rounded-md cursor-pointer hover:bg-gray-900">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="mr-1"><path d="M19.665,16.811c-0.287,0.664-0.627,1.275-1.021,1.837c-0.537,0.767-0.978,1.297-1.316,1.592 c-0.525,0.482-1.089,0.73-1.692,0.744c-0.432,0-0.954-0.123-1.562-0.373c-0.61-0.249-1.17-0.371-1.683-0.371  c-0.537,0-1.113,0.122-1.73,0.371c-0.616,0.25-1.114,0.381-1.495,0.393c-0.577,0.025-1.154-0.229-1.729-0.764 c-0.367-0.32-0.826-0.87-1.377-1.648c-0.59-0.829-1.075-1.794-1.455-2.891c-0.407-1.187-0.611-2.335-0.611-3.447  c0-1.273,0.275-2.372,0.826-3.292c0.434-0.74,1.01-1.323,1.73-1.751C7.271,6.782,8.051,6.563,8.89,6.549  c0.46,0,1.063,0.142,1.81,0.422s1.227,0.422,1.436,0.422c0.158,0,0.689-0.167,1.593-0.498c0.853-0.307,1.573-0.434,2.163-0.384  c1.6,0.129,2.801,0.759,3.6,1.895c-1.43,0.867-2.137,2.08-2.123,3.637c0.012,1.213,0.453,2.222,1.317,3.023 c0.392,0.372,0.829,0.659,1.315,0.863C19.895,16.236,19.783,16.529,19.665,16.811L19.665,16.811z M15.998,2.38  c0,0.95-0.348,1.838-1.039,2.659c-0.836,0.976-1.846,1.541-2.941,1.452c-0.014-0.114-0.021-0.234-0.021-0.36  c0-0.913,0.396-1.889,1.103-2.688c0.352-0.404,0.8-0.741,1.343-1.009c0.542-0.264,1.054-0.41,1.536-0.435 C15.992,2.127,15.998,2.254,15.998,2.38L15.998,2.38z"></path></svg>
                        <p>Apple</p>
                    </div>
                </div>
                <div class="flex items-center w-full">
                    <div class="flex-1 h-0 bg-gray-200 border-t border-gray-200"></div>
                    <p class="px-5 text-xs font-semibold tracking-wide text-gray-600 uppercase">or</p>
                    <div class="flex-1 h-0 bg-gray-200 border-t border-gray-200"></div>
                </div>
            </div>
            <form class="mt-5" onsubmit="event.preventDefault();" "="">
                <label class="text-xs mb-0.5 font-medium leading-none text-gray-700">Your Email</label>
                <input type=" email" class="inline-block w-full px-3 py-2 border-2 rounded-md focus:outline-none focus:border-purple-700" placeholder="Ex. johndoe@gmail.com">
                <label class="text-xs mb-0.5 inline-block mt-5 font-medium leading-none text-gray-700">Your Password</label>
                <input type="password" class="inline-block w-full px-3 py-2 border-2 rounded-md focus:outline-none focus:border-purple-700" placeholder="••••••••">
                <input type="submit" class="w-full py-2.5 px-3 mt-5 font-medium text-white bg-purple-700 cursor-pointer hover:bg-purple-600 rounded-md component-selected" placeholder="">
            </form>

            <div class="pt-6 mt-6 border-t border-gray-200">
                <p class="inline text-sm font-medium text-gray-700">Don't have an account?</p>
                <a href="#_" class="inline text-sm font-medium text-purple-700 hover:text-purple-900"> Signup</a>
            </div>
        </div>
        <div class="relative flex flex-col justify-center px-20 py-20 text-purple-700 xl:py-32 md:px-24">

            <div class="absolute inset-0 w-full h-full bg-cover opacity-100" style="background-image:url('https://uploads-ssl.webflow.com/5ec207a448d573153616868a/60e32beb6420a8d3ea4e0dd3_Mesh%2082.jpg')"></div>
            <div class="absolute inset-0 w-full h-full bg-white opacity-70"></div>
            <div class="relative flex items-center justify-start text-xs font-semibold text-purple-500 uppercase tacking-wide">
                Signup today and gain access to:
            </div>

            <div class="relative flex mt-8 space-x-3">
                <svg class="flex-none w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z" clip-rule="evenodd"></path><path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path></svg>
                <div>
                    <p class="text-xl font-medium">Premium Resources</p>
                    <p class="mt-1 text-gray-500">Gain access to some premium tools and resources to help you take your game to the next level.</p>
                </div>
            </div>
            <div class="relative flex mt-8 space-x-3">
                <svg class="flex-none w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"></path></svg>
                <div>
                    <p class="text-xl font-medium">Rad Designs &amp; Layouts</p>
                    <p class="mt-1 text-gray-500">You'll also gain access to our amazing design templates and layouts for you to use in your project.</p>
                </div>
            </div>
            <div class="relative flex mt-8 space-x-3">
                <svg class="flex-none w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2 5a2 2 0 012-2h12a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V5zm3.293 1.293a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 01-1.414-1.414L7.586 10 5.293 7.707a1 1 0 010-1.414zM11 12a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
                <div>
                    <p class="text-xl font-medium">Developer Tools</p>
                    <p class="mt-1 text-gray-500">You will also have access to our developer tools that are designed to save and make you money.</p>
                </div>
            </div>
            <div class="relative flex mt-8 space-x-3">
                <svg class="flex-none w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 3a1 1 0 10-2 0v1a1 1 0 102 0V3zM15.657 5.757a1 1 0 00-1.414-1.414l-.707.707a1 1 0 001.414 1.414l.707-.707zM18 10a1 1 0 01-1 1h-1a1 1 0 110-2h1a1 1 0 011 1zM5.05 6.464A1 1 0 106.464 5.05l-.707-.707a1 1 0 00-1.414 1.414l.707.707zM5 10a1 1 0 01-1 1H3a1 1 0 110-2h1a1 1 0 011 1zM8 16v-1h4v1a2 2 0 11-4 0zM12 14c.015-.34.208-.646.477-.859a4 4 0 10-4.954 0c.27.213.462.519.476.859h4.002z"></path></svg>
                <div>
                    <p class="text-xl font-medium">Help &amp; Support</p>
                    <p class="mt-1 text-gray-500">Gain access to our premium help and support team that can help you on your journey.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('js')
    <script>

    </script>
@endpush
