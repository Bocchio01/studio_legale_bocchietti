@php
    use App\Helpers\formatHelper;
@endphp

<x-layout-content :title="'Contatti'" :description="'Pagina dei contatti dello Studio Legale Bocchietti'">

    <section>

        <p>
            Di seguito i recapiti degli avvocati presenti nello {{ formatHelper::rendersStudioLegaleBocchietti() }}:
        </p>

        <ul class="list-disc list-inside marker:text-app-color">
            <li class="my-2"><a href="mailto:{{ env('EMAIL_BOCCHIETTI') }}">Avv. Claudio Bocchietti</a></li>
            <li class="my-2"><a href="mailto:{{ env('EMAIL_BULANTI') }}">Avv. Gloria Bulanti</a></li>
        </ul>

    </section>

</x-layout-content>
