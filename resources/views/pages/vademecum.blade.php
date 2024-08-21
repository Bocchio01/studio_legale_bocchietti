@php
    use App\Helpers\formatHelper;

@endphp

<x-layout-content :title="'Vademecum aste immobiliari'" :description="'Pagina dei vademecum aste immobiliari redatti dall\'avvocato Claudio Bocchietti'">

    <section>

        <p>
            Di seguito i documenti relativi alle aste:
        </p>

        <x-treefolder :items="$fileNameList" />

        <iframe id="iframe_visualizer"
            src="https://drive.google.com/file/d/11EGxOU9MwVln8nGce_iBQahuEkldIkPf/preview"></iframe>

    </section>

</x-layout-content>
