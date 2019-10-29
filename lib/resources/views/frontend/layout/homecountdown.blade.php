<section id="insCountdown" class="">
        <div class="groupCountdown clearfix">
            <div class="col-md-7 col-sm-12 full-left text-right">
                <div class="image">
                    <img src="{{ asset('public/upload/template/'. $getindex->promotion_img) }}" alt="{{ $getindex->promotion_text_2}}" />
                </div>
            </div>
            <div class="col-md-5 col-sm-12 full-right">
                <div class="countdownDetail">
                    <p>
                        {{ $getindex->promotion_text_1}}
                    </p>
                    <h2>
                        {{ $getindex->promotion_text_2}}
                    </h2>
                    <h5>
                        {{ $getindex->promotion_text_3}}
                    </h5>
                    <div id="timeCountdown" data-time="September 07 2018 00:00:00 ">
    
                    </div>
                    <div class="action">
                        <a href="{{ $getindex->promotion_link}}" class="insButton">Mua ngay</a>
                    </div>
                </div>
            </div>
        </div>
    </section>