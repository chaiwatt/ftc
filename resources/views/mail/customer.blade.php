@component('mail::message')

{{-- @if ($package['sourceinfo']['status'] == 'pending')
        <b>{{$package['title']}}</b><br>
    @elseif($package['sourceinfo']['status'] == 'successful')
        <b>รายละเอียดการสั่งซื้อ</b><br>
@endif --}}

{{$package['payload']['data']['status']}}

ขอขอบพระคุณ,<br>
Full-Stack Training Class


@endcomponent

