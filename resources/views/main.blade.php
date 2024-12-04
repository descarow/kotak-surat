<!DOCTYPE html>
<html>

<head>
    {{-- <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-35959721-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-35959721-1');
    </script> --}}

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Place this data between the <head> tags of your website -->
    <title>saran</title>
    <meta name="description" content="Feedback Box">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#d7381b">
    <meta name="apple-mobile-web-app-title" content="LAPOR!">
    <meta name="application-name" content="LAPOR!">
    <meta name="theme-color" content="#ffffff">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <!-- App Styles -->
    <link href="https://www.lapor.go.id/combine/1f25329929a6e3be6bfecc9f75ad47a4-1732462798" rel="stylesheet">

    <script src="https://www.lapor.go.id/themes/lapor/assets/sweetalert2/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://www.lapor.go.id/plugins/responsiv/uploader/assets/css/uploader.css">
    <style>
        .grecaptcha-badge {
            width: 70px !important;
            overflow: hidden !important;
            transition: all 0.3s ease !important;
            left: 4px !important;
        }

        .grecaptcha-badge:hover {
            width: 256px !important;
        }

        .file-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .file-name {
            flex: 1;
        }

        .delete-button {
            background-color: transparent;
            border: none;
            font-size: 1em;
            cursor: pointer;
        }

        .custom-file-upload {
            position: relative;
            display: inline-block;
            width: 100%;
        }

        .file-label {
            display: flex;
            /* Menggunakan flexbox */
            align-items: center;
            /* Menengahkan vertikal */
            justify-content: center;
            /* Menengahkan horizontal */
            padding: 10px 25px;
            border: 2px dashed rgba(0, 0, 0, 0.3);
            text-align: center;
            background: none;
            border-radius: 4px;
            height: 60px;
            font-size: 14px;
            white-space: nowrap;
            letter-spacing: 1px;
            text-transform: uppercase;
            font-weight: bold;
            cursor: pointer;
            margin-bottom: 10px;
        }

        .file-label:hover {
            background-color: #f2f2f2;
        }

        .file-label span {
            display: block;
        }

        /* Styling for file input (hidden) */
        input[type="file"] {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            width: 100%;
            height: 100%;
            cursor: pointer;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="https://saran/themes/saran/assets/select2/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="https://saran/themes/saran/assets/select2/css/select2totree.css">
    <link rel="stylesheet" href="https://saran/combine/123ac454e5c0bbc14ab488c286854934-1732462797">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://saran/combine/8d931db45eae6ac902515c50c03fad65-1732462797"></script>
    <script src="https://saran/themes/lapor/assets/js/zingchart.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.4.0/dist/chartjs-plugin-datalabels.min.js"></script> <!-- Baru chart plugin untuk pie -->
</head>

<body class="page-home pd-t-0 ">
    <div class="loader-custom hidden"></div>
    <div id="search-bar">
        <div class="container">
            <form action="/search">
                <input type="search" class="" name="q" placeholder="Kata kunci atau tracking ID..." autocomplete="off" value="">
                <i class="fa fa-search"></i>
            </form>
        </div>
    </div>

    <nav id="leftMenu" class="navmenu navmenu-default navmenu-inverse navmenu-fixed-left offcanvas" role="navigation">
        <ul class="nav navmenu-nav">
            <li role="presentation" class="  ">
                <a href="">
                    Tentang
                </a>
            </li>
            <li role="presentation" class="  ">
                <a href="">
                    Statistik
                </a>
            </li>
            <li role="presentation" class="d-block d-xs-none">
                <div class="form-group">
                    <form action="/search">
                        <input type="search" class="form-control" name="q" placeholder="Kata kunci atau tracking ID..." autocomplete="off">
                    </form>
                </div>
            </li>
        </ul>
    </nav>

    {{-- <header class="navbar-fixed-top navbar-inverse ">
        <div class="notice-bar download-android-app visible-sm visible-xs hidden">
            <div class="">
                <div class="col-xs-12 col-sm-12 icon-playstore hidden">
                    <a href="https://play.google.com/store/apps/details?id=com.deptech.lapor&referrer=utm_source%3Dwebsite%26utm_medium%3Dlapor.go.id%26anid%3Dadmob" target="_blank">
                        <img src="https://www.lapor.go.id/themes/lapor/assets/images/icon-playstore.png" alt="" class="img-responsive">
                    </a>
                    Lapor! Versi Android
                </div>
                <div class="col-xs-12 col-sm-12 icon-appstore hidden">
                    <a href="https://click.google-analytics.com/redirect?tid=UA-146892450-1&url=https%3A%2F%2Fitunes.apple.com%2Fid%2Fapp%2Fsp4n-lapor%2Fid1486554343&aid=com.deptech.lapor&idfa={idfa}&cs=website&cm=lapor.go.id&anid=admob&hash=md5" target="_blank">
                        <img src="https://www.lapor.go.id/themes/lapor/assets/images/icon-appstore.png" alt="" class="img-responsive">
                    </a>
                    Lapor! Versi iOS
                </div>
            </div>
        </div> --}}

        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle navbar-toggle-left" data-toggle="offcanvas" data-target="#leftMenu" data-canvas="body">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                {{-- <a class="navbar-brand" href="https://www.lapor.go.id">
                    <img src="https://www.lapor.go.id/themes/lapor/assets/images/logo.png" alt="" class="img-responsive hidden-navbar-inverse">
                    <img src="https://www.lapor.go.id/themes/lapor/assets/images/logo-white.png" alt="" class="img-responsive hidden-navbar-default">
                </a> --}}

                <a type="button" class="btn navbar-btn navbar-btn-mobile navbar-btn-user pull-right visible-xs" data-toggle="modal" data-target="#exampleModal" style="background-color: transparent; color: white; margin-top: 28px !important;">
                    <i style="margin-top: 5% !important;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-translate" viewBox="0 0 16 16">
                            <path d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286H4.545zm1.634-.736L5.5 3.956h-.049l-.679 2.022H6.18z" />
                            <path d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2zm7.138 9.995c.193.301.402.583.63.846-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6.066 6.066 0 0 1-.415-.492 1.988 1.988 0 0 1-.94.31z" />
                        </svg>
                    </i>
                </a>
                <a href="#" class="btn btn-outline-white btn-sm navbar-btn navbar-btn-mobile pull-right visible-xs" data-toggle="modal" data-target="#modalLogin" style="margin-right: 15px"><i class="fa fa-user"></i></a>
            </div>

            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-left navbar-primary">
                    <li role="presentation" class="  ">
                        <a href="https://www.lapor.go.id/tentang">
                            Tentang
                        </a>

                    </li>
                    <li role="presentation" class="  ">
                        <a href="https://www.lapor.go.id/statistik">
                            Statistik
                        </a>

                    </li>
                </ul>

                <div class="nav navbar-nav navbar-right mg-l-10  hidden-sm">
                    <a href="https://www.lapor.go.id/account/register" class="btn navbar-btn pull-right btn-outline-white">
                        Daftar
                    </a>
                </div>
                <ul class="nav navbar-nav navbar-right ">
                    <li class="nav-notification nav-info">
                        <a type="button" data-toggle="modal" data-target="#exampleModal" style="background-color: transparent;">
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-translate" viewBox="0 0 16 16">
                                    <path d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286H4.545zm1.634-.736L5.5 3.956h-.049l-.679 2.022H6.18z" />
                                    <path d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2zm7.138 9.995c.193.301.402.583.63.846-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6.066 6.066 0 0 1-.415-.492 1.988 1.988 0 0 1-.94.31z" />
                                </svg>
                            </i>
                        </a>
                    </li>
                    <li class="nav-login">
                        <a href="#" data-toggle="modal" data-target="#modalLogin">Masuk</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'id'
            }, 'google_translate_element');
        }
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <section id="hero">
        <div class="container">
            <div class="block block-aspiration">
                <div class="h2">Layanan Saran, Kritik, dan Pujian online</div>
                <p>Sampaikan laporan Anda langsung kepada kami</p>
                <hr>
            </div>
        </div>
        <svg width="100%" height="160px" viewBox="0 0 1300 160" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g>
                <path d="M1300,160 L-5.68434189e-14,160 L-5.68434189e-14,119 C423.103102,41.8480501 1096.33049,180.773108 1300,98 L1300,160 Z" fill="#FFFFFF" fill-rule="nonzero"></path>
                <path d="M129.77395,40.2373685 C292.925845,31.2149964 314.345174,146.772453 615.144273,151.135393 C915.94337,155.498333 1017.27057,40.8373289 1240.93447,40.8373289 C1262.89392,40.8373289 1282.20864,41.9705564 1299.18628,44.0144896 L1300,160 L-1.0658141e-14,160 L-1.0658141e-14,105 C31.4276111,70.4780448 73.5616946,43.3459311 129.77395,40.2373685 Z" fill="#FFFFFF" fill-rule="nonzero" opacity="0.3"></path>
                <path d="M69.77395,60.2373685 C232.925845,51.2149964 314.345174,146.772453 615.144273,151.135393 C915.94337,155.498333 1017.27057,0.837328936 1240.93447,0.837328936 C1263.91283,0.837328936 1283.59768,0.606916225 1300,1 L1300,160 L-1.70530257e-13,160 L-9.9475983e-14,74 C-9.9475983e-14,74 36.9912359,62.0502671 69.77395,60.2373685 Z" fill="#FFFFFF" fill-rule="nonzero" opacity="0.3"></path>
                <path d="M2.27373675e-13,68 C23.2194389,95.7701288 69.7555676,123.009338 207,125 C507.7991,129.36294 698.336099,22 922,22 C1047.38026,22 1198.02057,63.2171658 1300,101 L1300,160 L0,160 L2.27373675e-13,68 Z" fill="#FFFFFF" fill-rule="nonzero" opacity="0.3" transform="translate(650, 91) scale(-1, 1) translate(-650, -91) "></path>
            </g>
        </svg>
    </section>

    <section id="complaint-box">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 mg-b-40">

                    <form data-request="complaint::onCreate" data-request-files data-request-flash class='complaint-form'>
                        <input name="_token" type="hidden" value="IRgXpIEXror6JlKmRZ1TYakT9w7fgTuenQ9mT5MO">
                        <input name="_session_key" type="hidden" value="vJ3x0TD0kcZZvL28I4bLyYfKYHHIOyuqz108PlbT">

                        <div class="complaint-form-box">
                            <div class="select-complaint">Sampaikan Laporan Anda</div>
                            <label for="classification_complaint" class="choose-classification">Pilih Klasifikasi Laporan</label>
                            <div class="btn-group btn-complaint-type" id="classification_complaint" data-toggle="buttons">
                                <label attr-speach="PENGADUAN" class="btn btn-default">
                                    <input attr-speach="PENGADUAN" type="radio" name="classification_id" value="1" class="sr-only" required /><span>SARAN</span></label>
                                <label attr-speach="ASPIRASI" class="btn btn-default">
                                    <input attr-speach="ASPIRASI" type="radio" name="classification_id" value="3" class="sr-only" required /><span>Kritik</span></label>
                                <label attr-speach="PERMINTAAN INFORMASI" class="btn btn-default">
                                    <input attr-speach="PERMINTAAN INFORMASI" type="radio" name="classification_id" value="2" class="sr-only" required /><span>PUJIAN</span></label>
                            </div>
                        </div>
                        <div class="complaint-help">
                            Perhatikan Cara Menyampaikan <span id="classfication_name">Pengaduan</span> Yang Baik dan Benar
                            <a attr-speach="Perhatikan Cara Menyampaikan Pengaduan Yang Baik dan Benar" href="#modalPengaduan" data-toggle="modal" class="modalTrigger" id="modalToggler" data-modal-name="modalPengaduan" data-target="#bannerformmodal"><img attr-speach="Perhatikan Cara Menyampaikan Pengaduan Yang Baik dan Benar" alt="info-complaint" class="info-complaint" src="https://www.lapor.go.id/themes/lapor/assets/images/info.svg"></a>
                        </div>
                        <div class="complaint-form-category">
                            <input attr-speach="Ketik Judul Laporan Anda" type="text" name="title" class="form-control" placeholder="Ketik Judul Laporan Anda *" required></textarea>
                        </div>
                        <div class="complaint-form-category">
                            <textarea attr-speach="Ketik Isi Laporan Anda" name="content" id="" rows="6" class="form-control textarea-flex autosize" placeholder="Ketik Isi Laporan Anda *" required></textarea>
                        </div>
                        <div class="complaint-form-box p-5px" id="date_incident">
                            <div class="form-group">
                                <div class='input-group date'>
                                    <input attr-speach="Pilih Tanggal Kejadian" type='text' id="date_of_incident" name="date_of_incident" required class="form-control input-doi" placeholder="Pilih Tanggal Kejadian *" autocomplete="off">
                                    <span class="input-group-addon">
                                        <span class="fa fa-calendar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div attr-speach="Ketik Lokasi Kejadian" class="complaint-form-category">
                            <select class="form-control" name="location_id" id="location_id" placeholder="Ketik Lokasi Kejadian *" data-request-search="complaint::onSearchLocation" required>
                            </select>
                        </div>
                        {{-- <div attr-speach="Ketik Instansi Tujuan" class="complaint-form-category">
                            <select
                                class="form-control"
                                name="suggestion_institution_id"
                                id="select_institution_id"
                                placeholder="Ketik Instansi Tujuan"
                                data-request-search="complaint::onSearchInstitution"
                                data-request="onSelectInstitution"
                                data-request-success="updateCategories(data.categories)"
                                data-request-data="institution_id: $('#select_institution_id').val()">
                            </select>
                        </div> --}}
                        {{-- <div attr-speach="Pilih Kategori Laporan Anda" class="complaint-form-category">
                            <select id="select_categories" class="select-tree-view" placeholder="Pilih Kategori Laporan Anda" name="category_id"></select>
                        </div> --}}

                        {{-- <div class="form-group">
                            <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
                            <input type="hidden" name="action" value="validate_captcha">
                        </div> --}}

                        {{-- <div class="complaint-form-attachments">
                            <label for="fileInput" class="file-label">
                                Upload Lampiran (Max 2MB)
                            </label>
                            <input type="file" name="attachment" id="fileInput" accept=".pdf,.jpg,.jpeg,.png" style="display: none;">
                            <div id="fileList" class=""></div>
                        </div>

                        <div class="complaint-form-footer">
                            <div class="row-flex flex-align-between">
                                <div class="footer-left">
                                    <a attr-speach="Upload Lampiran" href="#" data-toggle="slidetoggle" data-target=".complaint-form-attachments">
                                        <label attr-speach="Upload Lampiran" class="label label-primary">0</label>
                                        <i attr-speach="Upload Lampiran" class="fa fa-fw fa-paperclip"></i> <span attr-speach="Upload Lampiran" class="label-attachment" data-toggle="tooltip" data-placement="top" data-title="Upload lampiran pendukung laporan Anda">Upload Lampiran</span>
                                    </a>
                                </div> --}}

                                <div class="footer-right text-right">
                                    <div class="checkbox checkbox-primary checkbox-circle checkbox-inline text-left" data-toggle="tooltip" data-placement="top" data-title="Nama Anda tidak akan terpublikasi pada laporan">
                                        <input attr-speach="Anonim" id="anonim" class="styled" type="checkbox" name="is_anonymous">

                                        <label attr-speach="Anonim" for="anonim">
                                            Anonim
                                        </label>
                                    </div>

                                    <div class="checkbox checkbox-primary checkbox-circle checkbox-inline text-left" data-toggle="tooltip" data-placement="top" data-title="Laporan Anda tidak dapat dilihat oleh publik">
                                        <input attr-speach="Rahasia" id="Rahasia" class="styled" type="checkbox" name="is_secret">

                                        <label attr-speach="Rahasia" for="Rahasia">
                                            Rahasia
                                        </label>
                                    </div>

                                    <!-- HELP Button -->

                                    <input type="hidden" name="latitude" data-toggle="currentLatitude">
                                    <input type="hidden" name="longitude" data-toggle="currentLongitude">
                                    <input type="hidden" name="origin_latitude">
                                    <input type="hidden" name="origin_longitude">
                                    <a attr-speach="LAPOR" class="btn btn-primary" id="submit-complaint" data-attach-loading>Kirim</a>
                                </div>
                            </div>
                        </div>
                    </form>

                    <!-- <div class="modal fade how-to" id="modalPengaduan" tabindex="-1" role="dialog" aria-labelledby="modalPengaduan" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header" style="padding: 15px;">
                                    <button type="button" class="close" style="top: 11px;" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title">PANDUAN PENGISIAN PENGADUAN</h4>
                                </div>
                                <img src="https://www.lapor.go.id/themes/lapor/assets/images/how-to-pengaduan.jpg" width="100%">
                            </div>
                        </div>
                    </div>
                    <div class="modal fade how-to" id="modalAspirasi" tabindex="-1" role="dialog" aria-labelledby="modalAspirasi" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header" style="padding: 15px;">
                                    <button type="button" class="close" style="top: 11px;" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title">PANDUAN PENGISIAN ASPIRASI</h4>
                                </div>
                                <img src="https://www.lapor.go.id/themes/lapor/assets/images/how-to-aspirasi.jpg" width="100%">
                            </div>
                        </div>
                    </div>
                    <div class="modal fade how-to" id="modalPermintaanInformasi" tabindex="-1" role="dialog" aria-labelledby="modalPermintaanInformasi" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header" style="padding: 15px;">
                                    <button type="button" class="close" style="top: 11px;" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title">PANDUAN PENGISIAN PERMINTAAN INFORMASI</h4>
                                </div>
                                <img src="https://www.lapor.go.id/themes/lapor/assets/images/how-to-permintaan-informasi.jpg" width="100%">
                            </div>
                        </div>
                    </div> -->
                </div>
                {{-- <div class="col-sm-12">
                    <div class="row bs-wizard" style="border-bottom:0;">
                        <div class="col-xs-2 col-xs-offset-1 bs-wizard-step active">
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                            <span class="bs-wizard-dot">
                                <i class="fa fa-pencil-square-o"></i>
                            </span>
                            <div class="text-center bs-wizard-stepnum">Tulis Laporan</div>
                            <div class="bs-wizard-info text-center">
                                Laporkan keluhan atau aspirasi anda dengan jelas dan lengkap
                            </div>
                        </div>

                        <div class="col-xs-2 bs-wizard-step">
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                            <span class="bs-wizard-dot">
                                <i class="fa fa-mail-forward"></i>
                            </span>
                            <div class="text-center bs-wizard-stepnum">Proses Verifikasi</div>
                            <div class="bs-wizard-info text-center">
                                Dalam 3 hari, laporan Anda akan diverifikasi dan diteruskan kepada instansi berwenang
                            </div>
                        </div>

                        <div class="col-xs-2 bs-wizard-step">
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                            <span class="bs-wizard-dot">
                                <i class="fa fa-comments"></i>
                            </span>
                            <div class="text-center bs-wizard-stepnum">Proses Tindak Lanjut</div>
                            <div class="bs-wizard-info text-center">
                                Dalam 5 hari, instansi akan menindaklanjuti dan membalas laporan Anda
                            </div>
                        </div>

                        <div class="col-xs-2 bs-wizard-step">
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                            <span class="bs-wizard-dot">
                                <i class="fa fa-commenting-o"></i>
                            </span>
                            <div class="text-center bs-wizard-stepnum">Beri Tanggapan</div>
                            <div class="bs-wizard-info text-center">
                                Anda dapat menanggapi kembali balasan yang diberikan oleh instansi dalam waktu 10 hari
                            </div>
                        </div>

                        <div class="col-xs-2 bs-wizard-step">
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                            <span class="bs-wizard-dot">
                                <i class="fa fa-check"></i>
                            </span>
                            <div class="text-center bs-wizard-stepnum">Selesai</div>
                            <div class="bs-wizard-info text-center">
                                Laporan Anda akan terus ditindaklanjuti hingga terselesaikan
                            </div>
                        </div>

                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    <section class="block block-counter" id="hero" style="color:white; padding: 40px 0 40px;">
        <div class="container">
            <div class="text-center text-muted h3 mg-0 mg-b-30" style="color: white">JUMLAH LAPORAN SEKARANG</div>

            <div class="row-flex flex-tablet text-center">
                <div class="post post-counter" style="margin-left: auto;margin-right: auto;">
                    <div class="counter-count">
                        <!-- <span class="numscroller" data-min='0' data-max='966347' data-delay='2' data-increment='1000'></span> -->
                        <span class="numscroller" data-min='0' data-max='959139' data-delay='2' data-increment='1000'></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="clearfix"></div>

    <footer>
        <div class="container">
            <div class="post-footer">
                <div class="footer-copyright">
                    Copyright 2024. <a href="https://www.instagram.com/adoreyeux/" data-toggle="tooltip" title="Adore" target="_blank">Adore</a>. Hak cipta dilindungi Undang-Undang.
                </div>
            </div>
        </div>
    </footer>
 
    <form method="POST" action="https://www.lapor.go.id" accept-charset="UTF-8" data-request="laporAuth::onSignin" data-request-update="&#039;captcha-login&#039;: &#039;#google-captcha&#039;"><input name="_session_key" type="hidden" value="vJ3x0TD0kcZZvL28I4bLyYfKYHHIOyuqz108PlbT"><input name="_token" type="hidden" value="IRgXpIEXror6JlKmRZ1TYakT9w7fgTuenQ9mT5MO">
        <div class="modal fade" id="modalLogin">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title text-center">MASUK</h4>
                    </div>

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <!-- <h5 class="separator"><span>Gunakan Akun Media Sosial Anda</span></h5>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <a href="?s=https://www.lapor.go.id&f=https://www.lapor.go.id" class="btn btn-block btn-facebook mg-b-20">
                                            <i class="fa fa-facebook fa-fw"></i> Facebook
                                        </a>
                                    </div>
                                    <div class="col-sm-6">
                                        <a href="?s=https://www.lapor.go.id&f=https://www.lapor.go.id" class="btn btn-block btn-twitter mg-b-20">
                                            <i class="fa fa-twitter fa-fw"></i> Twitter
                                        </a>
                                    </div>
                                    <div class="col-sm-12">
                                        <a href="https://www.lapor.go.id/flynsarmy/sociallogin/Google?s=https://www.lapor.go.id&f=https://www.lapor.go.id" class="btn btn-block btn-google mg-b-20">
                                            <i class="fa fa-google fa-fw"></i> Google
                                        </a>
                                    </div>
                                </div>
                                <h5 class="separator"><span>Atau dengan Email Anda</span></h5> -->
                                <div class="form-group">
                                    <label for="userSigninLogin">Email, No. telp, atau username</label>
                                    <input
                                        name="login"
                                        type="text"
                                        class="form-control"
                                        id="userSigninLogin"
                                        tabindex="1"
                                        required>
                                </div>
                                <div class="form-group">
                                    <a href="https://www.lapor.go.id/forgot-password" class="pull-right">Lupa password?</a>
                                    <label for="userSigninPassword">Password</label>
                                    <input
                                        name="password"
                                        type="password"
                                        autocomplete="off"
                                        class="form-control"
                                        id="userSigninPassword"
                                        tabindex="2"
                                        required>
                                </div>
                                <div id="google-captcha"></div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block" data-attach-loading>Masuk</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer clearfix" style="text-align: center">
                        Anda belum memiliki akun?<br><a class="btn btn-link" href="https://www.lapor.go.id/account/register">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="modal fade" id="modalMap">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center">Pilih Lokasi</h4>
                </div>
                <div class="modal-body pd-0">
                    <input type="hidden" data-toggle="locationMarkerLatitude">
                    <input type="hidden" data-toggle="locationMarkerLongitude">
                    <div class="location-marker"><img src="https://www.lapor.go.id/themes/lapor/assets/images/complaint-marker.png" alt="" height="70"></div>

                    <div class="location-name bg-warning pd-10 text-ellipsis">
                        <span data-toggle="locationName">Geser map untuk mendapatkan lokasi yang anda inginkan</span>
                    </div>
                    <div id="mapLocation">
                        <center class="pd-10">Silahkan aktifkan fitur pelacakan lokasi Anda pada browser</center>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="text-center">
                        <button class="btn btn-default" data-dismiss="modal">Tutup</button>
                        <button class="btn btn-danger" data-dismiss="modal" data-toggle="removeLocation">Hapus Lokasi</button>
                        <button class="btn btn-info" data-dismiss="modal">Pilih Lokasi</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="loadedcontentmodal"></div>

    <script src="https://code.responsivevoice.org/responsivevoice.js?key=bzbTAKXD"></script>
    <script type="text/javascript" src="https://web.animemusic.us/widget_disabilitas.js"></script>
    <script src="https://www.lapor.go.id/combine/84c55bf60c3c9ba06444003c2ae36965-1732462798"></script>
    <script src="https://www.lapor.go.id/plugins/responsiv/uploader/assets/vendor/dropzone/dropzone.js"></script>
    <script src="https://www.lapor.go.id/plugins/responsiv/uploader/assets/js/uploader.js"></script>
    <script src="https://www.lapor.go.id/themes/lapor/assets/select2/js/select2.min.js"></script>
    <script src="https://www.lapor.go.id/themes/lapor/assets/select2/js/select2totree.js"></script>
    <script>
        $("#showLaporan").bind("click", function() {
            var down = "https://www.lapor.go.id/themes/lapor/assets/images/dropdown.png";
            var up = "https://www.lapor.go.id/themes/lapor/assets/images/dropup.png";
            var img = $('#laporanImg')
            var src = img.attr("src"),
                state = (src.indexOf(down) === 0) ? down : up;
            (state === down) ? src = src.replace(down, up): src = src.replace(up, down);
            img.attr("src", src);

        });
    </script>
    <script src="https://www.google.com/recaptcha/api.js?render=6LceKsUpAAAAADvBLbPsuB4Q6_WEdA2siNPXW8Hq"></script>
    <script>
        function GetURLParameter(sParam) {
            var sPageURL = window.location.search.substring(1);
            var sURLVariables = sPageURL.split('&');
            for (var i = 0; i < sURLVariables.length; i++) {
                var sParameterName = sURLVariables[i].split('=');
                if (sParameterName[0] == sParam) {
                    return decodeURIComponent(sParameterName[1]);
                }
            }
        }

        $(document).ready(function() {
            const fileInput = document.getElementById('fileInput');
            const fileList = document.getElementById('fileList');
            const form = document.getElementsByClassName('complaint-form')[0];
            const fileCountLabel = document.querySelector('label[attr-speach="Upload Lampiran"]')
            let uploadedFiles = [];
            const getCat = GetURLParameter('category');

            // Function to upload files
            fileInput.addEventListener('change', function() {
                Array.from(fileInput.files).forEach(file => {
                    if (file.size > 2 * 1024 * 1024) {
                        showError('File ' + file.name + ' terlalu besar. Maksimum ukuran file adalah 2 MB.');
                        return;
                    }
                    if (!uploadedFiles.some(uploadedFile => uploadedFile.name === file.name)) {
                        uploadedFiles.push(file);
                        const fileItem = createFileItem(file);
                        fileList.appendChild(fileItem);
                    }
                });

                updateCountLabel();
            });

            function createFileItem(file) {
                const fileItem = document.createElement('div');
                fileItem.classList.add('file-item');

                const fileName = document.createElement('div');
                fileName.classList.add('file-name');
                fileName.textContent = file.name;

                const deleteButton = document.createElement('button');
                deleteButton.classList.add('delete-button');
                deleteButton.textContent = '❌';
                deleteButton.addEventListener('click', function() {
                    fileList.removeChild(fileItem);
                    uploadedFiles = uploadedFiles.filter(uploadedFile => uploadedFile.name !== file.name);
                    fileInput.value = '';
                    updateCountLabel();
                });

                fileItem.appendChild(fileName);
                fileItem.appendChild(deleteButton);

                return fileItem;
            }

            function updateCountLabel() {
                const labelValue = uploadedFiles.length > 0 ? uploadedFiles.length : 0;
                fileCountLabel.textContent = labelValue;
            }

            function showError(message) {
                $.oc.flashMsg({
                    text: message,
                    'class': 'error',
                    interval: 5
                });
            }

            function addFiles() {
                fileInput.remove();
                const existingNewFilesInput = document.querySelector('input[name="attachment[]"]');
                if (existingNewFilesInput) {
                    existingNewFilesInput.remove();
                }

                const newFilesInput = document.createElement('input');
                newFilesInput.type = 'file';
                newFilesInput.name = 'attachment[]';
                newFilesInput.multiple = true;
                newFilesInput.style.display = 'none';

                const newFileList = new DataTransfer();

                uploadedFiles.forEach(file => {
                    newFileList.items.add(file);
                });

                newFilesInput.files = newFileList.files;
                form.appendChild(newFilesInput);
            }

            // Function to execute reCAPTCHA & submit
            function executeRecaptcha() {
                grecaptcha.ready(function() {
                    grecaptcha.execute('6LceKsUpAAAAADvBLbPsuB4Q6_WEdA2siNPXW8Hq', {
                            action: 'validate_captcha'
                        })
                        .then(function(token) {
                            document.getElementById('g-recaptcha-response').value = token;
                            $(".complaint-form").submit();
                        });
                });
            }

            // submit form
            $(".complaint-form #submit-complaint").click(function(event) {
                event.preventDefault();

                var form = $(".complaint-form")[0];
                if (form.checkValidity()) {
                    button_submit = $(this);
                    button_submit.addClass('oc-loading');
                    $('#select_categories').attr('disabled', false);

                    executeRecaptcha(); // Eksekusi reCAPTCHA
                    form.submit();
                } else {
                    $.oc.flashMsg({
                        text: 'Form tidak valid, silakan periksa kembali',
                        'class': 'error',
                        interval: 3
                    });
                    form.reportValidity();
                }

                button_submit.removeClass('oc-loading');
            });

            initCategories();
        });

        // function initCategories
        function initCategories() {
            $("#select_categories").select2ToTree({
                treeData: {
                    dataArr: mydata
                },
                allowClear: true,
                placeholder: "Pilih Kategori Laporan Anda",
                positionDropdown: true,
                autoClose: false,
            });

            $('#select_categories').val('').change();

            if (getCat) {
                $('#select_categories').val(getCat);
                $('#select_categories').trigger('change');
                $('#select_categories').attr('disabled', 'disabled');
            };
        }

        function updateCategories(categories) {
            try {
                // Parsing JSON jika masih berupa string
                var newcategories = typeof categories === 'string' ? JSON.parse(categories) : categories;

                // Cek apakah newcategories array kosong
                if (Array.isArray(newcategories) && newcategories.length === 0) {
                    // Jika array kosong, panggil kembali initCategories
                    initCategories();
                } else {
                    // Reset dan kosongkan elemen select
                    $("#select_categories").empty();

                    // Jika newcategories ada, gunakan data baru untuk select2ToTree
                    $("#select_categories").select2ToTree({
                        treeData: {
                            dataArr: newcategories
                        },
                        allowClear: true,
                        placeholder: "Pilih Kategori Laporan Anda",
                        positionDropdown: true,
                        autoClose: false,
                    });

                    $('#select_categories').val('').change();
                    if (getCat) {
                        $('#select_categories').val(getCat);
                        $('#select_categories').trigger('change');
                        $('#select_categories').attr('disabled', 'disabled');
                    }
                }
            } catch (error) {
                console.error('Failed to parse categories:', error);
            }
        };
    </script>
    <script src="https://www.lapor.go.id/combine/42e47feb8f9b1bf0c15183fff5563157-1732462797"></script>
    <script>
        var swiper = new Swiper('.swiper-primary', {
            initialSlide: 1,
            pagination: '.swiper-pagination',
            centeredSlides: true,
            slidesPerView: 'auto',
            scrollbarHide: true,
            loop: true,
            autoplay: 4000,
            spaceBetween: 80,
            paginationClickable: true,
            breakpoints: {
                768: {
                    slidesPerView: 1,
                    spaceBetween: 0,
                }
            }
        });

        var swiper = new Swiper('.swiper-social-feed', {
            initialSlide: 4,
            slidesPerView: 'auto',
            scrollbarHide: true,
            loop: true,
            autoplay: 4000,
            spaceBetween: 20,
            direction: 'vertical',
        });
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyBLHjAqc9z24spcOJmit4weWYBe32eLBho&libraries=places, geometry&region=ID"></script>
    <script src="https://cdn.klokantech.com/maptilerlayer/v1/index.js"></script>
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-134274968-1', 'auto');
        ga('set', 'forceSSL', true);
        ga('send', 'pageview');
    </script>
    <script>
    </script>
    <script>
        function displaytranslate() {
            var a = document.getElementById('translate');
            if (a.style.display == 'none') {
                a.style.display = 'block';
            }
            if (a.style.display == 'block') {
                a.style.display = 'none';
            }
        }
    </script>
    <script src="https://www.lapor.go.id/themes/lapor/assets/dashboard/leaflet/leaflet.js"></script>
    <script src="https://www.lapor.go.id/themes/lapor/assets/dashboard/leaflet/leaflet-providers-master/leaflet-providers.js"></script>
    <script src="https://www.lapor.go.id/themes/lapor/assets/dashboard/leaflet/leaflet.ajax.min.js"></script>
</body>

</html>