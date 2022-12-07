@extends('layouts.landing')
@section('content')
<section class="section-image section-full-width light section-bottom-layer-2 align-center section-ovarlay-image bannerTitle" style="background-image:url({{asset('assets/images/bg.svg')}})">
    <div class="container smoothScroll">
        <hr class="space-lg in-visible-sm" />
        
        <h1 data-anima="fade-in" data-time="1000">
            คุณกำลังมองหาคอร์ส Full-Stack<br class="hidden-md" /> ที่เรียนแล้วสามารถ <span> รับงานได้จริง </span>  อยู่ใช่ไหม?.
        </h1>
        <p class="width-900" data-anima="fade-in" data-time="1000">
            ที่นี่คุณจะได้เรียน Font-end และ Back-end (Laravel9), ติดตั้งเว็บเซิร์ฟเวอร์(CentOS8 &PHP8), Deploy แอพลิเคชั่นเข้าสู่คลาวด์, คอนฟิก SSL โดเมน และการติดตั้งเมลเซิร์ฟเวอร์(Postfix, Dovecot) เรียนจบพร้อมรับงานได้เลย ตั้งแต่หลักแสนถึงหลักล้าน
        </p>

        <a href="#purchase" class="btn btn-sm btn-circle shadow-1 full-width-sm btnBuycourse" data-anima="fade-in" data-time="1000" style="z-index: 1000">ซื้อคอร์สเรียน</a><span class="space hidden-sm"></span>
        <a href="#" class="btn btn-sm btn-circle shadow-1 full-width-sm btnDownload" data-anima="fade-in" data-time="1000" style="z-index: 1001">ตารางเรียน</a><span class="space hidden-sm"></span>
        
        <hr class="space-sm visible-sm" />
        <hr class="space" />
        <img src="{{asset('assets/images/responsive.png')}}" alt="" />
    </div>
</section>
<section class="section-base section-bottom-layer">
    <div class="container">
        <ul class="slider" data-options="type:carousel,arrows:false,nav:false,perView:5,perViewMd:3,perViewSm:2,perViewXs:1,gap:50,autoplay:3000">
            <li>
                <img src="{{asset('assets/images/logo-1.png')}}" alt="" />
            </li>
            <li>
                <img src="{{asset('assets/images/logo-2.png')}}" alt="" />
            </li>
            <li>
                <img src="{{asset('assets/images/logo-3.png')}}" alt="" />
            </li>
            <li>
                <img src="{{asset('assets/images/logo-4.png')}}" alt="" />
            </li>
            <li>
                <img src="{{asset('assets/images/logo-5.png')}}" alt="" />
            </li>
            <li>
                <img src="{{asset('assets/images/logo-6.png')}}" alt="" />
            </li>
            <li>
                <img src="{{asset('assets/images/logo-7.png')}}" alt="" />
            </li>
            <li>
                <img src="{{asset('assets/images/logo-10.png')}}" alt="" />
            </li>
            <li>
                <img src="{{asset('assets/images/logo-11.png')}}" alt="" />
            </li>
            <li>
                <img src="{{asset('assets/images/logo-12.png')}}" alt="" />
            </li>
            <li>
                <img src="{{asset('assets/images/logo-13.png')}}" alt="" />
            </li>
            <li>
                <img src="{{asset('assets/images/logo-14.png')}}" alt="" />
            </li>
        </ul>
        <hr class="space-lg" />
        <h2 id="overview" class="align-center width-850">
            ที่นี่เราสอน 4 เสาหลัก ที่ Full-stack developper จะต้องมีติดตัว <br>รับรองว่าคุณยังไม่เคยเรียนจากที่ไหน ๆ มาก่อน
        </h2>
    </div>
</section>

