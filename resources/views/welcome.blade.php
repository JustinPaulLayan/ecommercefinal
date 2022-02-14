@extends('vue-layouts.app')

@section('content')
    <div class="container mx-auto p-5">
        <div class="md:flex md:flex-row mt-20">
            <div class="md:w-2/5 flex flex-col justify-center items-center">
                <h2 class="font-serif text-5xl text-gray-600 mb-4 text-center md:self-start md:text-left">Ming Computer Solutions</h2>
                <p class="uppercase text-gray-600 tracking-wide text-center md:self-start md:text-left">Panabo City Branch.</p>
                <p class="uppercase text-gray-600 tracking-wide text-center md:self-start md:text-left">Browse and Shop our products in your fingertips.</p>
                <a href="{{ route('products') }}" class="bg-gradient-to-r from-orange-600 to-pink-500 rounded-full py-4 px-8 text-gray-50 uppercase text-xl md:self-start my-5">Shop Now</a>
            </div>
            <div class="md:w-3/5">
                <img src="{{ asset('img/hero-img.svg') }}" class="w-full" />
            </div>
        </div>
    </div>
    <featured-items></featured-items>
    <new-arrival-items></new-arrival-items>
@endsection