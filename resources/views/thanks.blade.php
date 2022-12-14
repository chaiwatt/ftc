@extends('layouts.landing')
@section('content')
<section class="section-image section-full-width light align-center " style="background-image:url({{asset('assets/images/bg.svg')}}); margin-bottom:0px">
    <div class="container" style="margin:0;padding-bottom:20px">       
        <h2 data-anima="fade-in" data-time="1000">
            ข้อมูลและรายละเอียดการสั่งซื้อ
        </h2>
    </div>
</section>


<section class="section-base section-color">
    <div class="container">
        <ul class="text-list text-list-side boxed-area paiddetails">
            <li>
                <h3>ชื่อ-สกุล</h3>
                <p style="font-weight: 300">
                    {{$transaction->name}}  {{$transaction->lastname}}
                </p>
            </li>
            <li>
                <h3>อีเมล</h3>
                <p style="font-weight: 300">
                    {{$transaction->email}}
                </p>
            </li>
            <li>
                <h3>โทรศัพท์</h3>
                <p style="font-weight: 300">
                    {{$transaction->phone}}
                </p>
            </li>
            <li>
                <h3>ที่อยู่</h3>
                <p style="font-weight: 300">
                    {{$transaction->address}}
                </p>
            </li>
            <li>
                <h3>บริษัท</h3>
                <p style="font-weight: 300">
                    {{$transaction->company}}
                </p>
            </li>
            <li>
                <h3>วันที่เรียน</h3>
                <p style="font-weight: 300">
                    {{$transaction->trainingdate}}
                </p>
            </li>
            <li>
                <h3>ยอดชำระ</h3>
                <p style="font-weight: 300">
                    {{$transaction->amount}} บาท
                </p>
            </li>
            <li>
                <h3>วันที่ชำระ</h3>
                <p style="font-weight: 300">
                    {{$transaction->paidtime}} น.
                </p>
            </li>
        </ul>
    </div>
</section>
@endsection