<section class="section-base section-color section-top-overflow">
    <div class="container">
        <div class="grid-list" data-columns="4" data-columns-md="2" data-columns-sm="1">
            <div class="grid-box">
                <div class="grid-item anima">
                    <div class="cnt-box cnt-box-top boxed">
                        <a href="#" class="img-box"><img src="{{asset('assets/images/icon-4.svg')}}" alt="" /></a>
                        <div class="caption">
                            <h2>การพัฒนา Responsive เว็บไซต์</h2>
                            <p>
                                ออกแบบเว็บไซต์ด้วย CSS เพื่อให้แสดงผลได้เหมาะสมกับทุก device
                            </p>
                            <a href="https://www.youtube.com/watch?v=dpnNEjBHbTU" data-lightbox-anima="fade-top" class="btn-text lightbox">เรียนอะไรบ้าง</a>
                        </div>
                    </div>
                </div>
                <div class="grid-item anima">
                    <div class="cnt-box cnt-box-top boxed">
                        <a href="#" class="img-box"><img src="{{asset('assets/images/icon-3.svg')}}" alt="" /></a>
                        <div class="caption">
                            <h2>ใช้ Backend Framework ยอดนิยม</h2>
                            <p>
                                ใช้ Laravel9 Framework ซึ่งเป็น framework จัดการฐานข้อมูลยอดนิยม
                            </p>
                            <a href="https://www.youtube.com/watch?v=9NrhpR1lCbQ" data-lightbox-anima="fade-top" class="btn-text lightbox">เรียนอะไรบ้าง</a>
                        </div>
                    </div>
                </div>
                <div class="grid-item anima">
                    <div class="cnt-box cnt-box-top boxed">
                        <a href="#" class="img-box"><img src="{{asset('assets/images/icon-1.svg')}}" alt="" /></a>
                        <div class="caption">
                            <h2>จัดการคลาวด์และติดตั้งโดเมน</h2>
                            <p>
                                Deploy เว็บไซต์เข้าสู่คลาวด์เซิร์ฟเวอร์และเข้ารหัสโดเมนให้ปลอดภัยด้วย SSL
                            </p>
                            <a href="https://www.youtube.com/watch?v=Rz59qOXlXn4" data-lightbox-anima="fade-top" class="btn-text lightbox">เรียนอะไรบ้าง</a>
                        </div>
                    </div>
                </div>
                <div class="grid-item anima">
                    <div class="cnt-box cnt-box-top boxed">
                        <a href="#" class="img-box"><img src="{{asset('assets/images/icon-2.svg')}}" alt="" /></a>
                        <div class="caption">
                            <h2>จัดการเว็บเซิร์ฟเวอร์และเมลเซิร์ฟเวอร์</h2>
                            <p>
                                ติดตั้งเว็บเซิร์ฟเวอร์และเมลเซิร์ฟเวอร์สำหรับใช้ในแอพลิเคชั่นและอีเมลองค์กร
                            </p>
                            <a href="https://www.youtube.com/watch?v=xXGMaJS39gU" data-lightbox-anima="fade-top" class="btn-text lightbox">เรียนอะไรบ้าง</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-base" >
    <div class="container" >
        <div id="course" class="row align-items-center">
            <div class="col-lg-6 col-md-6" data-anima="fade-left" data-time="1000">
                <img class="margin-23" src="{{asset('assets/images/vscode_composer_node_js_php8_git.png')}}" alt="โปรแกรมและอิดิเตอร์ที่ใช้ในการพัฒนาเว็บไซต์" />
            </div>
            <div class="col-lg-6 col-md-6 " data-anima="fade-right" data-time="1000">
                <h2>ติดตั้งโปรแกรม<br />และเครื่องมือที่ใช้ในการพัฒนาเว็บไซต์</h2>
                <p style="font-size: 20px">
                    เริ่มต้นเราจะสอนให้ติดตั้งเครื่องมือที่จำเป็นในการพัฒนาเว็บไซต์และการจำลองเซิร์ฟเวอร์
                </p>
                <ul class="icon-list icon-circle ">
                    <li>Visual Studio Code และ Extension</li>
                    <li>Xampp และ PHP8 โปรแกรมจำลองเซิร์ฟเวอร์</li>
                    <li>Composer โปรแกรมสำหรับการติดตั้ง PHP Package</li>
                    <li>NodeJs โปรแกรมสำหรับการติดตั้ง Js Package</li>
                    <li>Git โปรแกรม terminal และการเชื่อมต่อ Github</li>
                </ul>
            </div>
        </div>
        {{-- <hr class="space-sm" />
        <hr class="space-sm visible-md" /> --}}
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6" data-anima="fade-left" data-time="1000">
                <h2>HTML และ CSS ที่สำคัญ<br />สำหรับการออกแบบ Responsive เว็บไซต์</h2>
                <p style="font-size: 20px">
                    เรียนรู้การโครงสร้าง HTML, tag, selector การเขียน code css เพื่อกำหนดให้กำหนดรูปแบบ layout
                </p>
                <ul class="icon-list icon-circle">
                    <li>เรียนรู้โครงสร้างและหน้าที่ของ HTML5 และ CSS</li>
                    <li>เรียนรู้การ HTML tag ชนิด single tag และ dual tage</li>
                    <li>เรียนรู้การกำหนดรูปแบบ Selector ด้วย CSS เช่น element, id, class</li>
                    <li>เรียนรู้การใช้ Layout สำหรับการออกแบบ Responsive เช่น Flex, Grid</li>
                    <li>เรียนรู้การใช้คำสั่ง Animation เช่น Transform, Transition</li>
                    <li>เรียนรู้การใช้ Media Queries เพื่อกำหนด Layout ตามขนาดหน้าจอ</li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6" data-anima="fade-right" data-time="1000">
                <img  src="{{asset('assets/images/devices.png')}}" alt="" />
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6" data-anima="fade-left" data-time="1000">
                <img class="margin-23" src="{{asset('assets/images/responsive.png')}}" alt="โปรแกรมและอิดิเตอร์ที่ใช้ในการพัฒนาเว็บไซต์" />
            </div>
            <div class="col-lg-6 col-md-6 " data-anima="fade-right" data-time="1000">
                <h2>Workshop เว็บไซต์<br />พัฒนาหน้าแดชบอร์ด ลงทะเบียนและฟอร์ม</h2>
                <p style="font-size: 20px">
                    Workshop เว็บไซต์หน้าแดชบอร์ด หน้าสมัคร/ลงทะเบียนและ HTML ฟอร์ม
                </p>
                <ul class="icon-list icon-circle ">
                    <li>พัฒนาหน้าแดชบอร์ดสำหรับการทำงานหลังบ้าน และออกแบบให้แสดงผลใหม้เหมาะสมกับทุกหน้าจอและแพลทฟอร์ม</li>
                    <li>พัฒนาหน้าสมัคร/ลงทะเบียน สามารถทำงานสลับในหน้าเดียวโดยใช้ Animation ควบคุมการทำงาน</li>
                    <li>พัฒนาหน้า HTML ฟอร์มสำหรับการบันทึกข้อมูลและแก้ไขข้อมูล โดยการปรับแต่ง Input เดิมให้มีหน้าตาสวยงาม</li>
                </ul>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6" data-anima="fade-left" data-time="1000">
                <h2>สร้างโปรเจคด้วย Laravel9<br />และเชื่อมต่อฐานข้อมูล</h2>
                <p style="font-size: 20px">
                    เรียนรู้การสร้างโปรเจคด้วย Laravel9 ,การเชื่อมต่อกับ เว็บไซต์ Workshop ,การทำระบบ Authentication, CRUD ฐานข้อมูล
                </p>
                <ul class="icon-list icon-circle ">
                    <li>สร้างโปรเจคด้วย Laravel9</li>
                    <li>สร้างระบบ Authentication สำหรับการลงทะเบียนและเข้าสู่ระบบ</li>
                    <li>เชื่อมต่อหน้า Login จาก Workshop เข้ากับ Laravel Authenication</li>
                    <li>เชื่อมต่อหน้า Dashboard จาก Workshop และเชื่อมต่อฐานข้อมูลเพื่อแสดงผล</li>
                    <li>เชื่อมต่อหน้า Html Form จาก Workshop ให้เพิ่ม / แก้ไขรายการได้</li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6" data-anima="fade-right" data-time="1000">
                <img class="margin-23" src="{{asset('assets/images/laravel.png')}}" alt="" />
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6" data-anima="fade-left" data-time="1000">
                <img class="margin-23" src="{{asset('assets/images/git.png')}}" alt="โปรแกรมและอิดิเตอร์ที่ใช้ในการพัฒนาเว็บไซต์" />
            </div>
            <div class="col-lg-6 col-md-6 " data-anima="fade-right" data-time="1000">
                <h2>สร้าง Github Repository<br />และ Push โปรเจค</h2>
                <p style="font-size: 20px">
                    เรียนรู้การสร้าง Github Repository สำหรับเป็น  version control ของ Source code
                </p>
                <ul class="icon-list icon-circle">
                    <li>สมัครการใช้งาน Github</li>
                    <li>สร้าง Repository บน Github</li>
                    <li>Add โปรเจค Laravel และ Push เข้าสู่ Github</li>
                </ul>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6" data-anima="fade-left" data-time="1000">
                <h2>ติดตั้งเว็บเซิร์ฟเวอร์<br />และ Deploy โปรเจคจาก Github</h2>
                <p style="font-size: 20px">
                    เรียนรู้การสร้างคลาวด์เซิร์ฟเวอร์ Digital Ocean, การติดตั้ง Apache webserver, PHP8, PHP MyAdmin, การโคลนโปรเจคจาก Github
                </p>
                <ul class="icon-list icon-circle ">
                    <li>สร้างคลาวด์เซิร์ฟเวอร์ Digital Ocean (CentOS8)</li>
                    <li>การติดตั้งและอัพเอท Linux package</li>
                    <li>ติดตั้ง PHP8 คลาวด์เซิร์ฟเวอร์</li>
                    <li>ติดตั้ง PHP MyAdmin คลาวด์เซิร์ฟเวอร์</li>
                    <li>การสร้างฐานข้อมูล</li>
                    <li>การโคลนโปรเจค Laravel จาก Github และการ Deploy</li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6" data-anima="fade-right" data-time="1000">
                <img class="margin-23" src="{{asset('assets/images/server.png')}}" alt="" />
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6" data-anima="fade-left" data-time="1000">
                <img class="margin-23" src="{{asset('assets/images/secure.png')}}" alt="โปรแกรมและอิดิเตอร์ที่ใช้ในการพัฒนาเว็บไซต์" />
            </div>
            <div class="col-lg-6 col-md-6 " data-anima="fade-right" data-time="1000">
                <h2>สมัครโดเมน<br />การคอนฟิก DNS และ SSL</h2>
                <p style="font-size: 20px">
                    เรียนรู้การสมัครโดเมนจาก NameCheap.com ,การคอนฟิก DNS ให้เชื่อมต่อกับ IP คลาวด์เซิร์ฟเวอร์ การติดตั้ง SSL และ Auto Renew SSL
                </p>
                <ul class="icon-list icon-circle">
                    <li>สมัครและซื้อโดเมนจาก NameCheap.com</li>
                    <li>คอนฟิก DNS ให้เชื่อมต่อกับ IP คลาวด์เซิร์ฟเวอร์</li>
                    <li>ติดตั้ง SSL package เพื่อให้สามารถใช้งาน HTTPS(Hypertext Transfer Protocol over Secure Socket Layer)</li>
                    <li>ตั้งค่า Cron ให้ทำ Auto Renew SSL</li>
                </ul>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6" data-anima="fade-left" data-time="1000">
                <h2>ติดตั้งเมลเซิร์ฟเวอร์<br />และการทำ SMTP Relay</h2>
                <p style="font-size: 20px">
                    เรียนรู้การติดตั้งเมลเซิร์ฟเวอร์สำหรับใช้ส่งอีเมลในแอพลิเคชั่นและเมลในองค์กร
                </p>
                <ul class="icon-list icon-circle ">
                    <li>การติดตั้ง Postfix</li>
                    <li>การติดตั้ง Dovecot</li>
                    <li>การคอนฟิก Postfix และ Dovecot</li>
                    <li>การติดตั้ง Roundcube mail client</li>
                    <li>การคอนฟิก Roundcube SSL</li>
                    <li>การทำ SMTP Relay จาก MailGun</li>
                    <li>โบนัส !! ตัวอย่างจดหมายขอการใช้งาน port 25 กรณีไม่ทำ SMTP Relay</li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6" data-anima="fade-right" data-time="1000">
                <img class="margin-23" src="{{asset('assets/images/mailserver.png')}}" alt="" />
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6" data-anima="fade-left" data-time="1000">
                <img class="margin-23" src="{{asset('assets/images/bonus.png')}}" alt="โปรแกรมและเครื่องมือที่ใช้ในการพัฒนาเว็บไซต์" />
            </div>
            <div class="col-lg-6 col-md-6 " data-anima="fade-right" data-time="1000">
                <h2 style="color: rgb(173, 3, 3)" ><span>โบนัสพิเศษ !!!</span><br />เทคนิคการหางานโครงการหลักแสน - ล้าน</h2>
                <p style="font-size: 20px">
                    โบนัสพิเศษสุด เทคนิคการหางานโครงการหลักแสน - ล้าน และการเขียน proposal 
                </p>
                <ul class="icon-list icon-circle">
                    <li>เทคนิคการหางานโครงการหลักแสน - ล้านบาท</li>
                    <li>เทคนิคการเขียน  Propersal ตาม Requirement</li>
                    <li>การวิเคราะห์ระบบ (System Analysis)</li>
                    <li>การออกแบบ Flow diagram</li>
                    <li>การออกแบบ ER diagram</li>
                </ul>
            </div>
        </div>
        {{-- <hr class="space-sm" />
        <hr class="space-sm visible-md" /> --}}
    </div>
