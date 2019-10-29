<section id="insHomeSlider">
        <div id="insSlider" class="bannerSlider">
            <div class="boxSlideHome">
                <div class="owlStyle notDots sliderWrap">
    
                   @if ($getindex->slide_hienthi_1==1)
                        <div class="itemSlide">
                            <a href="{{ $getindex->slide_link_1}}" title="" target="_blank">
                                <img class="owl-lazy" data-src="{{ asset('public/upload/template/'. $getindex->slide_img_1) }}" alt="" />
                            </a>
                        </div>
                   @endif
    
                   @if ($getindex->slide_hienthi_2==1)
                        <div class="itemSlide">
                            <a href="{{ $getindex->slide_link_2}}" title="" target="_blank">
                                <img class="owl-lazy" data-src="{{ asset('public/upload/template/'. $getindex->slide_img_2) }}" alt="" />
                            </a>
                        </div>
                   @endif
                       
                    
                   @if ($getindex->slide_hienthi_3==1)
                        <div class="itemSlide">
                            <a href="{{ $getindex->slide_link_3}}" title="" target="_blank">
                                <img class="owl-lazy" data-src="{{ asset('public/upload/template/'. $getindex->slide_img_3) }}" alt="" />
                            </a>
                        </div>
                    @endif
    
                   
    
                </div>
            </div>
        </div>
    </section>