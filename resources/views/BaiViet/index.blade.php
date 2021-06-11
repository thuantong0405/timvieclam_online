@extends('master.index')
@section('content')
    <head>
        <link href="{{URL::asset(env('URL_ASSET_PUBLIC').'assets\libs\quill\quill.core.css')}}" rel="stylesheet" type="text/css">
        <link href="{{URL::asset(env('URL_ASSET_PUBLIC').'assets\libs\quill\quill.bubble.css')}}" rel="stylesheet" type="text/css">
        <link href="{{URL::asset(env('URL_ASSET_PUBLIC').'assets\libs\quill\quill.snow.css')}}" rel="stylesheet" type="text/css">

        <link href="{{URL::asset(env('URL_ASSET_PUBLIC').'assets\libs\bootstrap-touchspin\jquery.bootstrap-touchspin.min.css')}}"
              rel="stylesheet">

        <link href="{{URL::asset(env('URL_ASSET_PUBLIC').'assets\libs\multiselect\multi-select.css')}}" rel="stylesheet" type="text/css">
        <link href="{{URL::asset(env('URL_ASSET_PUBLIC').'assets\libs\select2\select2.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{URL::asset(env('URL_ASSET_PUBLIC').'assets\libs\bootstrap-datepicker\bootstrap-datepicker.min.css')}}" rel="stylesheet"
              type="text/css">
        <link href="{{URL::asset(env('URL_ASSET_PUBLIC').'assets\libs\sweetalert2\sweetalert2.min.css')}}" rel="stylesheet" type="text/css">
{{--        <link href="{{URL::asset(env('URL_ASSET_PUBLIC').'assets\libs\quill\quill.snow.css')}}" rel="stylesheet" type="text/css">--}}
{{--        <link href="//cdn.quilljs.com/1.0.0/quill.snow.css" rel="stylesheet">--}}
{{--        <link href="//cdn.quilljs.com/1.0.0/quill.bubble.css" rel="stylesheet">--}}


    </head>
{{--    Xem trước bài đăng tuyển dụng - modal--}}
    @include('BaiViet.modal.xemTruoc')
{{--    Thêm mới công ty - modal--}}
    @include('CongTy.modal.themMoi')
{{--    Xem ảnh đại diện modal--}}
    @include('CongTy.modal.xemAnhDaiDien')

    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">

                        <li class="breadcrumb-item"><a>Quản lý tuyển dụng</a></li>
                        <li class="breadcrumb-item active">{{__('Đăng bài tuyển dụng')}}</li>
                    </ol>
                </div>
                <h4 class="page-title">{{__('Đăng Bài Tuyển Dụng')}}</h4>
            </div>
        </div>
    </div>
{{--    Body bài viết--}}
    @include('BaiViet.contentBaiDang')
    <div class="row card-box p-0">
        <div class="col-sm-12 col-md-12">
            @include('BaiViet.buttonDangBai')
        </div>

    </div>
    @include('CongTy.modal.anh_dai_dien')

