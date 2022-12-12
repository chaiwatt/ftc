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
        <span class="text-600 text-110 text-blue align-middle">คุณ{{$transaction->name}} {{$transaction->lastname}}</span>
    </div>
    <div class="text-grey-m2">
        <div>
            ที่อยู่: {{$transaction->address}}
        </div>
        <div>
            อีเมล: {{$transaction->email}}
        </div>
        <div>โทรศัพท์: {{$transaction->phone}}</div>
        <hr>
        <table>
            <th>
                <tr>
                    <td style="width:400px"><b>รายการ</b></td>
                    <td style="width:150px"><b>จำนวน</b></td>
                    <td style="width:150px"><b>ราคา</b></td>
                </tr>
            </th>
            <tbody>
                <tr>
                    <td style="width:500px">คอร์สเรียนออนไซต์ Full-Stack developper</td>
                    <td style="width:200px">{{$transaction->participant}}</td>
                    <td style="width:200px">{{$transaction->amount}}</td>
                </tr>
                <tr>
                    <td style="width:500px">โดเมน</td>
                    <td style="width:200px">1</td>
                    <td style="width:200px">0</td>
                </tr>
                <tr>
                    <td style="width:500px"></td>
                    <td style="width:200px"></td>
                    <td style="width:200px"></td>
                </tr>
                <tr>
                    <td style="width:500px;text-align:right;padding-right:30px" colspan="2">รวม</td>
                    <td style="width:200px">{{($transaction->amount - $transaction->discount)*0.93}}</td>
                </tr>
                <tr>
                    <td style="width:500px;text-align:right;padding-right:30px" colspan="2">ภาษี 7%</td>
                    <td style="width:200px">{{($transaction->amount - $transaction->discount)*0.07}}</td>
                </tr>
                <tr>
                    <td style="width:500px;text-align:right;padding-right:30px" colspan="2">ส่วนลด</td>
                    <td style="width:200px">{{$transaction->discount}}</td>
                </tr>
                <tr>
                    <td style="width:500px;text-align:right;padding-right:30px" colspan="2"><b>รวมทั้งสิ้น</b></td>
                    <td style="width:200px">{{($transaction->amount - $transaction->discount)}}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <br>
    <h3>รายละเอียดการอบรม</h3>
    <ul>
        <li>วันที่: xxxx</li>
        <li>เวลา: xxxx</li>
    </ul>
    
    {{-- <p>รายการสั่งซื้อของคุณสำเร็จแล้ว</p>
    เรียนคุณ{{ $transaction->name }} {{ $transaction->lastname }}
    รายการสั่งซื้อของคุณเสร็จสมบูรญ์แล้วค่ะ  --}}
     
</body>
</html>

