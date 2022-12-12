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
    <p>{{ $mailData['name'] }}</p> 
    {{-- <hr>
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
        <div>โทรศัพท์: 088-2514838</div>
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
                    <td style="width:500px">อบรมคอร์ส Full-Stack developper</td>
                    <td style="width:200px">2</td>
                    <td style="width:200px">3000</td>
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
                    <td style="width:200px">1</td>
                </tr>
                <tr>
                    <td style="width:500px;text-align:right;padding-right:30px" colspan="2">ภาษี 7%</td>
                    <td style="width:200px">1</td>
                </tr>
                <tr>
                    <td style="width:500px;text-align:right;padding-right:30px" colspan="2">ส่วนลด</td>
                    <td style="width:200px">1</td>
                </tr>
                <tr>
                    <td style="width:500px;text-align:right;padding-right:30px" colspan="2"><b>รวมทั้งสิ้น</b></td>
                    <td style="width:200px">1000</td>
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

