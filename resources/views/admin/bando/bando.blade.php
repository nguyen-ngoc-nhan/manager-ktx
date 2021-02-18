@extends('templates.admin.master')
@section('main-content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- MAP DATA-->
                        <div class="map-data m-b-40">
                            <h3 class="title-3 m-b-30">
                                <i class="zmdi zmdi-map"></i>ĐỊA CHỈ KTX ĐHSP ĐÀ NẴNG</h3>
                            <div class="filters">
                                <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                                    <select class="js-select2" name="property">
                                        <option selected="selected">Địa chỉ</option>
                                        <option value="">08 Hà Văn Tính</option>
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                </div>
                            </div>
                            <div class="map-wrap m-t-45 m-b-20">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.9507607202627!2d108.15205011487417!3d16
                                    .06804474373758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142192871135687%3A0x73355bb95c7c538
                                    6!2zOCBIw6AgVsSDbiBUw61uaCwgSG_DoCBLaMOhbmggTmFtLCBMacOqbiBDaGnhu4N1LCDEkMOgIE7hurVuZyA1NTAwMDAsIFZp4bu
                                    HdCBOYW0!5e0!3m2!1svi!2s!4v1604935729660!5m2!1svi!2s" width="950px" height="450" frameborder="0" 
                                    style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                {{-- <div id="vmap" style="height: 284px;"></div> --}}
                            </div>
                        </div>
                        <!-- END MAP DATA-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

