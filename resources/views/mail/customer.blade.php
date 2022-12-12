<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notification</title>
</head>
<body>
    {{-- <h1>{{ $mailData['title'] }}</h1>
    <p>{{ $mailData['message'] }}</p> --}}
    {{-- <hr> --}}
    <div>
        <span class="text-sm text-grey-m2 align-middle">ลูกค้า:</span>
        <span class="text-600 text-110 text-blue align-middle">ชัยวัฒน์ ทวีจันทร์</span>
    </div>
    <div class="text-grey-m2">
        <div>
            ที่อยู่: 105 หมู่ 8 ต.เหมืองง่า อ.เมือง จ.ลำพูน 51000
        </div>
        <div>
            อีเมล: joerocknpc@gmail.com
        </div>
        <div>โทรศัพท์<b>088-2514838</b></div>
        <hr>
        <table>
            <th>
                <tr>
                    <td style="width:500px"><b>รายการ</b></td>
                    <td style="width:200px"><b>จำนวน</b></td>
                    <td style="width:200px"><b>ราคา</b></td>
                </tr>
            </th>
            <tbody>
                <tr>
                    <td style="width:500px">อบรมคอร์ส Full-Stack developper</td>
                    <td style="width:200px">2</td>
                    <td style="width:200px">3000</td>
                </tr>
                <tr>
                    <td style="width:500px">โดเมน</td>
                    <td style="width:200px">1</td>
                    <td style="width:200px">0</td>
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

