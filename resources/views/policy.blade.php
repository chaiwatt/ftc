@extends('layouts.landing')
@section('content')
<section class="section-image section-full-width light align-center " style="background-image:url({{asset('assets/images/bg.svg')}}); margin-bottom:0px">
    <div class="container" style="margin:0;padding-bottom:20px">       
        <h2 data-anima="fade-in" data-time="1000">
            นโยบายของธุรกิจ
        </h2>
    </div>
</section>


<section class="section-base section-color ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>นโยบายของธุรกิจ</h3>
                <hr class="space-sm">
                <ul class="accordion-list">
                    <li class="">
                        <a href="#">เงื่อนไขและข้อตกลงในการใช้บริการ</a>
                        <div class="content" style="display: none;">
                            <p style="font-weight: 300">
                              cccccccc  Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore et dolore magna aliqua.
                                Utenim ad minim veniam quis nostrud exercitation ullamco laboris.
                            </p>
                        </div>
                    </li>
                    <li class="">
                        <a href="#">นโยบายความเป็นส่วนตัว</a>
                        <div class="content" style="display: none;">
                            <p style="font-weight: 300">
                                Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore et dolore magna aliqua.
                                Utenim ad minim veniam quis nostrud exercitation ullamco laboris.
                            </p>
                        </div>
                    </li>
                    <li  class="">
                        <a id="#dataprotection" href="#">นโยบายคุ้มครองข้อมูล</a>
                        <div class="content" style="display: none;">
                            <p style="font-weight: 300">
                                Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore et dolore magna aliqua.
                                Utenim ad minim veniam quis nostrud exercitation ullamco laboris.
                            </p>
                        </div>
                    </li>
                    <li class="">
                        <a href="#">นโยบายการคืนเงิน</a>
                        <div class="content" style="display: none;">
                            <p style="font-weight: 300">
                                Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore et dolore magna aliqua.
                                Utenim ad minim veniam quis nostrud exercitation ullamco laboris.
                            </p>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</section>

@endsection