@extends('layouts.header')

@section('title','الرئيسية')

@section('content')


    <div class="container text-center">

        <h1 class="mb-3 lh-lg"><span class="text-success">انصر </span> إخوانك ودافع عن <span><img src="{{asset('assets/imgs/palestine.svg')}}" alt="palestine" width="23"> رضك</span></h1>
        <p class="text-muted pb-3">منصة لإنشاء هاشتاج واعادة صياغة المنشورات بطريقة لاتتبعها خوارزميات السوشل ميديا نصرة لإخواننا في فلسطين ودعم قضية المسلمين.</p>

        <div class="row mt-5  mx-auto bg-white p-4 align-items-start rounded-4 shadow-sm">
            <div class="col-lg-3">
                <select class="form-select border-0 h-100 rounded-3 w-100  py-3 me-2 fw-bold bg-secondary bg-opacity-25" id="typeSelector">
                    <option value="1">معالج النص</option>
                    <option value="2"  disabled >مولد هاشتاج(قريبا)</option>
                </select>

                <select class="form-select border-0 h-100 rounded-3 w-100 mt-3  py-3 fw-bold bg-secondary bg-opacity-25" id="hashSelector">
                    <option value="1">الخيار 1</option>
                    <option value="2">الخيار 2</option>
                    <option value="3">الخيار 3</option>
                    <option value="4">الخيار 4</option>
                </select>
            </div>

            <div class="col-lg-5">
                <input type="text" placeholder="أدخل كلمات الهاشتاج" class="form-control border-0 w-100  py-3 rounded-0 d-none hashtag-generator-input">
                <textarea class="form-control border-0 w-100  py-3 rounded-0 para-input"  rows="10" placeholder="أكتب منشورك لتتم معالجته ..."></textarea>
            </div>

            <div class="col-lg-4">
                <button class="btn btn-success py-3 rounded-3  w-100  hashtag-generator-btn d-none text-light "> <img src="{{asset('assets/imgs/hashtag-white.svg')}}" alt="hashtag" class="me-2" width="12">توليد مقترحات الهاشتاج</button>
                <button class="btn btn-success py-3 rounded-3 w-100  para-btn text-light"> <img src="{{asset('assets/imgs/paper.svg')}}" alt="paper" class="me-2" width="12">معالجة نص المنشور</button>
            </div>

        </div>


        <div class="generate-result shadow my-5 p-4 rounded-4 bg-white">
            <h3>ستظهر نتائج العملية هنا</h3>
            <div class="result text-start mt-3" style="height: 30vh"></div>
            <button class="btn btn-secondary w-100 rounded-3 py-2" disabled id="copy-button"> <img src="{{asset('assets/imgs/copy-black.svg')}}" alt="copy" class="me-3" width="14">نسخ النتائج كاملا</button>
        </div>

        <h3 class="my-4">#لاتحزن_أنت_في_حرب</h3>


        <div class="row my-5 gy-5 text-center text-lg-start">
            <div class="col-md-4 vstack gap-3 align-items-center  position-relative">
                <h3 class="text-secondary">01</h3>
                <h6>أكثر هاشتاج يتم استعماله في المنصة</h6>
                <span class="badge text-bg-warning rounded-pill px-5 py-2">قريبا</span>
            </div>

            <div class="col-md-4 vstack gap-3 align-items-center   position-relative">
                <h3 class="text-secondary">02</h3>
                <h6>عدد المنشورات التي تمت معالجتها عبر المنصة</h6>
                <span class="badge text-bg-secondary rounded-pill py-2 px-4">{{$postCount}} منشور</span>
            </div>

            <div class="col-md-4 vstack gap-3 align-items-center position-relative">
                <h3 class="text-secondary">03</h3>
                <h6>عدد زوار الذين يستعملون المنصة</h6>
                <span class="badge text-bg-secondary rounded-pill py-2 px-4">400 زائر</span>
            </div>
        </div>


    </div>
@endsection

@section('scripts')
    <script src="{{asset('assets/js/home.js')}}"></script>

@endsection
