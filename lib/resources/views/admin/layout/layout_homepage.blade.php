@extends('admin.master') 
@section('title', 'Giao diện trang chủ') 
@section('main')


<link rel="stylesheet" type="text/css" href="lib/bootstrap-fileupload/bootstrap-fileupload.css" />
<link rel="stylesheet" type="text/css" href="lib/bootstrap-datepicker/css/datepicker.css" />
<link rel="stylesheet" type="text/css" href="lib/bootstrap-daterangepicker/daterangepicker.css" />
<link rel="stylesheet" type="text/css" href="lib/bootstrap-timepicker/compiled/timepicker.css" />
<link rel="stylesheet" type="text/css" href="lib/bootstrap-datetimepicker/datertimepicker.css" />

<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <!-- /row -->
        <div class="row content-panel">
            <h2 class="centered">Giao diện trang chủ</h2>
            <div class="col-md-10 col-md-offset-1 mt mb">
                <div class="accordion" id="accordion2">

                <form method="post" enctype='multipart/form-data'>

                    <!--Logo đầu trang Favicon-->
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseOne">
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Logo đầu trang - Favicon
                            </a>
                        </div>

                        <div id="collapseOne" class="accordion-body collapse in">
                            <div class="accordion-inner">
                                <div class="form-group last">
                                        
                                    <div class="col-md-12 col-md-offset-1">
                                        <div class="col-md-6">
                                            <label><strong>LOGO</strong></label>
                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                    <img id="homepage_logo_output" src="{{ asset('public/upload/template/'.$homepage_list->homepage_logo) }}" alt="" />
                                                </div>
                                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                                <div>
                                                    <span class="btn btn-theme02 btn-file">
                                                        <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                        <input id="homepage_logo_input" type="file" name="homepage_logo"class="default " />
                                                    </span>
                                                    <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label><strong>FAVICON</strong></label>
                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                    <img id="homepage_favicon_output" src="{{ asset('public/upload/template/'.$homepage_list->homepage_favicon) }}" alt="" style="position: absolute; top: 40%; left: 25%;">
                                                </div>
                                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                                <div>
                                                    <span class="btn btn-theme02 btn-file">
                                                        <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                        <input id="homepage_favicon_input" type="file" name="homepage_favicon"class="default" />
                                                    </span>
                                                    <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                    <!--Slide và banner top-->
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseTwo">
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Slide và Banner top
                            </a>
                        </div>
                        <div id="collapseTwo" class="accordion-body collapse">
                            <div class="col-md-6 ">
                                <img src="{{ asset('public/template/slider-banner.png') }}" style="width:100%"/>
                            </div>

                            <div class="col-md-6 ">
                                <h3>1. Hình slide:</h3>

                                <div class="col-md-offset-1">
                                    <label><strong>Slide 1:</strong></label>
                                    <div class="fileupload fileupload-new col-md-offset-1" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                            <img id="slide_img_1_output" src="{{ asset('public/upload/template/'.$homepage_list->slide_img_1) }}" alt="" />
                                        </div>
                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                        <div>
                                            <span class="btn btn-theme02 btn-file">
                                                <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                <input id="slide_img_1_input" type="file" name="slide_img_1"class="default" />
                                            </span>
                                            <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                        </div>
                                    </div>
                                


                                    <p><label>Link:</label> <input class="form-control" type="text" name="slide_link_1" style="width:100%" value="{{ $homepage_list->slide_link_1 }}"></p>

                                    <div class="row">    
                                        <div class="form-group col-md-12 col-sm-12">
                                            <label for="newsletter" class="control-label col-lg-4 col-sm-4" style="padding-top: 10px; padding-left: 0;">Hiển thị:</label>
                                            <div class="col-lg-8 col-sm-8">
                                                <input type="checkbox" style="width: 20px" class="checkbox form-control" name="slide_hienthi_1" />
                                            </div>
                                        </div>
                                    </div>
                                    <hr/>
                                    <label><strong>Slide 2:</strong></label>
                                    <div class="fileupload fileupload-new col-md-offset-1" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                            <img id="slide_img_2_output" src="{{ asset('public/upload/template/'.$homepage_list->slide_img_2) }}" alt="" />
                                        </div>
                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                        <div>
                                            <span class="btn btn-theme02 btn-file">
                                                <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                <input id="slide_img_2_input" type="file" name="slide_img_2"class="default" />
                                            </span>
                                            <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                        </div>
                                    </div>

                                    <p><label>Link:</label> <input class="form-control" type="text" name="slide_link_2" style="width:100%" value="{{ $homepage_list->slide_link_2 }}"></p>

                                    <div class="row">    
                                        <div class="form-group col-md-12 col-sm-12">
                                            <label for="newsletter" class="control-label col-lg-4 col-sm-4" style="padding-top: 10px; padding-left: 0;">Hiển thị:</label>
                                            <div class="col-lg-8 col-sm-8">
                                                <input type="checkbox" style="width: 20px" class="checkbox form-control" id="newsletter" name="slide_hienthi_2" />
                                            </div>
                                        </div>
                                    </div>
                                    <hr/>
                                    <label><strong>Slide 3:</strong></label>
                                    <div class="fileupload fileupload-new col-md-offset-1" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                            <img id="slide_img_3_output" src="{{ asset('public/upload/template/'.$homepage_list->slide_img_3) }}" alt="" />
                                        </div>
                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                        <div>
                                            <span class="btn btn-theme02 btn-file">
                                                <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                <input id="slide_img_3_input" type="file" name="slide_img_3"class="default" />
                                            </span>
                                            <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                        </div>
                                    </div>
                                    
                                    <p><label>Link:</label> <input class="form-control" type="text" name="slide_link_3" style="width:100%" value="{{ $homepage_list->slide_link_2 }}" ></p>

                                    <div class="row">    
                                        <div class="form-group col-md-12 col-sm-12">
                                            <label for="newsletter" class="control-label col-lg-4 col-sm-4" style="padding-top: 10px; padding-left: 0;">Hiển thị:</label>
                                            <div class="col-lg-8 col-sm-8">
                                                <input type="checkbox" style="width: 20px" class="checkbox form-control" id="newsletter" name="slide_hienthi_3" />
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                                                
                                <h3>2. Hình banner:</h3>
                                
                                <div class="col-md-offset-1">
                                    <label><strong>Banner 1:</strong></label>
                                    <div class="fileupload fileupload-new col-md-offset-1" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                            <img id="bannertop_img_1_output" src="{{ asset('public/upload/template/'.$homepage_list->bannertop_img_1) }}" alt="" />
                                        </div>
                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                        <div>
                                            <span class="btn btn-theme02 btn-file">
                                                <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                <input id="bannertop_img_1_input" type="file" name="bannertop_img_1"class="default" />
                                            </span>
                                            <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                        </div>
                                    </div>
                                    
                                    <p><label>Link:</label> <input class="form-control" type="text" name="bannertop_link_1" style="width:100%" value="{{ $homepage_list->bannertop_link_1 }}"></p>
                                    <hr/>
                                    <label><strong>Banner 2:</strong></label>
                                    <div class="fileupload fileupload-new col-md-offset-1" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                            <img id="bannertop_img_2_output" src="{{ asset('public/upload/template/'.$homepage_list->bannertop_img_2) }}" alt="" />
                                        </div>
                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                        <div>
                                            <span class="btn btn-theme02 btn-file">
                                                <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                <input id="bannertop_img_2_input" type="file" name="bannertop_img_2"class="default" />
                                            </span>
                                            <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                        </div>
                                    </div>
                                    
                                    <p><label>Link:</label> <input class="form-control" type="text" name="bannertop_link_2" style="width:100%" value="{{ $homepage_list->bannertop_link_2 }}"></p>
                                    <hr/>
                                    <label><strong>Banner 3:</strong></label>
                                    <div class="fileupload fileupload-new col-md-offset-1" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                            <img id="bannertop_img_3_output" src="{{ asset('public/upload/template/'.$homepage_list->bannertop_img_3) }}" alt="" />
                                        </div>
                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                        <div>
                                            <span class="btn btn-theme02 btn-file">
                                                <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                <input id="bannertop_img_3_input" type="file" name="bannertop_img_3"class="default" />
                                            </span>
                                            <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                        </div>
                                    </div>
                                    
                                    <p><label>Link:</label> <input class="form-control" type="text" name="bannertop_link_3" style="width:100%" value="{{ $homepage_list->bannertop_link_3 }}"></p>
                                    <hr/>
                                    <label><strong>Banner 4:</strong></label>
                                    <div class="fileupload fileupload-new col-md-offset-1" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                            <img id="bannertop_img_4_output" src="{{ asset('public/upload/template/'.$homepage_list->bannertop_img_4) }}" alt="" />
                                        </div>
                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                        <div>
                                            <span class="btn btn-theme02 btn-file">
                                                <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                <input id="bannertop_img_4_input" type="file" name="bannertop_img_4"class="default" />
                                            </span>
                                            <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                        </div>
                                    </div>
                                    
                                    <p><label>Link:</label> <input class="form-control" type="text" name="bannertop_link_4" style="width:100%" value="{{ $homepage_list->bannertop_link_4 }}"></p>
                                    
                                </div>

                            </div>

                        </div>
                    </div>


                    <!--Về chúng tôi-->
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseThree">
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Về chúng tôi
                            </a>
                        </div>
                        <div id="collapseThree" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <div class="col-md-6 ">
                                    <img src="{{ asset('public/template/about_us.png') }}" style="width:100%"/>
                                </div>
    
                                <div class="col-md-6 ">

                                    <h3>1. Hình banner:</h3>
                                    <div class="fileupload fileupload-new col-md-offset-1" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                            <img id="aboutus_img_output" src="{{ asset('public/upload/template/'.$homepage_list->aboutus_img) }}" alt="" />
                                        </div>
                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                        <div>
                                            <span class="btn btn-theme02 btn-file">
                                                <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                <input id="aboutus_img_input" type="file" name="aboutus_img"class="default" />
                                            </span>
                                            <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                        </div>
                                    </div>

                                    <h3>2. Title:</h3>
                                    <p><input class="form-control" type="text" name="aboutus_title" style="width:100%" value="{{ $homepage_list->aboutus_title }}"></p>

                                    <h3>3. Mô tả:</h3>
                                    <textarea class="form-control" name="aboutus_description" rows="7" style="width:100%">{{ $homepage_list->aboutus_description }}</textarea>

                                    <h3>4. Dịch vụ:</h3>
                                    <div class="col-md-offset-1">
                                        <label>Icon 1:</label>
                                        <div class="fileupload fileupload-new col-md-offset-1" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                <img id="aboutus_icon_1_output" src="{{ asset('public/upload/template/'.$homepage_list->aboutus_icon_1) }}" alt="" />
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                <span class="btn btn-theme02 btn-file">
                                                    <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                    <input id="aboutus_icon_1_input" type="file" name="aboutus_icon_1"class="default" />
                                                </span>
                                                <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                            </div>
                                        </div>
                                        <p>
                                            <label>Mô tả dịch vụ 1:</label> 
                                            <input class="form-control" type="text" name="aboutus_textup_1" style="width:100%" value="{{ $homepage_list->aboutus_textup_1 }}">
                                            <input class="form-control" type="text" name="aboutus_textdown_1" style="width:100%" value="{{ $homepage_list->aboutus_textdown_1 }}">
                                        </p>
                                        <hr/>

                                        <label>Icon 2:</label>
                                        <div class="fileupload fileupload-new col-md-offset-1" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                <img id="aboutus_icon_2_output" src="{{ asset('public/upload/template/'.$homepage_list->aboutus_icon_2) }}" alt="" />
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                <span class="btn btn-theme02 btn-file">
                                                    <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                    <input id="aboutus_icon_2_input" type="file" name="aboutus_icon_2"class="default" />
                                                </span>
                                                <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                            </div>
                                        </div>
                                        <p>
                                            <label>Mô tả dịch vụ 2:</label> 
                                            <input class="form-control" type="text" name="aboutus_textup_2" style="width:100%" value="{{ $homepage_list->aboutus_textup_2 }}">
                                            <input class="form-control" type="text" name="aboutus_textdown_2" style="width:100%" value="{{ $homepage_list->aboutus_textdown_2 }}">
                                        </p>
                                        <hr/>

                                        <label>Icon 3:</label>
                                        <div class="fileupload fileupload-new col-md-offset-1" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                <img id="aboutus_icon_3_output" src="{{ asset('public/upload/template/'.$homepage_list->aboutus_icon_3) }}" alt="" />
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                <span class="btn btn-theme02 btn-file">
                                                    <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                    <input id="aboutus_icon_3_input" type="file" name="aboutus_icon_3"class="default" />
                                                </span>
                                                <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                            </div>
                                        </div>
                                        <p>
                                            <label>Mô tả dịch vụ 3:</label> 
                                            <input class="form-control" type="text" name="aboutus_textup_3" style="width:100%" value="{{ $homepage_list->aboutus_textup_3 }}">
                                            <input class="form-control" type="text" name="aboutus_textdown_3" style="width:100%" value="{{ $homepage_list->aboutus_textdown_3 }}">
                                        </p>
                                        <hr/>

                                        <label>Icon 4:</label>
                                        <div class="fileupload fileupload-new col-md-offset-1" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                <img id="aboutus_icon_4_output" src="{{ asset('public/upload/template/'.$homepage_list->aboutus_icon_4) }}" alt="" />
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                <span class="btn btn-theme02 btn-file">
                                                    <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                    <input id="aboutus_icon_4_input" type="file" name="aboutus_icon_4"class="default" />
                                                </span>
                                                <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                            </div>
                                        </div>
                                        <p>
                                            <label>Mô tả dịch vụ 4:</label> 
                                            <input class="form-control" type="text" name="aboutus_textup_4" style="width:100%" value="{{ $homepage_list->aboutus_textup_4 }}">
                                            <input class="form-control" type="text" name="aboutus_textdown_4" style="width:100%" value="{{ $homepage_list->aboutus_textdown_4 }}">
                                        </p>
                                        
    
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>


                    <!--Sản phẩm nổi bật-->
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseFour">
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Sản phẩm nổi bật
                            </a>
                        </div>
                        <div id="collapseFour" class="accordion-body collapse">
                            <div class="accordion-inner">
                                    <div class="form-group ">
                                        <label for="newsletter" class="control-label col-lg-4 col-sm-4" style="padding-top:10px">Nhóm nổi bật 1:</label>
                                        <div class="col-lg-8 col-sm-8">
                                            <select class="alert alert-primary" name="topproduct_1" style="width:250px; border: 1.5px solid #dbdbdb;">
                                                <option value="-1">Chọn danh mục sản phẩm</option>
                                                @foreach ($procat_list as $item)
                                                    <option value="{{ $item->procat_id }}" {{ $item->procat_id == $homepage_list->topproduct_1 ? 'selected="selected"' : '' }}>{{ $item->procat_ten }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="newsletter" class="control-label col-lg-4 col-sm-4" style="padding-top:10px">Nhóm nổi bật 2:</label>
                                        <div class="col-lg-8 col-sm-8">
                                            <select class="alert alert-primary" name="topproduct_2" style="width:250px; border: 1.5px solid #dbdbdb;">
                                                <option value="-1">Chọn danh mục sản phẩm</option>
                                                @foreach ($procat_list as $item)
                                                    <option value="{{ $item->procat_id }}" {{ $item->procat_id == $homepage_list->topproduct_2 ? 'selected="selected"' : '' }}>{{ $item->procat_ten }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="newsletter" class="control-label col-lg-4 col-sm-4" style="padding-top:10px">Nhóm nổi bật 3:</label>
                                        <div class="col-lg-8 col-sm-8">
                                            <select class="alert alert-primary" name="topproduct_3" style="width:250px; border: 1.5px solid #dbdbdb;">
                                                <option value="-1">Chọn danh mục sản phẩm</option>
                                                @foreach ($procat_list as $item)
                                                    <option value="{{ $item->procat_id }}" {{ $item->procat_id == $homepage_list->topproduct_3 ? 'selected="selected"' : '' }}>{{ $item->procat_ten }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="newsletter" class="control-label col-lg-4 col-sm-4" style="padding-top:10px">Nhóm nổi bật 4:</label>
                                        <div class="col-lg-8 col-sm-8">
                                            <select class="alert alert-primary" name="topproduct_4" style="width:250px; border: 1.5px solid #dbdbdb;">
                                                <option value="-1">Chọn danh mục sản phẩm</option>
                                                @foreach ($procat_list as $item)
                                                    <option value="{{ $item->procat_id }}" {{ $item->procat_id == $homepage_list->topproduct_4 ? 'selected="selected"' : '' }}>{{ $item->procat_ten }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>

                    <!--Khuyến mãi-->
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseFive">
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Khuyến mãi
                            </a>
                        </div>
                        <div id="collapseFive" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <div class="col-md-6 ">
                                    <img src="{{ asset('public/template/promotion.png') }}" style="width:100%"/>
                                </div>
    
                                <div class="col-md-6 ">
                                    <h3>1. Hình khuyến mãi:</h3>
                                    <div class="fileupload fileupload-new col-md-offset-1" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                            <img id="promotion_img_output" src="{{ asset('public/upload/template/'.$homepage_list->promotion_img) }}" alt="" />
                                        </div>
                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                        <div>
                                            <span class="btn btn-theme02 btn-file">
                                                <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                <input id="promotion_img_input" type="file" name="promotion_img"class="default" />
                                            </span>
                                            <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                        </div>
                                    </div>

                                    <h3>2. Tiêu đề khuyến mãi:</h3>
                                    <div class="col-md-offset-1">
                                        <input class="form-control" type="text" name="promotion_text_1" style="width:100%" value="{{ $homepage_list->promotion_text_1 }}"> 
                                        <input class="form-control" type="text" name="promotion_text_2" style="width:100%" value="{{ $homepage_list->promotion_text_2 }}">
                                        <input class="form-control" type="text" name="promotion_text_3" style="width:100%" value="{{ $homepage_list->promotion_text_3 }}">
                                    </div>
                                                                    
                                    <h3>3. Đồng hồ đếm ngược:</h3>
                                    <div class="col-md-offset-1 row">
                                        <input class="form-control col-md-2 col-sm-2" placeholder="Ngày" min="0" type="number" name="promotion_day" style="width:25%" value="{{ $homepage_list->promotion_day }}">
                                        <input class="form-control col-md-2 col-sm-2" placeholder="Giờ" min="0" max="60" type="number" name="promotion_hour" style="width:25%" value="{{ $homepage_list->promotion_hour }}">
                                        <input class="form-control col-md-2 col-sm-2" placeholder="Phút" min="0" max="60" type="number" name="promotion_minute" style="width:25%" value="{{ $homepage_list->promotion_minute }}">
                                        <input class="form-control col-md-2 col-sm-2" placeholder="Giây" min="0" max="60" type="number" name="promotion_second" style="width:25%" value="{{ $homepage_list->promotion_second }}">
                                    </div>
    
                                    <h3>4. Link khuyến mãi:</h3>
                                    <div class="col-md-offset-1 ">
                                        <input class="form-control"  type="text" name="promotion_link" style="width:100%" value="{{ $homepage_list->promotion_link }}">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                    <!--Why us-->
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseSix">
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Tại sao lại chọn chúng tôi
                            </a>
                        </div>
                        <div id="collapseSix" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <div class="col-md-6 ">
                                    <img src="{{ asset('public/template/whyus.png') }}" style="width:100%"/>
                                </div>
    
                                <div class="col-md-6 ">

                                    <h3>1. Title:</h3>
                                    <p><input class="form-control" type="text" name="whyus_title" style="width:100%" value="{{ $homepage_list->whyus_title }}"></p>
                                    
                                    <h3>2. Hình banner:</h3>
                                    <div class="fileupload fileupload-new col-md-offset-1" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                            <img id="whyus_img_output" src="{{ asset('public/upload/template/'.$homepage_list->whyus_img) }}" alt="" />
                                        </div>
                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                        <div>
                                            <span class="btn btn-theme02 btn-file">
                                                <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                <input id="whyus_img_input" type="file" name="whyus_img"class="default" />
                                            </span>
                                            <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                        </div>
                                    </div>

                                    <h3>3. Icon đại diện:</h3>
                                    <div class="col-md-offset-1">
                                        <label>Icon 1:</label>
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                <img id="whyus_icon_1_output" src="{{ asset('public/upload/template/'.$homepage_list->whyus_icon_1) }}" alt="" />
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                <span class="btn btn-theme02 btn-file">
                                                    <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                    <input id="whyus_icon_1_input" type="file" name="whyus_icon_1"class="default" />
                                                </span>
                                                <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                            </div>
                                        </div>
                                        <p>
                                            <label>Tiêu đề 1:</label> 
                                            <input class="form-control" type="text" name="whyus_title_1" style="width:100%" value="{{ $homepage_list->whyus_title_1 }}">
                                            <label>Mô tả 1:</label> 
                                            <input class="form-control" type="text" name="whyus_description_1" style="width:100%" value="{{ $homepage_list->whyus_description_1 }}">
                                        </p>
                                        <hr/>

                                        <label>Icon 2:</label>
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                <img id="whyus_icon_2_output" src="{{ asset('public/upload/template/'.$homepage_list->whyus_icon_2) }}" alt="" />
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                <span class="btn btn-theme02 btn-file">
                                                    <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                    <input id="whyus_icon_2_input" type="file" name="whyus_icon_2"class="default" />
                                                </span>
                                                <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                            </div>
                                        </div>
                                        <p>
                                            <label>Tiêu đề 2:</label> 
                                            <input class="form-control" type="text" name="whyus_title_2" style="width:100%" value="{{ $homepage_list->whyus_title_2 }}">
                                            <label>Mô tả 2:</label> 
                                            <input class="form-control" type="text" name="whyus_description_2" style="width:100%" value="{{ $homepage_list->whyus_description_2 }}">
                                        </p>
                                        <hr/>

                                        <label>Icon 3:</label>
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                <img id="whyus_icon_3_output" src="{{ asset('public/upload/template/'.$homepage_list->whyus_icon_3) }}" alt="" />
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                <span class="btn btn-theme02 btn-file">
                                                    <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                    <input id="whyus_icon_3_input" type="file" name="whyus_icon_3"class="default" />
                                                </span>
                                                <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                            </div>
                                        </div>
                                        <p>
                                            <label>Tiêu đề 3:</label> 
                                            <input class="form-control" type="text" name="whyus_title_3" style="width:100%" value="{{ $homepage_list->whyus_title_3 }}">
                                            <label>Mô tả 3:</label> 
                                            <input class="form-control" type="text" name="whyus_description_3" style="width:100%" value="{{ $homepage_list->whyus_description_3 }}">
                                        </p>
                                        <hr/>

                                        <label>Icon 4:</label>
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                <img id="whyus_icon_4_output" src="{{ asset('public/upload/template/'.$homepage_list->whyus_icon_4) }}" alt="" />
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                <span class="btn btn-theme02 btn-file">
                                                    <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                    <input id="whyus_icon_4_input" type="file" name="whyus_icon_4"class="default" />
                                                </span>
                                                <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                            </div>
                                        </div>
                                        <p>
                                            <label>Tiêu đề 4:</label> 
                                            <input class="form-control" type="text" name="whyus_title_4" style="width:100%" value="{{ $homepage_list->whyus_title_4 }}">
                                            <label>Mô tả 4:</label> 
                                            <input class="form-control" type="text" name="whyus_description_4" style="width:100%" value="{{ $homepage_list->whyus_description_4 }}">
                                        </p>
                                        <hr/>

                                        <label>Icon 5:</label>
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                <img id="whyus_icon_5_output" src="{{ asset('public/upload/template/'.$homepage_list->whyus_icon_5) }}" alt="" />
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                <span class="btn btn-theme02 btn-file">
                                                    <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                    <input id="whyus_icon_5_input" type="file" name="whyus_icon_5"class="default" />
                                                </span>
                                                <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                            </div>
                                        </div>
                                        <p>
                                            <label>Tiêu đề 5:</label> 
                                            <input class="form-control" type="text" name="whyus_title_5" style="width:100%" value="{{ $homepage_list->whyus_title_5 }}">
                                            <label>Mô tả 5:</label> 
                                            <input class="form-control" type="text" name="whyus_description_5" style="width:100%" value="{{ $homepage_list->whyus_description_5 }}">
                                        </p>
                                        <hr/>

                                        <label>Icon 6:</label>
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                <img id="whyus_icon_6_output" src="{{ asset('public/upload/template/'.$homepage_list->whyus_icon_6) }}" alt="" />
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                <span class="btn btn-theme02 btn-file">
                                                    <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                    <input id="whyus_icon_6_input" type="file" name="whyus_icon_6"class="default" />
                                                </span>
                                                <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                            </div>
                                        </div>
                                        <p>
                                            <label>Tiêu đề 6:</label> 
                                            <input class="form-control" type="text" name="whyus_title_6" style="width:100%" value="{{ $homepage_list->whyus_title_6 }}">
                                            <label>Mô tả 6:</label> 
                                            <input class="form-control" type="text" name="whyus_description_6" style="width:100%" value="{{ $homepage_list->whyus_description_6 }}">
                                        </p>
                                        
                                        
    
                                    </div>
                                    
                                    
                                </div>
                                    
                            </div>
                                
                        </div>
                        
                    </div>

                    <input class="pull-right btn btn-primary mt" type="submit" value="Cập nhật">

                    {{ csrf_field() }}

                </form>

                </div>
                <!-- end accordion -->
            </div>
            <!-- col-md-10 -->
        </div>

        

    </section>

</section>

@stop