@extends('layouts.app')

@section('content')
  <header class="py-12 text-center">
    <h1 class="text-4xl md:text-6xl font-bold text-gradient">PharmaCare</h1>
    <p class="mt-4 text-gray-600">Premium Pharmacy Landing — ported to Blade scaffold</p>
  </header>

  <main>
    <section class="py-8">
      <div class="grid md:grid-cols-2 gap-8 items-center">
        <div>
          <h2 class="text-2xl font-semibold">Order medicines online</h2>
          <p class="mt-3 text-gray-600">Fast delivery, trusted pharmacists, and easy reorders.</p>
          <a class="inline-block mt-6 px-6 py-3 bg-emerald-500 text-white rounded-md" href="#">Get Started</a>
        </div>
        <div>
          <img src="/images/hero-placeholder.png" alt="Hero" class="w-full rounded-lg shadow-md" />
        </div>
      </div>
    </section>
  </main>

  <footer class="py-8 text-center text-sm text-gray-500">© PharmaCare</footer>

@endsection