</section>
       
<section id="trainingroom" class="section-image light" style="background-image:url({{asset('assets/images/bg.svg')}})">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" style="text-align: center">
                <h2>ห้องเรียนสุดชิก บรรยากาศสุดซิล<br />ที่อุทยานวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยเชียงใหม่ (CMU STeP)</h2>
                <p>
                    ชั้น 1 (อาคาร B) อาคารอำนวยการอุทยานวิทยาศาสตร์ภาคเหนือ (จังหวัดเชียงใหม่)<br> 155 หมู่ 2 ต.แม่เหียะ อ.เมือง จ.เชียงใหม่ 50100
                </p>
            </div>
            <div class="col-lg-12">
                <hr class="space-sm" />
                <div class="container">
                    <ul class="slider slider-zoom-center" data-options="type:carousel,perView:5,perViewMd:3,perViewSm:1,focusAt:center,gap:10,nav:true,controls:out,autoplay:3000">
                        <li>
                            <a class="img-box lightbox icon-photo" href="{{asset('assets/images/trainingroom/training_room1.png')}}" data-lightbox-anima="fade-top">
                                <img src="{{asset('assets/images/trainingroom/training_room1.png')}}" alt="">
                                <i class="im-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a class="img-box lightbox icon-photo" href="{{asset('assets/images/trainingroom/training_room2.png')}}" data-lightbox-anima="fade-top">
                                <img src="{{asset('assets/images/trainingroom/training_room2.png')}}" alt="">
                                <i class="im-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a class="img-box lightbox icon-photo" href="{{asset('assets/images/trainingroom/training_room3.png')}}" data-lightbox-anima="fade-top">
                                <img src="{{asset('assets/images/trainingroom/training_room3.png')}}" alt="">
                                <i class="im-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a class="img-box lightbox icon-photo" href="{{asset('assets/images/trainingroom/training_room4.png')}}" data-lightbox-anima="fade-top">
                                <img src="{{asset('assets/images/trainingroom/training_room4.png')}}" alt="">
                                <i class="im-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a class="img-box lightbox icon-photo" href="{{asset('assets/images/trainingroom/training_room5.png')}}" data-lightbox-anima="fade-top">
                                <img src="{{asset('assets/images/trainingroom/training_room5.png')}}" alt="">
                                <i class="im-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a class="img-box lightbox icon-photo" href="{{asset('assets/images/trainingroom/training_room6.png')}}" data-lightbox-anima="fade-top">
                                <img src="{{asset('assets/images/trainingroom/training_room6.png')}}" alt="">
                                <i class="im-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a class="img-box lightbox icon-photo" href="{{asset('assets/images/trainingroom/training_room7.png')}}" data-lightbox-anima="fade-top">
                                <img src="{{asset('assets/images/trainingroom/training_room7.png')}}" alt="">
                                <i class="im-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
             
        
                <div class="row">
                    
                    <div class="col-lg-12">
                        <hr class="space-sm" />
                            <h4 style="color:#ffffff;">แผนที่ </h4>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3777.7538819829083!2d98.9348371!3d18.7645274!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30da30b994caf679%3A0x276bc591019cfd74!2z4Lit4Li44LiX4Lii4Liy4LiZ4Lin4Li04LiX4Lii4Liy4Lio4Liy4Liq4LiV4Lij4LmM4Lig4Liy4LiE4LmA4Lir4LiZ4Li34Lit!5e0!3m2!1sth!2sth!4v1603945845151!5m2!1sth!2sth" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
             


                
               
                
            </div>
        </div>
    </div>
