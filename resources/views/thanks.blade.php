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
        <div class="cnt-box cnt-call">
            <div class="caption">
                <ul class="text-list text-list-side boxed-area">
                    <li>
                        <h3>Software Engineer</h3>
                        <p>
                            Placeat orci commodo, amet quo rem architecto possimus, accumsa.
                        </p>
                        <div>Dublin, Ireland</div>
                    </li>
                    <li>
                        <h3>Community Manager</h3>
                        <p>
                            Placeat orci commodo, amet quo exercitation ullamco labori rem architecto possimus, accumsa.
                        </p>
                        <div>Dublin, Ireland</div>
                    </li>
                    <li>
                        <h3>Sales supervisor</h3>
                        <p>
                            Placeat orci commodo, amet quo rem architecto possimus exercitation ullamco accumsa.
                        </p>
                        <div>Dublin, Ireland</div>
                    </li>
                    <li>
                        <h3>React Developer</h3>
                        <p>
                            Placeat orci commodo, amet quo rem architecto possimus, accumsa.
                        </p>
                        <div>Dublin, Ireland</div>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</section>
@endsection