@endsection
@push('scripts')
    <script src="{{URL::asset(env('URL_ASSET_PUBLIC').'assets\libs\multiselect\jquery.multi-select.js')}}"></script>
    <script src="{{URL::asset(env('URL_ASSET_PUBLIC').'assets\libs\jquery-quicksearch\jquery.quicksearch.min.js')}}"></script>
    <script src="{{URL::asset(env('URL_ASSET_PUBLIC').'assets\libs\select2\select2.min.js')}}"></script>

    <script src="{{URL::asset(env('URL_ASSET_PUBLIC').'assets\libs\bootstrap-datepicker\bootstrap-datepicker.min.js')}}"></script>

    <script type="text/javascript"
            src="{{URL::asset(env('URL_ASSET_PUBLIC').'assets\libs\date-time-picker\moment-with-locales.min.js')}}"></script>

    <link rel="stylesheet" type="text/css"
          href="{{asset('assets\libs\date-time-picker\bootstrap-datetimepicker.css')}}">
    <script type="text/javascript"
            src="{{URL::asset(env('URL_ASSET_PUBLIC').'assets\libs\date-time-picker\bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{URL::asset(env('URL_ASSET_PUBLIC').'assets\libs\bootstrap-touchspin\jquery.bootstrap-touchspin.min.js')}}"></script>

    <!-- Plugins js -->

    <script src="{{URL::asset(env('URL_ASSET_PUBLIC').'assets\libs\quill\quill.min.js')}}"></script>

    <script type="text/javascript"
            src="{{URL::asset(env('URL_ASSET_PUBLIC').'assets\libs\date-time-picker\moment-with-locales.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset(env('URL_ASSET_PUBLIC').'assets\libs\sweetalert2\sweetalert2.min.js')}}"></script>
    <script type="text/javascript">

        var quill = new Quill("#mo-ta-editor", {
            theme: "snow",
            // placeholder: 'Compose an epic...',
            modules: {toolbar: [ ["bold", "italic", "underline"], [{list: "ordered"}, {list: "bullet"}], [{align: []}], [], ["clean"]]}
        });
        var quill2 = new Quill("#yeu-cau-editor", {
            theme: "snow",
            // placeholder: 'Compose an epic...',
            modules: {toolbar: [ ["bold", "italic", "underline"], [{list: "ordered"}, {list: "bullet"}], [{align: []}], [], ["clean"]]}
        });
        var quill3 = new Quill("#quyen-loi-editor", {
            theme: "snow",
            // placeholder: 'Compose an epic...',
            modules: {toolbar: [ ["bold", "italic", "underline"], [{list: "ordered"}, {list: "bullet"}], [{align: []}], [], ["clean"]]}
        });

        $(document).on('focusout','.custom-editor .ql-editor',function () {
            let __this = $(this);
            let value = $(this).html();
            let __parent = $(this).parents('.custom-editor').parent();

            if ($.trim(__this.text()).length == 0){
                __this.html("");
            }
            if ($.trim(__this.text()).length == 0){
                __parent.find('textarea').addClass('is-invalid');
                __parent.find('textarea').parent().find('.invalid-feedback').addClass('text-left').find('strong').text(__parent.find('textarea').attr('title') + ' không được để trống');
            }else{
                __parent.find('textarea').removeClass('is-invalid');
            }
            __parent.find('textarea').val(""+value+"");
        });
        
        let table = null;
        let HTMLcongTy = null;
        let getBaseURL = '{{URL::asset('/')}}';
        const initEventCapNhatCongTy = ()=>{
            $('#doi_anh_dai_dien').data('type','them-moi-cong-ty')
            select2Default($('select#from_day'));
            select2Default($('select#to_day'));
            select2Default($('select#quy_mo_nhan_su'));
            select2Default($('select#dia_diem'));
            select2MultipleDefault($('select#linh_vuc_hoat_dong'),'Chọn Ngành nghề')

            $("#so_luong_chi_nhanh").TouchSpin({
                min: 0,
                buttondown_class: "btn btn-primary waves-effect",
                buttonup_class: "btn btn-primary waves-effect"
            });
            lichNam($('#nam_thanh_lap'));

            $('#from_time,#to_time').datetimepicker({
                format: 'HH:mm',
                widgetPositioning: {
                    vertical: 'bottom',
                    horizontal: 'right'
                },
                icons: {
                    time: "icofont icofont-clock-time",
                    date: "icofont icofont-ui-calendar",
                    up: "icofont icofont-rounded-up",
                    down: "icofont icofont-rounded-down",
                    next: "icofont icofont-rounded-right",
                    previous: "icofont icofont-rounded-left"
                },
            });
            hoverEventLogo();
        }
        const hoverEventLogo = () => {
            $("div#logo_cong_ty").hover(function () {
                if ($(window).width() >= 576) {
                    $(this).find('div.hover-me').fadeIn('fast');
                }
            }, function () {
                if ($(window).width() >= 576) {
                    $(this).find('div.hover-me').fadeOut('fast');
                }
            });
        }
    </script>

    <script type="text/javascript" src="{{URL::asset(env('URL_ASSET_PUBLIC').'assets\js\date-picker-vi.js')}}"></script>
{{--    js đăng bài--}}
    @include('BaiViet.scriptThemMoi')
    <script>

    </script>
@endpush
