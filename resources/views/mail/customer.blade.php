
@component('mail::message')



@if ($package['sourceinfo']['status'] == 'pending')
        {{$package['title']}}
    @elseif($package['sourceinfo']['status'] == 'successful')
        <b>รายละเอียดการสั่งซื้อ</b><br>
@endif

ลูกค้า: คุณ{{$package['sourceinfo']['name']}} {{$package['sourceinfo']['lastname']}}<br>
บริษัท: {{$package['sourceinfo']['company']}}<br>
ที่อยู่: {{$package['sourceinfo']['address']}}<br>
อีเมล: {{$package['sourceinfo']['email']}}<br>
โทรศัพท์: {{$package['sourceinfo']['phone']}}<br>
สถานะ: {{$package['sourceinfo']['status']}}<br>

@component('mail::table')
| รายการ       | จำนวน         | ราคา  |
| ------------- |:-------------:| --------:|
| คอร์สเรียนออนไซต์ Full-Stack developper     | {{$package['sourceinfo']['participant']}}      | {{$package['sourceinfo']['amount']}}     |
| โดเมน (ฟรี)    | 1 | 0      |
{{-- | โดเมน (ฟรี)    | 1 | 0      | --}}

<table>
    <thead>
        <tr>
            <th style="width: 60%">รายการ</th>
            <th style="width: 20%">จำนวน</th>
            <th style="width: 20%">ราคา</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>คอร์สเรียนออนไซต์ Full-Stack developper</td>
            <td style="text-align:right">{{$package['sourceinfo']['participant']}}</td>
            <td style="text-align:right">{{$package['sourceinfo']['amount']}}</td>
        </tr>
        <tr>
            <td>โดเมน (ฟรี)</td>
            <td style="text-align:right">1</td>
            <td style="text-align:right">0</td>
        </tr>
        <tr>
            <td style="width:500px"></td>
            <td style="width:200px"></td>
            <td style="width:200px"></td>
        </tr>
        <tr>
            <td style="width:500px;text-align:right;padding-right:30px" colspan="2">รวม</td>
            <td style="width:200px;text-align:right">{{number_format(($package['sourceinfo']['amount']-$package['sourceinfo']['discount'])*0.93, 2)}}</td>
        </tr>
        <tr>
            <td style="width:500px;text-align:right;padding-right:30px" colspan="2">ภาษี 7%</td>
            <td style="width:200px;text-align:right">{{number_format(($package['sourceinfo']['amount']-$package['sourceinfo']['discount'])*0.07, 2)}}</td>
        </tr>
        <tr>
            <td style="width:500px;text-align:right;padding-right:30px" colspan="2">ส่วนลด</td>
            <td style="width:200px;text-align:right">{{number_format($package['sourceinfo']['discount'], 2)}}</td>
        </tr>
        <tr>
            <td style="width:500px;text-align:right;padding-right:30px" colspan="2"><b>รวมทั้งสิ้น</b></td>
            <td style="width:200px;text-align:right">{{number_format($package['sourceinfo']['amount']-$package['sourceinfo']['discount'], 2)}}</td>
        </tr>
    </tbody>
</table>

{{-- 
<tr>
    <td style="width:500px;text-align:right;padding-right:30px" colspan="2">รวม</td>
    <td style="width:200px">{{number_format(($package['sourceinfo']['amount']-$package['sourceinfo']['discount'])*0.93, 2)}}</td>
</tr>
<tr>
    <td style="width:500px;text-align:right;padding-right:30px" colspan="2">ภาษี 7%</td>
    <td style="width:200px">{{number_format(($package['sourceinfo']['amount']-$package['sourceinfo']['discount'])*0.07, 2)}}</td>
</tr>
<tr>
    <td style="width:500px;text-align:right;padding-right:30px" colspan="2">ส่วนลด</td>
    <td style="width:200px">{{number_format($package['sourceinfo']['discount'], 2)}}</td>
</tr>
<tr>
    <td style="width:500px;text-align:right;padding-right:30px" colspan="2"><b>รวมทั้งสิ้น</b></td>
    <td style="width:200px">{{number_format($package['sourceinfo']['amount']-$package['sourceinfo']['discount'], 2)}}</td>
</tr> --}}

@endcomponent

<br><b>รายละเอียดการอบรม</b><br>
วันที่: {{ $package['sourceinfo']['trainingdate']}}<br>
เวลา: 08:30-16:00 น.<br>

Thanks,
Full-Stack Training Class
@endcomponent