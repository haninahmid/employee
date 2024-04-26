<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        nav {
            background-color: #f2f2f2;
            padding: 10px;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        li {
            margin-right: 10px;
        }

        li:last-child {
            margin-right: 0;
        }

        a {
            text-decoration: none;
            color: black;
            padding: 5px 10px;
        }
    </style>
</head>

<body dir="rtl" style="    text-align: right;">
    <nav>
        <ul>
            <li style="padding-right: 534px;">
                <a href="{{ route('logout') }}">تسجيل الخروج
                    <img style="width: 47px; " src="{{ asset('assets/images/switch.png') }}" alt="">
                </a>
            </li>
        </ul>
    </nav>
    <br>
    <div class="container">
        <div class="row" style="justify-content: center;">
            <div style="text-align: -webkit-center;">
                <h4>ليبيا</h4>
                <h4>وزارة المالية</h4>
                <h4>مصلحة الظرايب</h4>
                <div
                    style="    border-bottom: 4px solid black;
                    border-right: 4px solid;
                    padding-bottom: 5px;
                    padding-right: 41px;
                    padding-left: 47px;
                    ">
                    <h4 style="font-size: 40px;"> بطاقة موظف</h4>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-9">
                <div class="row">
                    <div class="col-6">
                        <div style="border: 2px solid black; padding: 10px;">
                            <h4> الرقم التسلسلي : {{ $employee->id_emp }}</h4>
                        </div>
                    </div>
                    <div class="col-6">
                        <div style="border: 2px solid black; padding: 10px;">
                            <h4> الرقم المالي : {{ $employee->emp_number }}</h4>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-12">
                        <div style="border: 2px solid black; padding: 10px;">
                            <h4> اسم الموظف :  {{ $employee->name_emp }} </h4>
                        </div>
                    </div>
                </div>
                <div class="row" style=" padding-right: 277px;     padding-top: 16px;  justify-content: center;">
                    <div
                        style="    border-bottom: 4px solid black;
                        border-right: 4px solid;
                        padding-bottom: 5px;
                        padding-right: 41px;
                        padding-left: 47px;
                        ">
                        <h4 style="font-size: 22px;"> بطاقة موظف</h4>
                    </div>
                </div>
            </div>
            <div class="col-3" style="direction: ltr; padding-left: 0;">
                <div style="width: 200px;height: 200px; border: 2px solid black; background-image: url({{ asset('assets/images/do.jpg') }}); background-size: 197px; background-repeat: no-repeat;">
                    {{-- <img src="{{ asset('assets/images/do.jpg') }}" alt=""> --}}
                </div>
            </div>
        </div>
        <div class="row" style="border: 2px solid black; margin-top: 5px;">
            <div class="col-2" style=" border-left: 2px solid; text-align: -webkit-center;    background-color: #bfbfbf;">
                <div> اسم الام </div>
            </div>
            <div class="col-6">
                <div style="    text-align: center;">{{ $employee->mother_name }}</div>
            </div>
            <div class="col-2" style=" border-left: 2px solid; text-align: -webkit-center; border-right: 2px solid;    background-color: #bfbfbf;">
                <div> الجنس</div>
            </div>
            <div class="col-2">
                <div style="    text-align: center;"> {{ $employee->num_sex == 0 ? 'ذكر': 'انثى'  }}</div>
            </div>
        </div>
        <div class="row" style="border: 2px solid black; margin-top: 5px;">
            <div class="col-2" style=" border-left: 2px solid; text-align: -webkit-center;    background-color: #bfbfbf;">
                <div> الجنسية</div>
            </div>
            <div class="col-3">
                <div style="    text-align: center;"> {{ $employee->nationality->nationality }} </div>
            </div>
            <div class="col-2" style=" border-left: 2px solid; text-align: -webkit-center; border-right: 2px solid;    background-color: #bfbfbf;">
                <div> الحالة الاجتماعية</div>
            </div>
            <div class="col-2">
                <div style="    text-align: center;"> </div>
            </div>
            <div class="col-2" style=" border-left: 2px solid; text-align: -webkit-center; border-right: 2px solid;    background-color: #bfbfbf;">
                <div> عدد الابناء</div>
            </div>
            <div class="col-1">
                <div style="    text-align: center;"> {{ $employee->sum_sons }} </div>
            </div>
        </div>
        <div class="row" style="border: 2px solid black; margin-top: 5px;">
            <div class="col-2" style=" border-left: 2px solid; text-align: -webkit-center;    background-color: #bfbfbf;">
                <div>  تاريخ الميلاد </div>
            </div>
            <div class="col-4">
                <div style="    text-align: center;"> {{ date(' d/m/Y', strtotime($employee->birth_date)) }}</div>
            </div>
            <div class="col-2" style=" border-left: 2px solid; text-align: -webkit-center; border-right: 2px solid;    background-color: #bfbfbf;">
                <div> مكان الميلاد</div>
            </div>
            <div class="col-4">
                <div style="    text-align: center;"> {{ $employee->birth_place }}</div>
            </div>
        </div>
        <div class="row" style="border: 2px solid black; margin-top: 5px; ">
            <div class="col-2" style=" border-left: 2px solid; text-align: -webkit-center;    background-color: #bfbfbf;">
                <div>  رقم البطاقة </div>
            </div>
            <div class="col-4">
                <div style="    text-align: center;"> {{ $employee->num_card }}</div>
            </div>
            <div class="col-2" style=" border-left: 2px solid; text-align: -webkit-center; border-right: 2px solid;    background-color: #bfbfbf;">
                <div> مكان صدورها</div>
            </div>
            <div class="col-4">
                <div style="    text-align: center;"> {{ $employee->date_card }}</div>
            </div>
        </div>
        <div class="row" style="border: 2px solid black; margin-top: 5px;">
            <div class="col-2" style=" border-left: 2px solid; text-align: -webkit-center;    background-color: #bfbfbf;">
                <div>  المؤهل العلمي </div>
            </div>
            <div class="col-4">
                <div style="    text-align: center;"> {{ $employee->qualState->qual }}</div>
            </div>
            <div class="col-2" style=" border-left: 2px solid; text-align: -webkit-center; border-right: 2px solid;    background-color: #bfbfbf;">
                <div> تاريخ الحصول عليه</div>
            </div>
            <div class="col-4">
                <div style="    text-align: center;"> {{ date(' d/m/Y', strtotime($employee->qual_date)) }}</div>
            </div>
        </div>
        <div class="row" style="border: 2px solid black; margin-top: 5px;">
            <div class="col-2" style=" border-left: 2px solid; text-align: -webkit-center;    background-color: #bfbfbf;">
                <div>  المجال العلمي </div>
            </div>
            <div class="col-4">
                <div style="    text-align: center;"> {{ $employee->sciencesType->sciences }}</div>
            </div>
            <div class="col-2" style=" border-left: 2px solid; text-align: -webkit-center; border-right: 2px solid;    background-color: #bfbfbf;">
                <div> التخصص </div>
            </div>
            <div class="col-4">
                <div style="    text-align: center;"> {{ $employee->spec_num }}</div>
            </div>
        </div>
        <div class="row" style="border: 2px solid black; margin-top: 5px;">
            <div class="col-2" style=" border-left: 2px solid; text-align: -webkit-center;    background-color: #bfbfbf;">
                <div>  رقم جواز السفر </div>
            </div>
            <div class="col-4">
                <div style="    text-align: center;"> {{ $employee->pass_num }}</div>
            </div>
            <div class="col-2" style=" border-left: 2px solid; text-align: -webkit-center; border-right: 2px solid;    background-color: #bfbfbf;">
                <div> مكان صدوره</div>
            </div>
            <div class="col-4">
                <div style="    text-align: center;"> {{ $employee->pass_place }} </div>
            </div>
        </div>
        <div class="row" style="border: 2px solid black; margin-top: 5px;">
            <div class="col-2" style=" border-left: 2px solid; text-align: -webkit-center;    background-color: #bfbfbf;">
                <div>  رقم الهاتف </div>
            </div>
            <div class="col-2">
                <div style="    text-align: center;"> {{ $employee->phone_emp }}</div>
            </div>
            <div class="col-2" style=" border-left: 2px solid; text-align: -webkit-center; border-right: 2px solid;    background-color: #bfbfbf;">
                <div>  العنوان </div>
            </div>
            <div class="col-6">
                <div style="    text-align: center;">  {{ $employee->addr_emp }}</div>
            </div>
        </div>
        <br>

        <div class="row" style="     padding-top: 16px;  justify-content: center;">
            <div
                style="    border-bottom: 4px solid black;
                border-right: 4px solid;
                padding-bottom: 5px;
                padding-right: 41px;
                padding-left: 47px;
                ">
                <h4 style="font-size: 22px;">  البيانات الوظيفية </h4>
            </div>
        </div>

        <div class="row" style="border: 2px solid black; margin-top: 5px; ">
            <div class="col-2" style=" border-left: 2px solid; text-align: -webkit-center;    background-color: #bfbfbf;">
                <div>  نوع التوظيف </div>
            </div>
            <div class="col-4">
                <div style="    text-align: center;"> {{ $employee->empState->state_name }}</div>
            </div>
            <div class="col-2" style=" border-left: 2px solid; text-align: -webkit-center; border-right: 2px solid;    background-color: #bfbfbf;">
                <div> تاريخ التوضيف</div>
            </div>
            <div class="col-4">
                <div style="    text-align: center;"> </div>
            </div>
        </div>
        <div class="row" style="border: 2px solid black; margin-top: 5px; ">
            <div class="col-2" style=" border-left: 2px solid; text-align: -webkit-center;    background-color: #bfbfbf;">
                <div>  تاريخ المباشرة </div>
            </div>
            <div class="col-4">
                <div style="    text-align: center;"> {{ date('Y', strtotime($employee->functionary->begin_date)) }}</div>
            </div>
            <div class="col-2" style=" border-left: 2px solid; text-align: -webkit-center; border-right: 2px solid;    background-color: #bfbfbf;">
                <div> الدرجة الحالية</div>
            </div>
            <div class="col-4">
                <div style="    text-align: center;"> {{ $employee->functionary->grade_num  }}  </div>
            </div>
        </div>
        <div class="row" style="border: 2px solid black; margin-top: 5px; ">
            <div class="col-2" style=" border-left: 2px solid; text-align: -webkit-center;    background-color: #bfbfbf;">
                <div>  تاريخ الدرجة  </div>
            </div>
            <div class="col-4">
                <div style="    text-align: center;"> {{ date('Y', strtotime($employee->functionary->functino_g_date)) }} </div>
            </div>
            <div class="col-2" style=" border-left: 2px solid; text-align: -webkit-center; border-right: 2px solid;    background-color: #bfbfbf;">
                <div> المركز الوظيفي</div>
            </div>
            <div class="col-4">
                <div style="    text-align: center;"> رئيس وحدة </div>
            </div>
        </div>
        <div class="row" style="border: 2px solid black; margin-top: 5px; ">
            <div class="col-2" style=" border-left: 2px solid; text-align: -webkit-center;    background-color: #bfbfbf;">
                <div>   الادارة </div>
            </div>
            <div class="col-4">
                <div style="    text-align: center;"> {{ $employee->functionary->admin ? $employee->functionary->admin->admin_name :  '' }}</div>
            </div>
            <div class="col-2" style=" border-left: 2px solid; text-align: -webkit-center; border-right: 2px solid;    background-color: #bfbfbf;">
                <div>  المكتب</div>
            </div>
            <div class="col-4">
                <div style="    text-align: center;"> {{ $employee->functionary->office ? $employee->functionary->office->office_name  : ''}}</div>
            </div>
        </div>
        <div class="row" style="border: 2px solid black; margin-top: 5px; ">
            <div class="col-2" style=" border-left: 2px solid; text-align: -webkit-center;    background-color: #bfbfbf;">
                <div>  القسم</div>
            </div>
            <div class="col-4">
                <div style="    text-align: center;"> {{ $employee->functionary->agency ? $employee->functionary->agency->agency_name  : ''}}</div>
            </div>
            <div class="col-1" style=" border-left: 2px solid; text-align: -webkit-center; border-right: 2px solid;    background-color: #bfbfbf;">
                <div>  الوظيفة</div>
            </div>
            <div class="col-4">
                <div style="    text-align: center;"> {{ $employee->functionary->job_nature }}</div>
            </div>
        </div>
        <div class="row" style="border: 2px solid black; margin-top: 5px; ">
            <div class="col-2" style=" border-left: 2px solid; text-align: -webkit-center;    background-color: #bfbfbf;">
                <div>   رصيد الاجازات </div>
            </div>
            <div class="col-4">
                <div style="    text-align: center;"> {{ $employee->functionary->sum_furl  }}</div>
            </div>
            <div class="col-2" style=" border-left: 2px solid; text-align: -webkit-center; border-right: 2px solid;    background-color: #bfbfbf;">
                <div>    لغاية تاريخ</div>
            </div>
            <div class="col-4">
                <div style="    text-align: center;"> {{ date(' d/m/Y', strtotime($employee->functionary->date_furl)) }}</div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
</body>

</html>
