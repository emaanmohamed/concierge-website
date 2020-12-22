<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="{{asset('css/Registrationstyle.css')}}" >
</head>
<body>
<div class="orangeCorner"></div>
<div class="grayCorner"></div>
<div class="container">
    <div class="row">
        <div class="col-xl-12">

            <div  class="multistep-container">
                <div class="multistep-form-area">
                    <div class="form-box">
                        <ul class="progressbar">
                            <li>الدفعات</li>
                            <li>السياسات</li>
                            <li>الصور</li>
                            <li>وسائل الراحة</li>
                            <li>مرافق وخدمات</li>
                            <li>التصميم والأسعار</li>
                            <li  class="active achievement">معلومات أساسية </li>
                        </ul>
                        <form action="">
                            <div class=" div1 wizardContant activeDiv ">
                                <div class="row basicinfo ">
                                    <div class="col-md-4 ">
                                        <h4 class="cairo">مرحباً بك</h4>
                                        <p class="cairo">ابدأ بإخبارنا باسم مكان الإقامة وبيانات الاتصال والعنوان</p>
                                        <div class="vl2">
                                            <div class="form-group">
                                                <label>ما اسم مكان الإقامة الخاص بك؟</label>
                                                <input type="text" name="" id="" class="form-control">
                                                <span> سيظهر هذا الاسم للضيوف عند بحثهم عن مكان للإقامة</span>
                                            </div>
                                            <div class="form-group">
                                                <label>تقييم النجوم</label>
                                                <select class="form-control"></select>
                                            </div>
                                        </div>
                                        <div class="vl4">

                                            <div class="form-group">
                                                <label>ما هي تفاصيل الاتصال الخاصة بهذا المكان؟</label>
                                                <label>ما اسم جهة الاتصال</label>
                                                <input type="text" name="" id="" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>رقم الهاتف</label>
                                                <input type="tel" name="" id="" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>رقم هاتف بديل (اختياري)</label>
                                                <input type="tel" name="" id="" class="form-control">
                                                <span> رقم الاتصال (حتى نتمكن من مساعدتك في عملية تسجيلك إذا استلزم الأمر)</span>
                                            </div>
                                            <div class="form-group quesRadio">
                                                <span class="spanHotel" >هل تمتلك فنادق عديدة؟ أو هل أنت جزء من شركة لإدارة أماكن الإقامة أو مجموعة فنادق؟</span>
                                                <label class="radioButton" >
                                                    <input type="radio" name="key" value="value" checked />
                                                    <span class="radioText">نعم</span>
                                                </label>
                                                <label class="radioButton">
                                                    <input type="radio" name="key" value="another-value" />
                                                    <span class="radioText">لا</span>
                                                </label>
                                            </div>
                                        </div>
                                        <!--
                                                                <div class="button-row">
                                                                <input type="button" value="Next" class="next">
                                                                </div>
                                        -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="note1">
                                            <p>بعد الانتهاء من التسجيل، سيظل بإمكانك إجراء تغييرات على عملية تسجيل مكان إقامتك قبل ظهوره على الموقع</p>
                                        </div>

                                    </div>
                                    <div class="col-md-8 ">

                                        <div class="vl2 usingOtherBlock">
                                            <h5>هل تستخدم برنامج إدارة مواقع الحجوزات؟</h5>
                                            <p>برنامج إدارة مواقع الحجوزات هو أداة تسمح لك باختيار ما تبيعه عبر جميع المواقع المختلفة التي تعرض عليها مكان الإقامة الخاص بك. يمكنك بعد ذلك تحديد الأسعار، وإتاحة وإغلاق التواريخ في التقويم الخاص بك على جميع هذه المواقع في مكان واحد</p>
                                            <p>إذا كنت تستخدم برنامج إدارة مواقع الحجوزات، فأخبرنا أدناه. سنستخدم هذه المعلومات لمساعدتك في ربطه بموقعنا في المستقبل. كما يمكنك مساعدتنا من خلال إعلامنا باسم العلامة التجارية لبرنامج إدارة مواقع الحجوزات الخاص بك</p>
                                            <div >
                                                <label class="usingMangment ">
                                                    <input type="radio" name="key1" value="value"  />
                                                    <span class="radioText">أستخدم برنامج إدارة مواقع الحجوزات</span>
                                                </label>
                                                <label class="usingMangment ">
                                                    <input type="radio" name="key1" value="another-value" />
                                                    <span class="radioText">للا أستخدم برنامج إدارة مواقع الحجوزات</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>
                                    <div class="col-md-4 ">
                                        <div class="vl4">
                                            <div class="form-group">
                                                <label>أين يقع العقار؟</label>
                                                <label>عنوان الشارع</label>
                                                <input type="text" name="" id="" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>العنوان 2</label>
                                                <input type="tel" name="" id="" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>الدولة / الإقليم</label>
                                                <input type="tel" name="" id="" class="form-control">
                                                <span> رقم الاتصال (حتى نتمكن من مساعدتك في عملية تسجيلك إذا استلزم الأمر)</span>
                                            </div>
                                            <div class="form-group">
                                                <label>المدينة</label>
                                                <input type="tel" name="" id="" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>الرمز البريدي </label>
                                                <input type="tel" name="" id="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="note2">
                                            <p>عنوانك ذو أهمية </p>
                                            <p>يرجى التأكد من إدخال عنوان العقار الخاص بك بالكامل متضمناً اسم المبنى والرقم، إلخ. من الممكن أن نرسل لك رسالة على هذا العنوان للتحقق من صحة المعلومات التي قدمتها</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="button-row">
                                    <button type="button" value="Next" class="next btn"> متابعة</button>

                                </div>
                            </div>
                            <div class=" div2 wizardContant  ">
                                <h5>التصميم والأسعار</h5>
                                <p>أخبرنا عن غرفتك الأولى. بمجرد إدخال كافة المعلومات اللازمة ستتمكن من ملء تفاصيل الغرف الأخرى</p>
                                <div class="addRoom vlT">
                                    <p>لم تتم إضافة أي غرف لعقارك. ابدأ بإضافة الغرف لوصف خيارات الأسرّة والتصميم والأسعار للضيوف</p>
                                    <button class="btn">أضف غرفة</button>
                                    <div class="noteddroom">
                                        <p>بعد الانتهاء من التسجيل، سيظل بإمكانك إجراء تغييرات على عملية تسجيل مكان إقامتك قبل ظهوره على الموقع</p>
                                    </div>
                                </div>
                                <div class="button-row">
                                    <button type="button" value="Next" class="next btn"> متابعة</button>
                                </div>
                            </div>

                            <div class=" div3 wizardContant ">
                                <h4>مرافق وخدمات</h4>
                                <p>بإمكانك الآن إطلاعنا عن بعض التفاصيل العامة حول مكان الإقامة الخاص بك، كالمرافق المتوفرة، والإنترنت، واللغات التي يتحدثها موظفوك</p>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="vl1">
                                            <div class="form-group">
                                                <label>موقف سيارات</label>
                                                <label>هل تتوفر مواقف السيارات للضيوف؟</label>
                                                <input type="text" name="" id="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="vl1">
                                            <div class="form-group">
                                                <label>الإفطار</label>
                                                <label>هل يتوفر الإفطار للضيوف؟</label>
                                                <input type="text" name="" id="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="vl1">
                                            <div class="form-group">
                                                <label>اللغات المتحدث بها</label>
                                                <label>ما اللغات التي تتحدث بها أنت أو موظفوك؟</label>
                                                <input type="text" name="" id="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="addLang">
                                            <img src="{{asset('image/add.png')}}">
                                            <p class="addLangText"> إضافة لغة أخري</p>

                                        </div>
                                    </div>
                                    <div class="col-md-9 facilitiesBlock ">
                                        <div class="vlFacil">
                                            <label>المرافق الرائجة بين الضيوف</label>
                                            <label>هذه أكثر المرافق التي يبحث عنها الضيوف عند بحثهم عن أماكن الإقامة</label>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group quesRadio">
                                                        <label class="radioFacilities" >
                                                            <input type="checkbox" name="key" value="value"  />
                                                            <span class="radiotextFacilities">واي فاي مجاني</span>
                                                        </label>
                                                        <label class="radioFacilities">
                                                            <input type="checkbox" name="key" value="another-value" />
                                                            <span class="radiotextFacilities">مطعم</span>
                                                        </label>
                                                        <label class="radioFacilities">
                                                            <input type="checkbox" name="key" value="another-value" />
                                                            <span class="radiotextFacilities">خدمة الغرف</span>
                                                        </label>

                                                        <label class="radioFacilities">
                                                            <input type="checkbox" name="key" value="another-value" />
                                                            <span class="radiotextFacilities">بار</span>
                                                        </label>
                                                        <label class="radioFacilities">
                                                            <input type="checkbox" name="key" value="another-value" />
                                                            <span class="radiotextFacilities">مركز عافية وسبا</span>
                                                        </label>
                                                        <label class="radioFacilities">
                                                            <input type="checkbox" name="key" value="another-value" />
                                                            <span class="radiotextFacilities">تكييف</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group quesRadio">
                                                        <label class="radioFacilities" >
                                                            <input type="checkbox" name="key" value="value"  />
                                                            <span class="radiotextFacilities">مكتب استقبال على مدار 24 ساعة</span>
                                                        </label>
                                                        <label class="radioFacilities">
                                                            <input type="checkbox" name="key" value="another-value" />
                                                            <span class="radiotextFacilities">ساونا</span>
                                                        </label>
                                                        <label class="radioFacilities">
                                                            <input type="checkbox" name="key" value="another-value" />
                                                            <span class="radiotextFacilities">مركز للياقة البدنية</span>
                                                        </label>

                                                        <label class="radioFacilities">
                                                            <input type="checkbox" name="key" value="another-value" />
                                                            <span class="radiotextFacilities">حديقة</span>
                                                        </label>
                                                        <label class="radioFacilities">
                                                            <input type="checkbox" name="key" value="another-value" />
                                                            <span class="radiotextFacilities">ملهى مائي</span>
                                                        </label>
                                                        <label class="radioFacilities">
                                                            <input type="checkbox" name="key" value="another-value" />
                                                            <span class="radiotextFacilities">مسبح</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group quesRadio">
                                                        <label class="radioFacilities" >
                                                            <input type="checkbox" name="key" value="value"  />
                                                            <span class="radiotextFacilities">تراس</span>
                                                        </label>
                                                        <label class="radioFacilities">
                                                            <input type="checkbox" name="key" value="another-value" />
                                                            <span class="radiotextFacilities">غرف لغير المدخنين</span>
                                                        </label>
                                                        <label class="radioFacilities">
                                                            <input type="checkbox" name="key" value="another-value" />
                                                            <span class="radiotextFacilities">خدمة نقل المطار</span>
                                                        </label>

                                                        <label class="radioFacilities">
                                                            <input type="checkbox" name="key" value="another-value" />
                                                            <span class="radiotextFacilities">غرف عائلية</span>
                                                        </label>
                                                        <label class="radioFacilities">
                                                            <input type="checkbox" name="key" value="another-value" />
                                                            <span class="radiotextFacilities">حوض استحمام ساخن/جاكوزي</span>
                                                        </label>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="button-row">
                                    <button type="button" value="Next" class="next btn"> متابعة</button>
                                </div>
                            </div>
                            <div class=" div4 wizardContant  ">
                                <h4>وسائل الراحة</h4>
                                <p style="text-align: initial; font-weight:500 ">لقد شارفت على الإنتهاء! نحتاج فقط لبضعة معلومات عن خيارات الأسرة الإضافية التي زودتنا بها، بالإضافة<br>  إلى أية مرافق أو مزايا معينة وخدمات تتوفر لديك</p>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="vl1">
                                            <div class="form-group">
                                                <label>خيارات الأسرة الإضافية</label>
                                                <label>هل يمكنك توفير أسرة إضافية؟</label>
                                                <label class="radioButton" >
                                                    <input type="radio" name="key" value="value" checked />
                                                    <span class="radioText">نعم</span>
                                                </label>
                                                <label class="radioButton">
                                                    <input type="radio" name="key" value="another-value" />
                                                    <span class="radioText">لا</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="vlrec">
                                            <label>وسائل الراحة</label>
                                            <label class="mostRecomLab">أخبرنا عن مرافق مكان إقامتك!</label>
                                            <span class="mostRecomspan">الأكثر طلباً من قِبل الضيوف</span>
                                            <div style="clear: both"></div>
                                            <div class="form-group mostRecom">

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group quesRadio">
                                                            <label class="radioFacilities" >
                                                                <input type="checkbox" name="key" value="value"  />
                                                                <span class="radiotextFacilities">تكييف</span>
                                                            </label>
                                                            <label class="radioFacilities">
                                                                <input type="checkbox" name="key" value="another-value" />
                                                                <span class="radiotextFacilities">شرفة</span>
                                                            </label>
                                                            <label class="radioFacilities">
                                                                <input type="checkbox" name="key" value="another-value" />
                                                                <span class="radiotextFacilities">إطلالة</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group quesRadio">
                                                            <label class="radioFacilities" >
                                                                <input type="checkbox" name="key" value="value"  />
                                                                <span class="radiotextFacilities"> حوض استحمام</span>
                                                            </label>
                                                            <label class="radioFacilities">
                                                                <input type="checkbox" name="key" value="another-value" />
                                                                <span class="radiotextFacilities">غلاية كهربائية</span>
                                                            </label>
                                                            <label class="radioFacilities">
                                                                <input type="checkbox" name="key" value="another-value" />
                                                                <span class="radiotextFacilities">تراس</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group quesRadio">
                                                            <label class="radioFacilities" >
                                                                <input type="checkbox" name="key" value="value"  />
                                                                <span class="radiotextFacilities">حوض سبا</span>
                                                            </label>
                                                            <label class="radioFacilities">
                                                                <input type="checkbox" name="key" value="another-value" />
                                                                <span class="radiotextFacilities">تلفزيون بشاشة مسطحة</span>
                                                            </label>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">

                                        <div class="displayEx">
                                            <p class="addLangText"> عرض جميع المرافق</p>
                                            <img src="{{asset('image/back%20(3).png')}}">

                                        </div>
                                    </div>
                                    <div class="col-md-9 facilitiesBlock ">
                                        <div class="vlrec">
                                            <label>المرافق الرائجة بين الضيوف</label>
                                            <label>هذه أكثر المرافق التي يبحث عنها الضيوف عند بحثهم عن أماكن الإقامة</label>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group quesRadio">
                                                        <label class="radioFacilities" >
                                                            <input type="checkbox" name="key" value="value"  />
                                                            <span class="radiotextFacilities">حمّالة ملابس</span>
                                                        </label>
                                                        <label class="radioFacilities">
                                                            <input type="checkbox" name="key" value="another-value" />
                                                            <span class="radiotextFacilities">منشر للغسيل</span>
                                                        </label>
                                                        <label class="radioFacilities">
                                                            <input type="checkbox" name="key" value="another-value" />
                                                            <span class="radiotextFacilities">سرير يمكن طويه</span>
                                                        </label>

                                                        <label class="radioFacilities">
                                                            <input type="checkbox" name="key" value="another-value" />
                                                            <span class="radiotextFacilities">مروحة</span>
                                                        </label>
                                                        <label class="radioFacilities">
                                                            <input type="checkbox" name="key" value="another-value" />
                                                            <span class="radiotextFacilities">مدفأة</span>
                                                        </label>
                                                        <label class="radioFacilities">
                                                            <input type="checkbox" name="key" value="another-value" />
                                                            <span class="radiotextFacilities">تدفئة</span>
                                                        </label>
                                                        <label class="radioFacilities">
                                                            <input type="checkbox" name="key" value="another-value" />
                                                            <span class="radiotextFacilities">أريكة</span>
                                                        </label>
                                                        <label class="radioFacilities">
                                                            <input type="checkbox" name="key" value="another-value" />
                                                            <span class="radiotextFacilities">عازل للصوت</span>
                                                        </label>
                                                        <label class="radioFacilities">
                                                            <input type="checkbox" name="key" value="another-value" />
                                                            <span class="radiotextFacilities">منطقة جلوس</span>
                                                        </label>
                                                        <label class="radioFacilities">
                                                            <input type="checkbox" name="key" value="another-value" />
                                                            <span class="radiotextFacilities">بطانية كهربائية</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group quesRadio">
                                                        <label class="radioFacilities" >
                                                            <input type="checkbox" name="key" value="value"  />
                                                            <span class="radiotextFacilities">سرير أريكة</span>
                                                        </label>
                                                        <label class="radioFacilities">
                                                            <input type="checkbox" name="key" value="another-value" />
                                                            <span class="radiotextFacilities">تكييف</span>
                                                        </label>
                                                        <label class="radioFacilities">
                                                            <input type="checkbox" name="key" value="another-value" />
                                                            <span class="radiotextFacilities">خزانة</span>
                                                        </label>

                                                        <label class="radioFacilities">
                                                            <input type="checkbox" name="key" value="another-value" />
                                                            <span class="radiotextFacilities">صندوق أمانات</span>
                                                        </label>
                                                        <label class="radioFacilities">
                                                            <input type="checkbox" name="key" value="another-value" />
                                                            <span class="radiotextFacilities">مدخل خاص</span>
                                                        </label>
                                                        <label class="radioFacilities">
                                                            <input type="checkbox" name="key" value="another-value" />
                                                            <span class="radiotextFacilities">ناموسية</span>
                                                        </label>
                                                        <label class="radioFacilities">
                                                            <input type="checkbox" name="key" value="another-value" />
                                                            <span class="radiotextFacilities">بلاط / أرضية رخامية</span>
                                                        </label>
                                                        <label class="radioFacilities">
                                                            <input type="checkbox" name="key" value="another-value" />
                                                            <span class="radiotextFacilities">مكواة بناطيل</span>
                                                        </label>
                                                        <label class="radioFacilities">
                                                            <input type="checkbox" name="key" value="another-value" />
                                                            <span class="radiotextFacilities">أرضيات خشبية</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group quesRadio">
                                                        <label class="radioFacilities" >
                                                            <input type="checkbox" name="key" value="value"  />
                                                            <span class="radiotextFacilities">أرض مغطاة بالسجاد</span>
                                                        </label>
                                                        <label class="radioFacilities">
                                                            <input type="checkbox" name="key" value="another-value" />
                                                            <span class="radiotextFacilities">غرفة ملابس</span>
                                                        </label>
                                                        <label class="radioFacilities">
                                                            <input type="checkbox" name="key" value="another-value" />
                                                            <span class="radiotextFacilities">أسرّة طويلة (أطول من مترين)</span>
                                                        </label>

                                                        <label class="radioFacilities">
                                                            <input type="checkbox" name="key" value="another-value" />
                                                            <span class="radiotextFacilities">مرافق كي الملابس</span>
                                                        </label>
                                                        <label class="radioFacilities">
                                                            <input type="checkbox" name="key" value="another-value" />
                                                            <span class="radiotextFacilities">مكواة</span>
                                                        </label>
                                                        <label class="radioFacilities">
                                                            <input type="checkbox" name="key" value="another-value" />
                                                            <span class="radiotextFacilities">تتوفر غرفة / غرف متصلة</span>
                                                        </label>
                                                        <label class="radioFacilities">
                                                            <input type="checkbox" name="key" value="another-value" />
                                                            <span class="radiotextFacilities">مضادة للحساسية</span>
                                                        </label>
                                                        <label class="radioFacilities">
                                                            <input type="checkbox" name="key" value="another-value" />
                                                            <span class="radiotextFacilities">مكتب</span>
                                                        </label>
                                                        <label class="radioFacilities">
                                                            <input type="checkbox" name="key" value="another-value" />
                                                            <span class="radiotextFacilities">أدوات تنظيف</span>
                                                        </label>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="button-row">
                                    <button type="button" value="Next" class="next btn"> متابعة</button>
                                </div>
                            </div>
                            <div class="div5 wizardContant ">
                                <h4 style="font-weight: 600">صور مكان الإقامة</h4>
                                <p class="picTextadd">تشجع الصور الرائعة الضيوف على عيش تجربة كاملة في مكان الإقامة الخاص بك، لذا حمّل الصور ذات الدقة العالية التي تبرز كل ما يقدمه مكان  <br> الإقامة. سنقوم بعرض هذه الصور في صفحة مكان الإقامة الخاص بك على موقع موقعنا الإلكتروني</p>
                                <div class="row">
                                    <div class="col-md-6 uploadImgSec vlrec" >
                                        <p>قم بتحميل صورة واحدة علي الأقل </p>
                                        <span>ستتمكن أيضا من تحميل المزيد بعد إكمال عملية التسجيل</span>
                                        <div class="addimgDiv">
                                            <button class="btn">أضف صور</button>
                                        </div>
                                    </div>
                                    <div class="col-md-6 ">
                                        <div class="note4im">
                                            <p> بعد الانتهاء من التسجيل، سيظل بإمكانك إجراء تغييرات على عملية تسجيل مكان إقامتك قبل ظهوره على الموقع</p>
                                        </div>
                                    </div>
                                    <div class="col-md-12 ">
                                        <div class="warningNote">
                                            <h5>ليس لديك أية صور مهنية؟ لا عليك</h5>
                                            <p>- نصيحة قيّمة! يحب الضيوف الصور! إليك بعض النصائح حول كيفية التقاط صور رائعة لمكان الإقامة الخاص بكيمكنك استخدام: (هاتف سمارت - كاميرا رقمية)</p>
                                            <p style="display: inline">- نصيحة قيّمة! </p>
                                            <p style="display: inline" class="warText">يحب الضيوف الصور! إليك بعض النصائح حول كيفية التقاط صور رائعة لمكان الإقامة الخاص بك</p>
                                            <div style="clear: both"></div>
                                            <p>-إذا كنت لا تعرف من التقط صورة معينة فمن الأفضل عدم استخدامها. لا تستخدم سوى الصور التي تمتلك بنفسك حقوق طبعها ونشرها، أو كان لديك موافقة من المصور على استخدامها</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="button-row">
                                    <button type="button" value="Next" class="next btn"> متابعة</button>
                                </div>
                            </div>
                            <div class="div6 wizardContant ">
                                <h4>السياسات</h4>
                                <p class="policesMainText">حدد بعض السياسات الأساسية. هل تسمح باصطحاب الأطفال أو الحيوانات الأليفة؟ ما مدى سماحك وشروطك في حالات الإلغاء؟</p>

                                <div class="vlrec">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>حالات الإلغاء</label>
                                            <label>كم عدد الليالي مقدماً التي يمكن للضيوف الإلغاء دون رسوم؟</label>
                                            <div class="form-group">
                                                <input type="text" name="" id="" class="form-control">
                                            </div>
                                            <label>أو سيدفع الضيوف 100</label>
                                            <div class="form-group">
                                                <input type="text" name="" id="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <p>يجب على الضيف الإلغاء بحلول الساعة 6:00 مساءً من يوم الوصول أو دفع 100٪ من سعر الإقامة الكاملة <br>يرجى الملاحظة: ستتمكن من اجراء التعديلات على السياسات الخاصة بك في وقت لاحق. وسيساعدك هذا على أن تبدأ في وضعها</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="vlrec">
                                    <div class="col-md-8">
                                        <p style="display: inline">تغطية الحجوزات التي تتم عن طريق الخطأ</p>
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider round"></span>
                                        </label>
                                        <p class="switchtext">نعم</p>
                                        <div style="clear: both"></div>
                                        <p class="switchtext2">لتوفير الوقت في التعامل مع الحجوزات التي يتم إجراؤها بالخطأ، فإننا نتنازل تلقائياً عن رسوم الإلغاء للضيوف الذين يلغون خلال الـ 24 ساعة لأولى من الحجز. يمكنك تغيير هذه الفترة الزمنية في وقت لاحق على منصة إدارة مكان الإقامة الخاص بك</p>
                                    </div>
                                </div>
                                <div class="vlrec">
                                    <label>تسجيل الوصول</label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>من</label>
                                            <div class="form-group">
                                                <input type="text" name="" id="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label> الى</label>
                                            <div class="form-group">
                                                <input type="text" name="" id="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vlrec">
                                    <label>تسجيل المغادرة</label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>من</label>
                                            <div class="form-group">
                                                <input type="text" name="" id="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label> الى</label>
                                            <div class="form-group">
                                                <input type="text" name="" id="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vlrec">
                                    <div class="form-group quesRadio allo childallo">

                                        <p class="" >الأطفال</p>
                                        <p> هل يمكن استضافة الأطفال؟ (يمكنك تحديد الأعمار والأسعار لاحقاً)</p>
                                        <label class="radioButton" >
                                            <input type="radio" name="key" value="value" checked />
                                            <span class="radioText">نعم</span>
                                        </label>
                                        <label class="radioButton">
                                            <input type="radio" name="key" value="another-value" />
                                            <span class="radioText">لا</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="vlrec">
                                    <div class="form-group quesRadio allo animalallo">

                                        <p class="animaltext" >حيوانات أليفة</p>
                                        <span class="animalSpan">يرغب بعض الضيوف بالسفر بصحبة حيواناتهم الأليفة. يرجى الإشارة فيما إذا كنت تسمح بإقامة الحيوانات الأليفة وفيما إذا كان هناك أية تكاليف مترتبة على ذلك</span>
                                        <p> هل تسمح بالحيوانات الأليفة؟</p>
                                        <label class="radioButton" >
                                            <input type="radio" name="key" value="value" checked />
                                            <span class="radioText">نعم</span>
                                        </label>
                                        <label class="radioButton">
                                            <input type="radio" name="key" value="another-value" />
                                            <span class="radioText">لا</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="button-row">
                                    <button type="button" value="Next" class="next btn"> متابعة</button>
                                </div>
                            </div>
                            <div class="div7 wizardContant ">

                                <h4>الدفعات</h4>
                                <p>قم بتحديد أنواع عمليات الدفع التي تقبلها، وتفاصيل الضرائب، والخيارات الأخرى كالرسوم الإضافية.</p>
                                <div class="vlrec">
                                    <div class="row">
                                        <div class="col-md-6">

                                            <label>خيارات الدفع المتاحة للضيوف</label>
                                            <label>هل يمكنك الخصم من البطاقات الائتمانية في مكان الإقامة؟</label>
                                            <label class="radioButton" >
                                                <input type="radio" name="key" value="value" checked />
                                                <span class="radioText">نعم</span>
                                            </label>
                                            <label class="radioButton">
                                                <input type="radio" name="key" value="another-value" />
                                                <span class="radioText">لا</span>
                                            </label>
                                            <label>لا مشكلة! اسمح لضيوفك بالدفع عبر الإنترنت</label>
                                            <label>يمكنك استلام المدفوعات من الضيوف باستخدام خدمة الدفع عبر موقعنا إليك كيفية العمل</label>
                                            <div class="row">
                                                <div class="col-md-4 paymentIns">
                                                    <div class="paymentCir">
                                                        <img src="{{asset('image/online-booking.png')}}">
                                                    </div>
                                                    <span> 1-يقوم المستخدم بإجراء الحجز</span>
                                                </div>
                                                <div class="col-md-4 paymentIns">
                                                    <div class="paymentCir">
                                                        <img src="{{asset('image/online-payment.png')}}">
                                                    </div>
                                                    <span>2-يقوم موقعنا بتسهيل دفعتك</span>
                                                </div>
                                                <div class="col-md-4 paymentIns">
                                                    <div class="paymentCir">
                                                        <img src="{{asset('image/payment-method.png')}}">
                                                    </div>
                                                    <span>3-سيتم الدفع لك</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">


                                        </div>
                                    </div>
                                </div>
                                <div class="vlrec commission">
                                    <div class="col-md-6">
                                        <label>دفعات العمولة</label>
                                        <label>سندفع لك كل شهر مقابل كافة الحجوزات المكتملة في الشهر السابق مع خصم قيمة العمولة سنرسل لك فاتورة شهرية تتضمن بيان بهذا التحويل المالي لمرجعيتك</label>
                                        <div class="percent">
                                            <div class="dot">
                                            </div>
                                            <label class="dotText">نسبة العمولة</label>
                                            <span class="dotspanPer">%15</span>
                                        </div>
                                        <div class="percent">
                                            <div class="dot">
                                            </div>
                                            <label class="dotText">الرسوم الخاصة بالبنك</label>
                                            <span class="dotspanPer">%2.4</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="vlrec">
                                    <div class="row">
                                        <div class="col-md-4 nameOnRec">
                                            <label>يرجى تحديد الاسم لعرضه على الفاتورة (مثال: اسم قانوني، اسم الشركة)</label>
                                            <div class="form-group">
                                                <input type="text" name="" id="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vlrec">
                                    <div class="form-group addresCon">
                                        <label >هل عنوان جهة الإستلام هو نفس عنوان مكان الإقامة الخاص بكم؟</label>
                                        <label class="radioButton" >
                                            <input type="radio" name="key" value="value"  />
                                            <span class="radioText">نعم</span>
                                        </label>
                                        <label class="radioButton">
                                            <input type="radio" name="key" value="another-value" />
                                            <span class="radioText">لا</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-10 finalizeRegBlock">
                                        <h5>شارفت على الانتهاء، إليك بعض النقاط الأخيرة لتأخذها بعين الاعتبار</h5>
                                        <h6 class="bold">توافرك للضيوف</h6>
                                        <p>بهدف مساعدتك على البدء في الكسب، نحن نجعل مكان الإقامة الخاص بك متاحاً للحجوزات تلقائياً لمدة الـ 18 شهراً القادمة. إذا كنت ترغب في إجراء تغييرات على توافرك قبل إتاحة مكان الإقامة، يمكنك اختيار "أتمم التسجيل واستقبل الحجوزات لاحقاً". يمكن أيضاً تعديل توافرك بعد أن تصبح متاحاً لتلقي الحجوزات</p>
                                        <h6 class="bold">يرجى الضغط في المربعات التالية، لاستكمال عملية تسجيلك</h6>
                                        <div class="form-group ruleCheckboxmain">
                                            <label class="ruleCheckbox" >
                                                <input type="checkbox" name="key" value="value"  />
                                                <p class="ruleCheckbox">
                                                    أشهد بأن هذا مكان إقامة تجاري شرعي مع كافة التراخيص والتصاريح اللازمة، والتي يمكن إبرازها عند الطلب من المرة الأولى. تحتفظ بالحق في التحقق والتحقيق في أي من التفاصيل التي تقدمها في نموذج التسجيل هذا</p>
                                            </label>
                                            <label class="ruleCheckbox">
                                                <input type="checkbox" name="key" value="another-value" />
                                                <p class="ruleCheckbox">لقرأت وقبلت ووافقت على شروط التسليم العامة وبيان الخصوصية</p>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="sumitdiv">
                                        <button type="submit" class="submitapplication btn">اتمم التسجيل واستقبل الحجوزرات الآن</button>
                                        <p>اتمم التسجيل واستقبل الحجوزرات لاحقاً</p>
                                        <span>اقتربت على الانتهاء! بإمكانك دائماً تغيير المعلومات حتى بعد إكمال تسجيلك</span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="blueCorner"></div>
<div class="LightblueCorner"></div>
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('js/js.js')}}"></script>
</body>
</html>
