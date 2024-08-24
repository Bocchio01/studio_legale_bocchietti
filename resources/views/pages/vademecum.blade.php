@php
    use App\Helpers\formatHelper;

@endphp

<x-layout-content :title="'Vademecum aste immobiliari'" :description="'Pagina dei vademecum aste immobiliari redatti dall\'avvocato Claudio Bocchietti'">

    <section>

        <p>
            Di seguito i documenti relativi alle aste:
        </p>

        <x-treeview :data="$vademecumObj" />

        @isset($fileURL)
            <p class="text-center my-7">
                <a href="{{ $fileURL }}" class="bg-app-color rounded-full p-2 text-white hover:text-black"
                    target="_blank">
                    Scarica il file visualizzato
                </a>
            </p>
        @endisset

        @isset($fileID)
            <iframe class="my-5" src="https://drive.google.com/file/d/{{ $fileID }}/preview"></iframe>
        @endisset
    </section>

</x-layout-content>
