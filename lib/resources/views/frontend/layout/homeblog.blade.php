<section id="insBlog" class="seasionPage">
        <div class="container">
            <div class="groupBlog">
                <div class="effectTitle">
                    <h2>
                        <span>Tin tức</span> nổi bật
                    </h2>
                    <div class="borderLine">
                        <div class="icon">
                            <img src="//theme.hstatic.net/1000271724/1000376256/14/icon_border.png?v=88" alt="<span>Sản phẩm </span>nổi bật nhất">
                        </div>
                    </div>
                </div>
                <div id="blogHomeSlide" class="owlStyle notDots slideBlogHome">
    
                    @foreach ($getblog_index as $item)
                        <div class="article_item">
                            <div class="insArticleLoop">
                                <div class="articlePostBody bg_w">
                                    <div class="postThumbIMG relative imageHover">
                                        <a href="{{ asset('blog/'.$item->blog_slug.'/'.$item->blog_id) }}">
                                            <img data-reg="false" class="imgLoopItem" src="{{ asset('public/upload/blog/'.$item->blog_thumb) }}" alt="{{ $item->blog_ten }}">
                                        </a>
                                        <div class="createdInfo">
                                            <ul class="notStyle">
                                                <li class="time"><i class="fa fa-calendar" aria-hidden="true"></i>
                                                    <time>{{ date('d/m/Y', strtotime($item->created_at)) }}</time>
                                                </li>
                                                <li class="post"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <span>Beauty farm</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="postDetail">
                                        <div class="detail clearfix">
                                            <h3><a href="{{ asset('blog/'.$item->blog_slug.'/'.$item->blog_id) }}" title="{{ $item->blog_ten }}">{{ $item->blog_ten }}</a></h3>
                                            <p>{{ $item->blog_mota }}</p>
                                            <a href="{{ asset('blog/'.$item->blog_slug.'/'.$item->blog_id) }}" class="view" title="Xem thêm">Xem thêm <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    
    
                  
                    
                </div>
            </div>
        </div>
    </section>