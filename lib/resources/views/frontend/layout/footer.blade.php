<footer id="insFooterPage" class="footerTemp">

    
        <section id="footerMidle">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12 footerCol infoShop">
                        <div class="groupFooter">
    
                            <div class="logoFt">
                                <a href="{{ asset('/') }}" title="Beauty farm"><img src="{{ asset('public/upload/template/'.$getfooter->footer_logo) }}" alt="Beauty farm" itemprop="logo"></a>
                            </div>
    
                            <div class="info">
                                {{ $getfooter->footer_description }}
                            </div>
                            <div class="address">
                                <ul class="info-address notStyle">
                                    <li>
                                        <i class="glyphicon glyphicon-map-marker"></i>
                                        <span>{{ $getfooter->footer_address }}</span>
                                    </li>
                                    <li>
                                        <i class="glyphicon glyphicon-envelope"></i>
                                        <span>{{ $getfooter->footer_email }}</span>
                                    </li>
    
                                    <li>
                                        <i class="glyphicon glyphicon-phone-alt"></i>
                                        <span>{{ $getfooter->footer_phone }}</span>
                                    </li>
    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-12 footerCol menuLink">
                        <div class="groupFooter">
                            <h4>
                                Thông tin
                            </h4>
                            <div class="menu">
                                <ul class="notStyle linklist">
    
                                    <li>
                                        <a href="{{ asset('/') }}"><span>Giới thiệu</span></a>
                                    </li>
    
                                    <li>
                                        <a href="{{ asset('product') }}"><span>Sản phẩm</span></a>
                                    </li>
    
                                    <li>
                                        <a href="{{ asset('blog') }}"><span>Tin tức</span></a>
                                    </li>
    
                                    <li>
                                        <a href="{{ asset('contact') }}"><span>Liên hệ</span></a>
                                    </li>
    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-12 footerCol menuLink">
                        <div class="groupFooter">
                            <h4>
                                Danh mục
                            </h4>
                            <div class="menu">
                                <ul class="notStyle linklist">
    
                                    @foreach ($productcategory_list as $item)
                                    <li>
                                        <a href="/"><span>{{ $item->procat_ten }}</span></a>
                                    </li>
                                    @endforeach
                                   
    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 footerCol images">
                        <div class="groupFooter">
                            <h4>
                                Fanpage
                            </h4>
                            <div class="fanpage">
                                <div class="fb-page" data-href="https://www.facebook.com/{{ $getfooter->footer_facebook }}" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                    <blockquote cite="https://www.facebook.com/{{ $getfooter->footer_facebook }}" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/{{ $getfooter->footer_facebook }}">Facebook</a></blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="footerBottom">
            <div class="container">
                <div class="footer-coppyright">
                    &copy; Developed by <a href="https://tuananhdinh.vn/" target="_blank">TuanAnhDinh</a> 
                </div>
            </div>
        </section>
    </footer>