</section>


<section id="result" class="section-base">
    <div class="container result" data-anima="fade-bottom" data-time="1000" style="width:1200px">
        <div class="row">
            <div class="col-lg-12" style="text-align: center">
                <h2>ผลงานบางส่วน</h2>
                <p style="font-size: 18px">
                    Full-stack developper ไม่จำเป็นต้องทำงานเป็นลูกจ้างเสมอไป คุณก็สามารถรับงานเองได้ใช้คนแค่ 1-2 คน จะทำที่บ้านหรือ Co-working space ก็ยังได้ ลูกค้าไม่ได้สนใจว่าคุณต้องทำงานในออฟฟิศหรือที่ไหนเพราะเขาสนใจแค่ผลงาน งานเว็บแอพลิเคชั่นส่วนใหญ่จะมีพื้นฐานความต้องการไม่ต่างกัน คุณต้องเข้าใจว่าลูกค้าต้องการอะไร จะออกแบบ UX/UI และฐานข้อมูลยังไง เมื่อได้ requirement ครบก็ทำการ coding และอัพโหลดเข้าสู่คลาวด์ก็เป็นอันสำเร็จ รับเงินแสนเงินล้านสบาย ๆ
                </p>
            </div>
        </div>
        <hr class="space" />
        <div class="row contract">
            <div class="imgBx">
                <img src="{{asset('assets/images/contract1.png')}}" alt="">
            </div>
            <div class="imgBx">
                <img src="{{asset('assets/images/contract2.png')}}" alt="">
            </div>
            <div class="imgBx">
                <img src="{{asset('assets/images/contract3.png')}}" alt="">
            </div>
        </div>
    </div>
