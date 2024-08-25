@php
    use App\Helpers\formatHelper;
@endphp

<x-layout-content :title="'Curricula'" :description="'Curricula degli avvocati e dei collaboratori presenti all\'interno dello Studio Legale Bocchietti'">

    <section>

        <p>
            Di seguito i curricula degli avvocati presenti nello {{ formatHelper::rendersStudioLegaleBocchietti() }}:
        </p>

        <x-treeview :data="$curriculaObj" />

        @isset($fileURL)
            <p class="text-center my-7">
                <a href="{{ $fileURL }}" class="bg-sky-900 rounded-full py-2 px-4 text-white" target="_blank">
                    Scarica il file visualizzato
                </a>
            </p>
        @endisset

        @isset($fileID)
            <iframe class="my-5" src="https://drive.google.com/file/d/{{ $fileID }}/preview"></iframe>
        @endisset

    </section>
</x-layout-content>
