
@component('mail::message')



@if ($package['sourceinfo']['status'] == 'pending')
        {{$package['title']}}
    @elseif($package['sourceinfo']['status'] == 'successful')
        รายละเอียดการสั่งซื้อ
@endif

ลูกค้า: คุณ{{$package['sourceinfo']['name']}} {{$package['sourceinfo']['lastname']}}
บริษัท: {{$package['sourceinfo']['company']}}
ที่อยู่: {{$package['sourceinfo']['address']}}
อีเมล: {{$package['sourceinfo']['email']}}
โทรศัพท์: {{$package['sourceinfo']['phone']}}
สถานะ: {{$package['sourceinfo']['status']}}

@component('mail::table')
| รายการ       | จำนวน         | ราคา  |
| ------------- |:-------------:| --------:|
| คอร์สเรียนออนไซต์ Full-Stack developper     | {{$package['sourceinfo']['participant']}}      | {{$package['sourceinfo']['amount']}}     |
| โดเมน (ฟรี)    | 1 | 0      |
{{-- | โดเมน (ฟรี)    | 1 | 0      | --}}


| One    | Two | Three | Four    | Five  | Six 
| -
| Span <td colspan=3>triple  <td colspan=2>double

{{-- 
<tr>
    <td style="width:500px;text-align:right;padding-right:30px" colspan="2">รวม</td>
    <td style="width:200px">{{number_format(($mailData['amount']-$mailData['discount'])*0.93, 2)}}</td>
</tr>
<tr>
    <td style="width:500px;text-align:right;padding-right:30px" colspan="2">ภาษี 7%</td>
    <td style="width:200px">{{number_format(($mailData['amount']-$mailData['discount'])*0.07, 2)}}</td>
</tr>
<tr>
    <td style="width:500px;text-align:right;padding-right:30px" colspan="2">ส่วนลด</td>
    <td style="width:200px">{{number_format($mailData['discount'], 2)}}</td>
</tr>
<tr>
    <td style="width:500px;text-align:right;padding-right:30px" colspan="2"><b>รวมทั้งสิ้น</b></td>
    <td style="width:200px">{{number_format($mailData['amount']-$mailData['discount'], 2)}}</td>
</tr> --}}


<b>รายละเอียดการอบรม<b>
วันที่: {{ $package['sourceinfo']['trainingdate']}}</li>
เวลา: 08:30-16:00 น.

@endcomponent

Thanks,
Full-Stack Training Class
@endcomponent