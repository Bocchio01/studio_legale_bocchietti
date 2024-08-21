@php
    use App\Helpers\formatHelper;
@endphp

<x-layout-content :title="'Home'" :description="'Home page dello Studio Legale Bocchietti'">

    <section>

        <p>
            Lo {{ formatHelper::rendersStudioLegaleBocchietti() }} opera in Como ed esercita nei settori del
            diritto civile e del
            diritto penale, destinando il proprio patrimonio di esperienza e di conoscenza ad una migliore e
            sempre più puntuale risposta alle esigenze del cliente.
        </p>
        <p>
            É formato dall'avvocato Claudio Bocchietti Abilitato alle Giurisdizioni Superiori, dall'avvocato
            Gloria Bulanti oltre al personale di Segreteria.
        </p>

    </section>

    <br>

    <x-references />

</x-layout-content>
