<footer class="w-11/12 m-auto text-center pb-3">
    <hr>

    <nav class="text-center block">
        <ul class="w-full mx-auto my-2 justify-center md:inline-flex md:my-1">
            <li><a href="https://maps.app.goo.gl/qp5u4bQz2zsERex3A" target="_blank">Via Volta
                    40, 22100 Como</a></li>
            <li>Tel. <a href="tel:031264110">+39 031-26.41.10</a></li>
            <li>Fax. +39 031-26.02.07</li>
        </ul>

        <ul class="w-full mx-auto my-2 justify-center md:inline-flex md:my-1">
            <li>PEC <a href="mailto:{{ env('PEC_BOCCHIETTI') }}">{{ env('PEC_BOCCHIETTI') }}</a></li>
            <li><a href="mailto:{{ env('EMAIL_BOCCHIETTI') }}">{{ env('EMAIL_BOCCHIETTI') }}</a></li>
        </ul>

        <ul class="w-full mx-auto my-2 justify-center md:inline-flex md:my-1">
            <li><a href="{{ route('warnings') }}">Avvertenze</a></li>
            <li><a href="mailto:{{ env('EMAIL_MASTER') }}">Webmaster</a></li>
        </ul>
    </nav>

</footer>
