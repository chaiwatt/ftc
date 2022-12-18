@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://fullstacktrainingclass.com/assets/images/favicon.png" class="logo" alt="fullstacktrainingclass">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
