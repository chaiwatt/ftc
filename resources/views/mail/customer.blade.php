<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notification</title>
</head>
<body>
    <h1>{{ $mailData['title'] }}</h1>
    <p>{{ $mailData['message'] }}</p>
    <div>
        <span class="text-sm text-grey-m2 align-middle">ลูกค้า:</span>
        <span class="text-600 text-110 text-blue align-middle">ชัยวัฒน์ ทวีจันทร์</span>
    </div>
    <hr>
    <div class="text-grey-m2">
        <div>
            ที่อยู่: 105 หมู่ 8 ต.เหมืองง่า อ.เมือง จ.ลำพูน 51000
        </div>
        <div>
            อีเมล: joerocknpc@gmail.com
        </div>
        <div><b>088-2514838</b></div>
        <hr>
        <table>
            <th>
                <tr>
                    <td>รายการ</td>
                    <td>จำนวน</td>
                    <td>ราคา</td>
                </tr>
            </th>
            <tbody>
                <tr>
                    <td>อบรมคอร์ส Full-Stack developper</td>
                    <td>2</td>
                    <td>3000</td>
                </tr>
                <tr>
                    <td>โดเมน</td>
                    <td>1</td>
                    <td>0</td>
                </tr>
            </tbody>
        </table>
    </div>
    
    {{-- <p>รายการสั่งซื้อของคุณสำเร็จแล้ว</p>
    เรียนคุณ{{ $transaction->name }} {{ $transaction->lastname }}
    รายการสั่งซื้อของคุณเสร็จสมบูรญ์แล้วค่ะ  --}}
     
</body>
</html>

