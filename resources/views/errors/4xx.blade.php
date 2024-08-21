<x-layout-content :title="'Errore {{ $exception->getStatusCode() }}'" :description="'Errore'">

    <section>

        <p>
            Si è verificato un errore (codice {{ $exception->getStatusCode() }}).
        </p>

    </section>

</x-layout-content>
