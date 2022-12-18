
@component('mail::message')

{{$package['title']}}

@if ($package['sourceinfo']['status'] == 'pending')
        'pending'
    @elseif($package['sourceinfo']['status'] == 'successful')
        'paid'
@endif

The body of your message.
@component('mail::table')
| รายการ       | จำนวน         | ราคา  |
| ------------- |:-------------:| --------:|
| Col 2 is      | Centered      | $10      |
| Col 3 is      | Right-Aligned | $20      |
@endcomponent

Thanks,
Full-Stack Training Class
@endcomponent