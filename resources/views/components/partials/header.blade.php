@props(['subtitle' => null])

<header class="w-11/12 pt-2 m-auto text-center">

    <h1 class="mt-3 mb-6">
        <a href="{{ route('home') }}"
            class="uppercase italic text-4xl font-bold text-white leading-snug no-underline hover:text-white md:text-5xl md:leading-snug"
            style="text-shadow: 5px 5px 5px rgba(0, 0, 0, 0.7);">
            Studio Legale Bocchietti
        </a>
    </h1>

    <nav class="my-4">
        <ul class="w-full inline-flex flex-wrap justify-around font-bold gap-y-2 gap-x-4 text-sm md:text-base">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('curricula') }}">Curricula</a></li>
            <li><a href="{{ route('activities') }}">Attività</a></li>
            <li><a href="{{ route('vademecum') }}">Vademecum aste immobiliari</a></li>
            <li><a href="{{ route('contacts') }}">Contatti</a></li>
        </ul>

    </nav>

    <hr>

    @isset($subtitle)
        <h2 class="text-2xl font-bold my-4">{{ $subtitle }}</h2>
    @endisset

    <img src="{{ asset('img/feather_pen.jpg') }}" alt="Penna piumata" class="w-4/5 max-w-sm rounded-xl my-4 mx-auto">

</header>
