@extends('frontend.master')

@section('title', 'Trang liên hệ')


@section('css')
    <link href='//theme.hstatic.net/1000271724/1000376256/14/pages.css?v=88' rel='stylesheet' type='text/css' media='all' />
@endsection


@section('main')
    <div class="insMain">
        <section id="insContactPage">

            <div class="insBreadcrumb ">
                <div class="banner-breadcrumb" style="background: url(//theme.hstatic.net/1000271724/1000376256/14/breacrumb_banner.jpg?v=88) no-repeat center center;">
                    <h2>Liên hệ</h2>
                    <ul>
                        <li><a href="{{ asset('/') }}" target="_self">Trang chủ</a></li>

                        <li class="active"><span>Liên hệ</span></li>

                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="wrapperContactPage">
                    <div class="headingPage">
                        <h1 class="title">Liên hệ</h1>
                    </div>

                    <div class="ggMap">
                        {!! $contact_item->contact_map !!}
                    </div>

                    <div class="contactList">
                        <div class="row">
                            <div class="col-md-8 col-sm-12 col-xs-12 pull-left infoForm">
                                <div class="wrapForm">
                                    <h3 class="name-head">
                                        <span>Bạn cần hỗ trợ? Hãy gửi thông tin cho chúng tôi</span>
                                    </h3>
                                    <form accept-charset='UTF-8' action='/contact' class='contact-form' method='post'>
                                        <input name='form_type' type='hidden' value='contact'>
                                        <input name='utf8' type='hidden' value='✓'>

                                        <div class="row">
                                            <div class="col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <span class="ico"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
                                                    <input required type="text" id="contactFormName" class="form-control input-lg" name="contact[name]" placeholder="Tên của bạn" autocapitalize="words" value="">
                                                </div>
                                                <div class="form-group">
                                                    <span class="ico"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                                    <input required type="text" id="contactFormPhone" class="form-control input-lg" name="contact[phone]" placeholder="Tên của bạn" autocapitalize="words" value="">
                                                </div>
                                                <div class="form-group">
                                                    <span class="ico"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                                    <input required type="email" name="contact[email]" placeholder="Email của bạn" id="contactFormEmail" class="form-control input-lg" autocorrect="off" autocapitalize="off" value="">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <label for="contactFormMessage" class="sr-only">Nội dung</label>
                                                    <textarea required rows="6" name="contact[body]" class="form-control" placeholder="Viết bình luận" id="contactFormMessage"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-xs-12">
                                                <button type="submit" class="btn btn-outline insButton">Gửi thông tin</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12 pull-right infoText">
                                <div class="wrap">
                                    <h3 class="name-head">	Chúng tôi ở đây</h3>
                                    <p>{{ $contact_item->contact_title }} </p>
                                    <ul class="info-address">
                                        <li>
                                            <i class="glyphicon glyphicon-map-marker"></i>
                                            <span>{{ $contact_item->contact_add }}</span>
                                        </li>
                                        <li>
                                            <i class="glyphicon glyphicon-envelope"></i>
                                            <span>{{ $contact_item->contact_email }}</span>
                                        </li>

                                        <li>
                                            <i class="glyphicon glyphicon-phone-alt"></i>
                                            <span>{{ $contact_item->contact_phone }}</span>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
        