</section>
<section id="purchase" class="section-base section-color">
    <div class="container">
        <h2 class="align-center" style="margin-bottom: 15px">คอร์สเรียน เดือนธันวาคม 2565 <span class="promotionMessage blink_me"> พิเศษ!! โปรท้ายปีใช้โค้ด ENDY65 ลด 20%</span></h2>
        <div class="row" data-anima="fade-bottom" data-time="1000">
            <div class="col-lg-12">
                <form action="https://templates.themekit.dev/codrop/assets/js/contact-form/contact-form.php" class="form-box form-ajax boxed-area paymentForm" method="post" data-email="example@domain.com">
                    <div class="row">
                        <div class="col-lg-6">
                            <p>ชื่อ</p>
                            <input id="name" name="name" placeholder="ชื่อ" type="text" class="input-text" required>
                        </div>
                        <div class="col-lg-6">
                            <p>นามสกุล</p>
                            <input id="surname" name="surname" placeholder="นามสกุล" type="text" class="input-text" required>
                        </div>
                        <div class="col-lg-6">
                            <p>อีเมล</p>
                            <input id="email2" name="email2" placeholder="อีเมล" type="email" class="input-text" required>
                        </div>
                        <div class="col-lg-6">
                            <p>โทรศัพท์</p>
                            <input id="phone" name="phone" placeholder="โทรศัพท์" type="text" class="input-text" required>
                        </div>
                        <div class="col-lg-12">
                            <p>ที่อยู่</p>
                            <textarea id="address" name="address" class="input-textarea" placeholder="ที่อยู่" required=""></textarea>
                        </div>
                        <div class="col-lg-6">
                            <p>จำนวนผู้เข้าเรียน</p>
                            <select class="input-select" name="number" id="number">
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
                            <input id="price" name="price" placeholder="" type="text" value="15000" class="input-text" readonly required>
                        </div>
                        <div class="col-lg-6">
                            <p>วันที่เรียน เดือนธันวาคม 2565</p>
                            <select class="input-select" name="number" id="number">
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
                            <input id="company" name="company" placeholder="บริษัท" type="text" class="input-text" required>
                        </div>
                        <div class="col-lg-6">
                            <p>เลขประจำตัวผู้เสียภาษี (ถ้ามี)</p>
                            <input id="vatnumber" name="vatnumber" placeholder="เลขที่ผู้เสียภาษี" type="text" class="input-text" required>
                        </div>
                        <div class="col-lg-6">
                            <p>โค้ดส่วนลด</p>
                            <input id="promocode" name="promocode" placeholder="โค้ดส่วนลด" type="text" class="input-text" required>
                        </div>
                    </div>
                    <div style="text-align:right">
                        <button class="btn btn-sm btn-circle float-right" type="submit">ชำระเงิน</button>
                    </div>
                    <div class="success-box">
                        <div class="alert alert-success">Congratulations. Your message has been sent successfully</div>
                    </div>
                    <div class="error-box">
                        <div class="alert alert-warning">Error, please retry. Your message has not been sent</div>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</section>
@endsection