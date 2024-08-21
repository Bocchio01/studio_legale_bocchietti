@props(['title', 'description'])

<!DOCTYPE html>
<html lang="it">

<x-partials.head :title="$title" :description="$description" />

<body class="bg-sky-900 text-blue-950 font-body text-justify text-xs">

    <div
        class="w-full max-w-screen-md m-auto bg-indigo-200 rounded-xl shadow-[0px_0px_20px_15px_rgba(0,0,0,0.6)] md:my-4">

        <x-partials.header :subtitle="$title" />

        <main class="w-10/12 mx-auto my-4 ">
            {{ $slot }}
        </main>

        <x-partials.footer />

    </div>

</body>

</html>
