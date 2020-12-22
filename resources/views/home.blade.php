@extends('website.layout.layout')

@include('website.layout.navbar')
@section('content')
<div class="view mHeaderBlockCon">
    <div class="homePageMianText">
        <div>
            <h1>موقع الكونسيرج<br> هذا المحتوي هو عنوان النص</h1>
            <span>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل</span>
        </div>
    </div>
    <div class="searchInputBlock">
        <input type="text" class="searchPlaceInput" placeholder="وجهتك" >
        <button class="searchPlaceButton ">بحث <img  src="{{ asset('img/ic_keyboard_arrow_right_24px-1.png') }}"></button>
    </div>
</div>

<section class="carousel_section carousel_sectionConcBlock">
    <div class="">
        <div class="row">
            <div class="col-9">
                <div class="abcarousel_common abcarousel1 owl-carousel">
                    <div class="carousel_item pos_relative  sliderBlock">

                    </div>

                    <!--item-2-->
                    <div class="carousel_item pos_relative sliderBlock">
                    </div>

                    <!--item-3-->
                    <div class="carousel_item pos_relative sliderBlock">

                    </div>
                    <div class="carousel_item pos_relative sliderBlock">

                    </div>
                    <div class="carousel_item pos_relative sliderBlock">


                    </div>
                    <div class="carousel_item pos_relative sliderBlock">

                    </div>
                    <div class="carousel_item pos_relative sliderBlock">

                    </div>


                </div>
                <!--/wrapper-->
            </div>
            <div class="col-md-3 sliderText">
                <h4>عروض اليوم</h4>
                <p>هذا النص  هذا النص  هذا النص  هذا النص  هذا النص  هذا النص  </p></div>
        </div>
    </div>
</section>

<!--    <section class="createYourTripSection">-->
<div class="container createYourTripMain ">
    <div class="row">
        <div class="col-md-12">
            <div class="row">

                <div class="col-md-7 createYourTripsec2">
                    <!--
                                       <div class="tripText1">
                                       <h4>أنشئ رحلتك</h4>
                                       <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربي</p>
                                           </div>
                                       <div class="tripText1 row">
                                         <div class="col imgTrip"></div>
                                         <div class="col imgTrip"></div>
                                         <div class="col imgTrip"></div>
                                         <div class="col imgTrip"></div>
                                           </div>
                                       <div class="nextStep"><img src="img/ic_keyboard_arrow_right_24px-1.png"></div>
                                             <p class="pinTrip">أنشئ رحلتك الآن</p>

                                    </div>
                    -->
                    <!--
                                    <div class="tripText1">
                                       <h4>أنشئ رحلتك</h4>
                                       <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربي</p>
                                           </div>
                                       <div class="tripblockDate2">
                                        <h5>أضف أياماً أو تواريخ</h5>
                                           <button type="button" class="btn btn-secondary">استخدم التواريخ (يي/ش ش)</button>
                                           <button type="button" class="btn btn-secondary">استخدم الأيام (اليوم1)</button>
                                           </div>
                                       <div class="nextStep"><img src="img/ic_keyboard_arrow_right_24px-1.png"></div>
                                             <p class="pinTrip">التالي</p>

                                    </div>
                            >
                    -->
                    <div class="createyorTrip3">
                        <div class="tripText2">
                            <h4>أنشئ رحلتك</h4>
                            <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل</p>
                        </div>
                        <div class="tripblockform">

                            <div class="nextStep"><img src="{{ asset('img/ic_keyboard_arrow_right_24px-1.png') }}"></div>
                            <p class="pinTrip">إرسال</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-5 createYourTripImgSec">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="createYourTrip" >

</div>

<section class="offerSecrionCon">
    <div class="socialTitle">
        <h5 >العروض</h5>
        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل</p>
    </div>
    <div class="offerText">
        <div class="">
            <div class="row">
                <div class=" col-md-1"></div>
                <div class="offerCard col-md-2" style="background-image: url({{ asset('img/dubai-33972181_1920.png') }})"></div>
                <div class="offerCard col-md-2" style="background-image: url({{ asset('img/dubai-33972181_1920.png') }});"></div>
                <div class="offerCard col-md-2" style="background-image: url({{ asset('img/dubai-33972181_1920.png') }});"></div>
                <div class="offerCard col-md-2" style="background-image: url({{ asset('img/dubai-33972181_1920.png') }});"></div>
                <div class=" col-md-1"></div>
            </div>
        </div>
    </div>
</section>

<div class="socialTitle">
    <h5>معالم سياحية</h5>
    <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص</p>
</div>
<div class="container photoGallarySocial">

    <div class="column photoGallarySocialImg">
        <img src="{{ asset('img/NoPath%20-%20Copy%20(36).png') }}" >
        <img src="{{ asset('img/NoPath%20-%20Copy%20(37).png') }}">
        <img src="{{ asset('img/NoPath%20-%20Copy%20(29).png') }}" >
    </div>
    <div class="column photoGallarySocialImg">
        <img src="{{asset('img/NoPath%20-%20Copy%20(41).png')}}" >
        <img src="{{ asset('img/NoPath%20-%20Copy%20(31)-1.png') }}" >
        <img src="{{ asset('img/NoPath%20-%20Copy%20(30).png') }}" >
    </div>
    <div class="column photoGallarySocialImg">
        <img src="{{ asset('img/NoPath%20-%20Copy%20(35).png') }}" >
        <img src="{{ asset('img/NoPath%20-%20Copy%20(32).png') }}">

    </div>
    <div class="column photoGallarySocialImg">
        <img src="{{ asset('img/NoPath%20-%20Copy%20(34).png') }}" >
        <img src="{{ asset('img/NoPath%20-%20Copy%20(39).png') }}">

    </div>

</div>
<section class="carousel_section socialSlidersection">
    <h5 >الشبكة الإجتماعية</h5>
    <div class="abcarousel_common abcarousel4 owl-carousel">
        <div class="carousel_item pos_relative socialMediaSlider" style="background-image: url({{ asset('img/dubai-33972181_1920.png') }}); background-size: cover; background-position: center;background-repeat: no-repeat; height: 20vh;">

        </div>
        <div class="carousel_item pos_relative socialMediaSlider" style="background-image: url({{ asset('img/dubai-33972181_1920.png') }}); background-size: cover; background-position: center;background-repeat: no-repeat; height: 20vh;">

        </div>
        <div class="carousel_item pos_relative socialMediaSlider" style="background-image: url({{ asset('img/dubai-33972181_1920.png') }}); background-size: cover; background-position: center;background-repeat: no-repeat; height: 20vh;">

        </div>
        <div class="carousel_item pos_relative socialMediaSlider" style="background-image: url({{ asset('img/dubai-33972181_1920.png') }}); background-size: cover; background-position: center;background-repeat: no-repeat; height: 20vh;">

        </div>
        <div class="carousel_item pos_relative socialMediaSlider" style="background-image: url({{ asset('img/dubai-33972181_1920.png') }}); background-size: cover; background-position: center;background-repeat: no-repeat; height: 20vh;">

        </div>
    </div>
</section>
<section class="broadCastBlock">
    <h4>النشرة البريدية</h4>
    <P>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد</P>
    <input type="text" class="brodCastInput">
    <button class="brodCastButton"><img  src="{{ asset('img/email-84-1.png') }}">  إرسال</button>
</section>

@endsection
