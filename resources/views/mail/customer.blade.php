@component('mail::message')

<b>รายละเอียดการสั่งซื้อ</b><br>

ลูกค้า: คุณ{{$transaction->name}} {{$transaction->lastname}}<br>
บริษัท: {{$transaction->company}}<br>
ที่อยู่: {{$transaction->address}}<br>
อีเมล: {{$transaction->email}}<br>
โทรศัพท์: {{$transaction->phone}}

@if ($transaction->status == 'pending')
<div style="font-size: 18px;font-weight:600;color:#FB7B09">สถานะ: {{$transaction->status}} </div>
@elseif($transaction->status == 'successful')
<div style="font-size: 18px;font-weight:600;color:#08D11D">สถานะ: {{$transaction->status}} </div>
@endif

@component('mail::table')
<table>
    <thead>
        <tr>
            <th style="width: 60%">รายการ</th>
            <th style="width: 20%">จำนวน</th>
            <th style="width: 20%">ราคา (บาท)</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>คอร์สเรียนออนไซต์ Full-stack developper</td>
            <td style="text-align:center">{{$transaction->participant}}</td>
            <td style="text-align:right">{{number_format($transaction->amount, 2)}}</td>
        </tr>
        <tr>
            <td>โดเมน (ฟรี)</td>
            <td style="text-align:center">{{$transaction->participant}}</td>
            <td style="text-align:right">0.00</td>
        </tr>
        <tr>
            <td style="width:500px"></td>
            <td style="width:200px"></td>
            <td style="width:200px"></td>
        </tr>
        <tr>
            <td style="width:500px;text-align:right;padding-right:30px" colspan="2">รวม</td>
            <td style="width:200px;text-align:right">{{number_format(($transaction->amount-$transaction->discount)*0.93, 2)}}</td>
        </tr>
        <tr>
            <td style="width:500px;text-align:right;padding-right:30px" colspan="2">ภาษี 7%</td>
            <td style="width:200px;text-align:right">{{number_format(($transaction->amount-$transaction->discount)*0.07, 2)}}</td>
        </tr>
        <tr>
            <td style="width:500px;text-align:right;padding-right:30px" colspan="2">ส่วนลด</td>
            <td style="width:200px;text-align:right">{{number_format($transaction->discount, 2)}}</td>
        </tr>
        <tr>
            <td style="width:500px;text-align:right;padding-right:30px" colspan="2"><b>รวมทั้งสิ้น</b></td>
            <td style="width:200px;text-align:right">{{number_format($transaction->amount-$transaction->discount, 2)}}</td>
        </tr>
    </tbody>
</table>

@endcomponent

<br><b>รายละเอียดการอบรม</b><br>
วันที่: {{ $transaction->trainingdate}}<br>
เวลา: 08:30-16:00 น.<br>

ขอขอบพระคุณ,<br>
Full-Stack Training Class


@endcomponent

