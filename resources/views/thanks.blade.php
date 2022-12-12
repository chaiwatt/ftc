@extends('layouts.landing')
@section('content')
<section class="section-image section-full-width light align-center " style="background-image:url({{asset('assets/images/bg.svg')}}); margin-bottom:0px">
    <div class="container" style="margin:0;padding-bottom:20px">       
        <h2 data-anima="fade-in" data-time="1000">
            นโยบายของธุรกิจ
        </h2>
    </div>
</section>


<section id="purchase" class="section-base section-color">
    <div class="container">
        <h2 class="align-center" style="margin-bottom: 15px">ข้อมูลและรายละเอียดการสั่งซื้อ<span class="promotionMessage blink_me"></span></h2>
        <div class="row" data-anima="fade-bottom" data-time="1000">
            <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <p>ชื่อ</p>
                            <input id="name" name="name" placeholder="ชื่อ" type="text" class="input-text" required>
                        </div>
                        <div class="col-lg-6">
                            <p>นามสกุล</p>
                            <input id="lastname" name="lastname" placeholder="นามสกุล" type="text" class="input-text" required>
                        </div>
                        <div class="col-lg-6">
                            <p>อีเมล</p>
                            <input id="email" name="email" placeholder="อีเมล" type="email" class="input-text" required >
                        </div>
                        <div class="col-lg-6">
                            <p>โทรศัพท์</p>
                            <input id="phone" name="phone" placeholder="โทรศัพท์" type="text" class="input-text" required>
                        </div>
                        <div class="col-lg-12">
                            <p>ที่อยู่</p>
                            <textarea id="address" name="address" class="input-textarea" placeholder="ที่อยู่"></textarea>
                        </div>
                        <div class="col-lg-6">
                            <p>จำนวนผู้เข้าเรียน</p>
                            <select class="input-select" name="participant" id="participant" required>
                                <option value="">==เลือกจำนวนผู้เข้าเรียน==</option>
                                <option value="1" selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <p>จำนวนเงิน (บาท)</p>
                            <input id="amount" name="amount" placeholder="" type="text" class="input-text" value="15000" readonly required>
                        </div>
                        <div class="col-lg-6">
                            <p>วันที่เรียน เดือนธันวาคม 2565</p>
                            <select class="input-select" name="trainingdate" id="trainingdate" required>
                                <option value="" selected="">==เลือกวันที่เข้าเรียน==</option>
                                <option value="1">1 ธ.ค.-2 ธ.ค.</option>
                                <option value="2">3 ธ.ค.-4 ธ.ค.</option>
                                <option value="3">5 ธ.ค.-6 ธ.ค.</option>
                                <option value="4">7 ธ.ค.-8 ธ.ค.</option>
                                <option value="5">9 ธ.ค.-10 ธ.ค.</option>
                                <option value="6">12 ธ.ค.-13 ธ.ค.</option>
                                <option value="7">14 ธ.ค.-15 ธ.ค.</option>
                                <option value="8">16 ธ.ค.-17 ธ.ค.</option>
                                <option value="9">19 ธ.ค.-20 ธ.ค.</option>
                                <option value="10">21 ธ.ค.-22 ธ.ค.</option>
                                <option value="11">23 ธ.ค.-24 ธ.ค.</option>
                                <option value="12">26 ธ.ค.-27 ธ.ค.</option>
                                <option value="13">28 ธ.ค.-29 ธ.ค.</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <p>บริษัท (ถ้ามี)</p>
                            <input id="company" name="company" placeholder="บริษัท" type="text" class="input-text" >
                        </div>
                        <div class="col-lg-6">
                            <p >เลขประจำตัวผู้เสียภาษี (ถ้ามี)</p>
                            <input id="vatnumber" name="vatnumber" placeholder="เลขที่ผู้เสียภาษี" type="text" class="input-text" >
                        </div>
                        <div class="col-lg-6">
                            <p>โค้ดส่วนลด (ถ้ามี)</p>
                            <input id="promocode" name="promocode" placeholder="โค้ดส่วนลด" type="text" class="input-text" >
                        </div>
                    </div>
            </div>
            
        </div>
    </div>

</section>

@endsection