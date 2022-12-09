
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Full-Stack Training Class| คอร์สเรียน Full-Stack developper</title>
    <meta name="description" content="">

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/glide.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/content-box.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/contact-form.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/media-box.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/skin.css')}}">
    
    
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/transition.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/spinner.css')}}">
</head>
<body>
    <div id="preloader"></div>
    <nav class="menu-subtitle menu-fixed menu-transparent menu-one-page light" data-menu-anima="fade-bottom" data-scroll-detect="true">
        <div class="container">
            <div class="menu-brand">
                <a href="#">
                    <img class="logo-default" src="assets/images/logo.png" alt="logo" />
                    <img class="logo-retina" src="assets/images/logo.png" alt="logo" />
                </a>
            </div>
            <i class="menu-btn"></i>
            <div class="menu-cnt">
                <ul>
                    <li>
                        <a href="#overview">เรียนอะไรบ้าง<span>ภาพรวมคอร์ส</span></a>
                    </li>
                    <li>
                        <a href="#course">คอร์สเรียน<span>รายละเอียดคอร์ส</span></a>
                    </li>
                    <li>
                        <a href="#trainingroom">ห้องเรียน<span>รายละเอียดห้องอบรม</span></a>
                    </li>
                    <li>
                        <a href="#result">ผลงาน<span>ผลงานบางส่วน</span></a>
                    </li>
                    <li>
                        <a href="#purchase">ซื้อคอร์ส<span>สั่งซื้อคอร์สเรียน</span></a>
                    </li>
                </ul>
       
                <div class="clear"></div>
            </div>
        </div>
    </nav>
    <main>
        @yield('content')
    </main>
    <i class="scroll-top-btn scroll-top show"></i>
    <footer class="footer-parallax light">
        <div class="container">
            <div class="row">
                {{-- <div class="col-lg-3">
                    <h4>บริษัทเอ็นพีซีโซลูชั่นแอนด์เซอร์วิสจำกัด</h4>
                    <div class="menu-inner menu-inner-vertical">
                        <ul>
                            <li>
                                <a href="https://npcsolutionandservice.com/">บริษัทเอ็นพีซีโซลูชั่นแอนด์เซอร์วิสจำกัด</a>
                            </li>
                        </ul>
                    </div>
                </div> --}}
                <div class="col-lg-3">
                    <h4>เมนู</h4>
                    <div class="menu-inner menu-inner-vertical">
                        <ul>
                            <li>
                                <a href="#overview">เรียนอะไรบ้าง</a>
                            </li>
                            <li>
                                <a href="#course">คอร์สเรียน</a>
                            </li>
                            <li>
                                <a href="#trainingroom">ห้องเรียน</a>
                            </li>
                            <li>
                                <a href="#result">ผลงาน</a>
                            </li>
                        </ul>
                    </div>
                </div>
                {{-- <div class="col-lg-3">
                    
                </div> --}}
                <div class="col-lg-3">
                    <h4>Follow us</h4>
                    <div class="icon-links icon-social icon-links-grid social-colors">
                        <a class="facebook"><i class="icon-facebook"></i></a>
                        <a class="youtube"><i class="icon-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bar">
            <div class="container">
                <span>© Copyright 2022. บริษัท เอ็นพีซี โซลูชั่น แอนด์ เซอร์วิส จำกัด <a target="_blank" href="https://npcsolutionandservice.com/">>>เข้าสู่เว็บไซต์</a></span>
                <span><img src="{{asset('assets/images/npclogo.png')}}" alt="" /></span>
            </div>
        </div>

        {{-- <script src="{{asset('assets/js/parallax.min.js')}}"></script> --}}
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>
        <script src="{{asset('assets/js/glide.min.js')}}"></script>
        <script src="{{asset('assets/js/magnific-popup.min.js')}}"></script>
        {{-- <script src="{{asset('assets/js/tab-accordion.js')}}"></script> --}}
        {{-- <script src="{{asset('assets/js/pagination.min.js')}}"></script> --}}
        {{-- <script src="{{asset('assets/js/imagesloaded.min.js')}}"></script> --}}
        {{-- <script src="{{asset('assets/js/contact-form.js')}}"></script> --}}
        {{-- <script src="{{asset('assets/js/progress.js')}}"></script> --}}
        <script src="{{asset('assets/js/custom.js')}}"></script>
        {{-- <script src="{{asset('assets/js/datepicker.min.js')}}"></script> --}}

        <script>
            var route = {
                url: "{{ url('/') }}",
                token: $('meta[name="csrf-token"]').attr('content'),
            };
        </script>

        @stack('js')
    </footer>
</body>

</html>
