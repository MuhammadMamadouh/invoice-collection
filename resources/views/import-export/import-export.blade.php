@extends('layouts.dashboard.app')
@section('content')


<!--navbar-site-->
<section class="m-group mt-3 mb-3">
    <div class="container">
        <div class="t-manage text-center text-capitalize">
            <p>{{__('Import and export your billing information')}}</p>
        </div>
        <div class="router-pages text-center mt-3 mb-2">
            <a href="settings-import-export-data.html" class="scenarios-active p-2"><span>
                <i class="fa-solid fa-download"></i></span> Manual upload « Smart Upload »</a>
            <a href=""><span><i class="fa-solid fa-rotate"></i></span> Automatic upload </a>
            <a href="settingHistory.html"><span><i class="fa-solid fa-building"></i></span> History of imports</a>
            <a href="settingUsers.html"><span><i class="fa-solid fa-download"></i></span> Export your data</a>
        </div>
    </div>

</section>

<!--select the-file-->

<div class="s-file text-capitalize">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <p class="text-capitalize mt-3 mb-3 text-center"><strong>Select the file to import</strong>
                    <span>(.csv or
                        .txt or .xls):</span></hp>
                <form action="{{route('import')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="c-files mt-3 mb-3 text-center">
                        <input type="file" name="file">
                    </div>

                    <div class="files-cotians mt-3 mb-3 ">
                        <h5 class="mt-3 mb-3 text-center">{{__('The file contains')}} :</h5>
                        <div class="labels d-flex">
                            @foreach ($ExcelItemTypes as $type)

                            <div class="checks-1 d-flex">
                                <input type="radio" class="my-3 me-1" name="type_of_data" id="Items" required value="{{$type['value']}}"
                                    ng-model="notification.checked">
                                <label for="Items" class="my-3 "> <strong>{{__($type['name'])}}</strong></label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="after-check mt-5 mb-">
                        <p class="text-center">After clicking on Submit, you can set up the import of these data.
                        </p>
                    </div>
                    <div class="submit-button text-center mt-3 mb-3">
                        <button class=" btn btn-primary "
                        {{-- onclick="showTable()" --}}
                        ><i class="fa-solid fa-check"></i> Submit
                        </but<button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<div class="links-but text-center mt-5 mb-5 ">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <a href="#" class="">How to import your data manually?  </a>
            </div>
            <div class="col-6">
                <a href="#"> How to create your import files with Excel?</a>
            </div>
        </div>
    </div>
