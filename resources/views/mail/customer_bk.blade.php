<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notification</title>
</head>
<body>
    <div>
        <span class="text-sm text-grey-m2 align-middle">ลูกค้า:</span>
        <span class="text-600 text-110 text-blue align-middle">คุณ{{$mailData['name']}} {{$mailData['lastname']}}</span>
    </div>
    <div class="text-grey-m2">
        <div>
            บริษัท: {{$mailData['company']}}
        </div>
        <div>
            ที่อยู่: {{$mailData['address']}}
        </div>
        <div>
            อีเมล: {{$mailData['email']}}
        </div>
        <div>โทรศัพท์: {{$mailData['phone']}}</div>
        @if ($mailData['status'] == 'pending')
                <div style="font-size: 18px;font-weight:600;color:#FB7B09">สถานะ: {{$mailData['status']}} </div>
            @elseif($mailData['status'] == 'successful')
                <div style="font-size: 18px;font-weight:600;color:#08D11D">สถานะ: {{$mailData['status']}} </div>
        @endif
        <hr>
        <table>
            <th>
                <tr>
                    <td style="width:400px"><b>รายการ</b></td>
                    <td style="width:150px"><b>จำนวน</b></td>
                    <td style="width:150px"><b>ราคา (บาท)</b></td>
                </tr>
            </th>
            <tbody>
                <tr>
                    <td style="width:500px">คอร์สเรียนออนไซต์ Full-Stack developper</td>
                    <td style="width:200px">{{$mailData['participant']}}</td>
                    <td style="width:200px">{{number_format($mailData['amount'], 2)}}</td>
                </tr>
                <tr>
                    <td style="width:500px">โดเมน (ฟรี)</td>
                    <td style="width:200px">1</td>
                    <td style="width:200px">0.00</td>
                </tr>
                <tr>
                    <td style="width:500px"></td>
                    <td style="width:200px"></td>
                    <td style="width:200px"></td>
                </tr>
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
                </tr>
            </tbody>
        </table>
    </div>
    <br>
    <h3>รายละเอียดการอบรม</h3>
    <ul>
        <li>วันที่: {{ $mailData['trainingdate']}}</li>
        <li>เวลา: 08:30-16:00 น.</li>
    </ul>
    
    {{-- <p>รายการสั่งซื้อของคุณสำเร็จแล้ว</p>
    เรียนคุณ{{ $mailData['name ']}} {{ $mailData['lastname ']}}
    รายการสั่งซื้อของคุณเสร็จสมบูรญ์แล้วค่ะ  --}}
     
</body>
</html>

