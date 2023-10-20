<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="description" content="منصة لإنشاء هاشتاج واعادة صياغة المنشورات بطريقة لاتتبعها خوارزميات السوشل ميديا نصرة لإخواننا في فلسطين ودعم قضية المسلمين.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/png" sizes="192x192" href="/icon-192x192.png">
    <link rel="icon" type="image/png" sizes="256x256" href="/icon-256x256.png">
    <link rel="icon" type="image/png" sizes="384x384" href="/icon-384x384.png">
    <link rel="icon" type="image/png" sizes="512x512" href="/icon-512x512.png">

    <link rel="manifest" href="/manifest.webmanifest">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Alexandria:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <title>{{config('app.name')}} | @yield('title')</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.rtl.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    @yield('styles')
</head>
<body class="overflow-hidden">



    <div class="loader">
        <img src="{{asset('assets/imgs/logo.gif')}}" alt="loader" class="img-fluid">
    </div>


    {{--    Start OffCanvas  --}}



    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">

        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                <img src="{{asset('assets/imgs/kifahi.svg')}}" alt="kifahi" width="120">
            </h5>
            <button type="button"  data-bs-dismiss="offcanvas" aria-label="Close" class="btn rounded-0">
                <img src="{{asset('assets/imgs/close.svg')}}" alt="close-icon"  width="14">
            </button>

        </div>

        <div class="offcanvas-body">
                    <ul class="navbar-nav text-center align-items-center justify-content-center">
                        <li class="nav-item py-2">
                            <a class="nav-link active" aria-current="page" href="{{url('/')}}">الرئيسية</a>
                        </li>

                        <li class="nav-item py-2">
                            <a class="nav-link" href="{{url('/collaborate')}}">شارك معنا</a>
                        </li>


                        <li class="nav-item my-2 btn btn-success text-light">
                            <a class="nav-link p-2 px-3" href="https://www.figma.com/community/file/1296500681373735545" target="_blank">
                                <img src="{{asset('assets/imgs/share-white.svg')}}" alt="share" width="20" class="mr-1">
                                شارك الفكرة
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>



    {{--    End OffCanvas  --}}




    {{--    Start Header  --}}

    <header>
        <nav class="navbar py-0 navbar-expand-lg bg-white shadow mb-5" style="min-height: 72px">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{asset('assets/imgs/kifahi.svg')}}" alt="kifahi" width="120">
                </a>
                <button class="navbar-toggler px-4" style="height: 72px" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-expanded="false" aria-label="Toggle navigation">
                    <img src="{{asset('assets/imgs/bar.svg')}}" alt="burger-menu" width="18">
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav justify-content-center mb-2 mb-lg-0 flex-grow-1">

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{url('/')}}">الرئيسية</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/collaborate')}}">شارك معنا</a>
                        </li>

                    </ul>

                    <a href="https://www.figma.com/community/file/1296500681373735545" target="_blank" class="btn btn-success text-light p-2 px-3">
                        <img src="{{asset('assets/imgs/share-white.svg')}}" alt="share" width="20" class="mr-1">
                        شارك الفكرة
                    </a>

                </div>
            </div>
        </nav>
    </header>

    {{--    End Header  --}}

    {{--    Start Main  --}}

    <main>
        @yield('content')
    </main>

    {{--    End Main  --}}


    {{--    Start Footer  --}}

    @include('layouts.footer')

    {{--    End Footer  --}}


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        $( document ).ready(function() {
            setTimeout(()=> {
                $('.loader').fadeOut();
                $( document.body ).removeClass('overflow-hidden');
            },2000)
        });
    </script>
    @yield('scripts')
</body>
</html>