</div>
<div class="this-tabels d-none">
    <div class="container-fluid">
        <div class="table-import mt-3 mb-3 d-flex justify-content-around gap-5">
            <div class="import-value" style="font-size: 13.7px;">import opiton:
                <select class="select-import mx-3 " name="nbJoursExpiration">
                    <option value="" selected>UTF-8 (Unicode / US format)</option>
                    <option value="ISO-8859-1">ISO-8859-1 (Western European format)</option>
                    <option value="ISO-8859-2">ISO-8859-2 (Central European format)</option>
                    <option value="ISO-8859-3">ISO-8859-3 (South European format)</option>
                    <option value="ISO-8859-4">ISO-8859-4 (North European format)</option>
                    <option value="ISO-8859-5">ISO-8859-5 (Cyrillic format)</option>
                    <option value="ISO-8859-6">ISO-8859-6 (Arabic format)</option>
                    <option value="ISO-8859-7">ISO-8859-7 (Greek format)</option>
                    <option value="ISO-8859-8">ISO-8859-8 (Hebrew format)</option>
                    <option value="ISO-8859-9">ISO-8859-9 (Turkish format)</option>
                    <option value="ISO-8859-10">ISO-8859-10 (Nordic format)</option>
                    <option value="ISO-8859-13">ISO-8859-13 (Baltic format)</option>
                    <option value="ISO-8859-14">ISO-8859-14 (Celtic format)</option>
                    <option value="ISO-8859-15">ISO-8859-15 (NEW Western European format)</option>
                    <option value="ISO-8859-16">ISO-8859-16 (Romanian format)</option>
                    <option value="ISO-2022-JP">ISO-2022-JP</option>
                    <option value="UTF-7">UTF-7</option>
                    <option value="ASCII">ASCII</option>
                    <option value="EUC-JP">EUC-JP</option>
                    <option value="EUC-KR">EUC-KR</option>
                    <option value="SJIS">SJIS</option>
                    <option value="EUCJP-WIN">EUCJP-WIN</option>
                    <option value="SJIS-WIN">SJIS-WIN</option>
                    <option value="JIS">JIS</option>
                    <option value="WINDOWS-1252">WINDOWS-1252</option>
                    <option value="WINDOWS-1251">WINDOWS-1251</option>
                    <option value="BIG-5">BIG-5</option>
                    <option value="KOI8-R">KOI8-R</option>
                </select> clear automatically items:
                <input class="ms-3" type="radio" for="" name="yes" id="yes">
                <label>yes</label>
                <input class="ms-3" type="radio" for="" name="yes" id="yes">
                <label for="">no</label>
            </div>
        </div>
        <div class="check-imports text-center">
            <h5>check the association of column and click on: <a href="#">import</a></h5>
        </div>
        <div
            class="titles-tables d-flex justify-content-center align-items-center text-capitalize flex-wrap mt-3 mb-3 ">
            <p class=""><span class="span-tab">?</span>required column</p>
            <h6>item type</h6>
            <span>+</span>
            <h6>trans no.</h6>
            <span>+</span>
            <h6>company / company code</h6>
            <span>+</span>
            <h6>iuess data</h6>
            <span>+</span>
            <h6>due data</h6>
            <span>+</span>
            <h6>intial amount inc.tax</h6>
        </div>

        <div class="start-tabel">
            <div class="container-fluid mt-5">
                <table class="table  table-bordered">
                    <thead class=" text-center">
                        <tr
                            style="color: #fff; background:#0d6efd; border: 2px solid#0d6efd; border-bottom: 2px solid #aaa1a1;">
                            <th>#</th>
                            <th>soruce name </th>
                            <th class="wide-column">no</th>
                            <th>name</th>
                            <th>reponsibility center</th>
                            <th>loaction code</th>
                            <th>payment terms </th>
                            <th>credit limit (lcy)</th>
                            <th>blocked</th>
                            <th>phone no.</th>
                            <th>salesperson code</th>
                    </thead>
                    <tbody>
                        <tr style=" color: #fff; background: #0d6efd; border: 2px solid #0d6efd;">
                            <td></td>
                            <td><select name="?" id="" style="width: 100%;">
                                    <option value="">?</option>
                                    <option value="">2</option>
                                </select></td>
                            <td><select name="?" id="" style="width: 100%;">
                                    <option value="">?</option>
                                    <option value="">2</option>
                                </select></td>
                            <td><select name="?" id="" style="width: 100%;">
                                    <option value="">?</option>
                                    <option value="">2</option>
                                </select></td>
                            <td><select name="?" id="" style="width: 100%;">
                                    <option value="">?</option>
                                    <option value="">2</option>
                                </select></td>
                            <td><select name="?" id="" style="width: 100%;">
                                    <option value="">?</option>
                                    <option value="">2</option>
                                </select></td>
                            <td><select name="?" id="" style="width: 100%;">
                                    <option value="">?</option>
                                    <option value="">2</option>
                                </select></td>
                            <td><select name="?" id="" style="width: 100%;">
                                    <option value="">?</option>
                                    <option value="">2</option>
                                </select></td>
                            <td><select name="?" id="" style="width: 100%;">
                                    <option value="">?</option>
                                    <option value="">2</option>
                                </select></td>
                            <td><select name="?" id="" style="width: 100%;">
                                    <option value="">?</option>
                                    <option value="">2</option>
                                </select></td>
                            <td><select name="?" id="" style="width: 100%;">
                                    <option value="">?</option>
                                    <option value="">2</option>
                                </select></td>
            </div>
            </tr>
            <tr>
                <td>2</td>
                <td>deewan</td>
                <td>c000001</td>
                <td style="width: 25%">grand chairty جمعية الوفد الخيرية للخدمات الاجتماعية</td>
                <td>other</td>
                <td></td>
                <td>cash</td>
                <td>0</td>
                <td>all</td>
                <td></td>
                <td>113</td>
            </tr>
            <tr>
                <td>3</td>
                <td>deewan</td>
                <td>c000001</td>
                <td style="width: 25%">grand chairty جمعية الوفد الخيرية للخدمات الاجتماعية</td>
                <td>Enterprise</td>
                <td></td>
                <td>cash</td>
                <td>0</td>
                <td>all</td>
                <td></td>
                <td>113</td>
            </tr>
            <tr>
                <td>4</td>
                <td>deewan</td>
                <td>c000001</td>
                <td style="width: 25%">grand chairty جمعية الوفد الخيرية للخدمات الاجتماعية</td>
                <td>Enterprise</td>
                <td></td>
                <td>cash</td>
                <td>0</td>
                <td>all</td>
                <td></td>
                <td>113</td>
            </tr>
            <tr>
                <td>5</td>
                <td>deewan</td>
                <td>c000001</td>
                <td style="width: 25%">grand chairty جمعية الوفد الخيرية للخدمات الاجتماعية</td>
                <td>Enterprise</td>
                <td></td>
                <td>cash</td>
                <td>0</td>
                <td>all</td>
                <td></td>
                <td>113</td>
            </tr>
            <tr>
                <td>6</td>
                <td>deewan</td>
                <td>c000001</td>
                <td style="width: 25%">grand chairty جمعية الوفد الخيرية للخدمات الاجتماعية</td>
                <td>Enterprise</td>
                <td></td>
                <td>cash</td>
                <td>0</td>
                <td>all</td>
                <td></td>
                <td>113</td>
            </tr>

            <tr>
                <td>7</td>
                <td>deewan</td>
                <td>c000001</td>
                <td style="width: 25%;">Mohamed Adel محمد عادل</td>
                <td>Enterprise</td>
                <td></td>
                <td>cash</td>
                <td>0</td>
                <td>all</td>
                <td></td>
                <td>113</td>
            </tr>
            <tr>
                <td>8</td>
                <td>deewan</td>
                <td>c000001</td>
                <td style="width: 25%;">Mohamed Adel محمد عادل</td>
                <td>Enterprise</td>
                <td></td>
                <td>cash</td>
                <td>0</td>
                <td>all</td>
                <td></td>
                <td>113</td>
            </tr>
            <tr>
                <td>9</td>
                <td>deewan</td>
                <td>c000001</td>
                <td style="width: 25%;">Mohamed Adel محمد عادل</td>
                <td>Enterprise</td>
                <td></td>
                <td>cash</td>
                <td>0</td>
                <td>all</td>
                <td></td>
                <td>113</td>
            </tr>

            <tr>
                <td>10</td>
                <td>deewan</td>
                <td>c000001</td>
                <td style="width: 25%;">Mohamed Adel محمد عادل</td>
                <td>Enterprise</td>
                <td></td>
                <td>cash</td>
                <td>0</td>
                <td>all</td>
                <td></td>
                <td>113</td>
            </tr>
            <tr>
                <td>11</td>
                <td>deewan</td>
                <td>c000001</td>
                <td style="width: 25%;">Mohamed Adel محمد عادل</td>
                <td>Enterprise</td>
                <td></td>
                <td>cash</td>
                <td>0</td>
                <td>all</td>
                <td></td>
                <td>113</td>
            </tr>

            <tr>
                <td>12</td>
                <td>deewan</td>
                <td>c000001</td>
                <td style="width: 25%;">Mohamed Adel محمد عادل</td>
                <td>Enterprise</td>
                <td></td>
                <td></td>
                <td>0</td>
                <td>all</td>
                <td></td>
                <td>113</td>
            </tr>

            <tr>
                <td>13</td>
                <td>deewan</td>
                <td>c000001</td>
                <td style="width: 25%">grand chairty جمعية الوفد الخيرية للخدمات الاجتماعية</td>
                <td>Enterprise</td>
                <td></td>
                <td>cash</td>
                <td>0</td>
                <td>all</td>
                <td></td>
                <td>113</td>
            </tr>
            </tbody>
            </table>
        </div>

    </div>


</div>
@endsection
