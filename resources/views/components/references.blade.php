@php
    use App\Helpers\formatHelper;
@endphp

<address>
    <p>{{ formatHelper::rendersStudioLegaleBocchietti() }}</p>

    <br>

    <p>
        <a href="https://maps.app.goo.gl/qp5u4bQz2zsERex3A" target="_blank">
            Via Volta 40, 22100 Como
        </a>
    </p>
    <p>Tel. <a href="tel:031264110">+39 031-26.41.10</a></p>
    <p>Fax. +39 031-26.02.07</p>

    <br>

    <p>PEC <a href="mailto:{{ env('PEC_BOCCHIETTI') }}">{{ env('PEC_BOCCHIETTI') }}</a></p>
    <p><a href="mailto:{{ env('EMAIL_BOCCHIETTI') }}">{{ env('EMAIL_BOCCHIETTI') }}</a></p>
</address>
