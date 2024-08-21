@php
    use App\Helpers\formatHelper;
@endphp

<x-layout-content :title="'Curricula'" :description="'Curricula degli avvocati e dei collaboratori presenti all\'interno dello Studio Legale Bocchietti'">

    <section>

        <p>
            Di seguito i curricula degli avvocati presenti nello {{ formatHelper::rendersStudioLegaleBocchietti() }}
            (cliccare sui nomi per visualizzare i relativi file):
        </p>

        <x-treefolder :items="$fileNameList" />

        @isset($fileID)
            <iframe src="https://drive.google.com/file/d/{{ $fileID }}/preview"></iframe>
        @endisset

    </section>
</x-layout-content>
