@extends('admin.master') 
@section('title', 'Cài đặt website')
@section('main')

<!--External CSS-->
<link rel="stylesheet" type="text/css" href="lib/bootstrap-fileupload/bootstrap-fileupload.css" />
<link rel="stylesheet" type="text/css" href="lib/bootstrap-datepicker/css/datepicker.css" />
<link rel="stylesheet" type="text/css" href="lib/bootstrap-daterangepicker/daterangepicker.css" />
<link rel="stylesheet" type="text/css" href="lib/bootstrap-timepicker/compiled/timepicker.css" />
<link rel="stylesheet" type="text/css" href="lib/bootstrap-datetimepicker/datertimepicker.css" />

<section id="main-content">
    <section class="wrapper">

        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">

            <div class="col-lg-12">

                <div style="padding: 20px 10px 0 10px;" class="form-panel">
                    <h3>Thông tin công ty</h3>
                    <br/>
                    @include('error.note')
                    <form class="form-horizontal style-form" enctype='multipart/form-data' method="post">
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Tên công ty:</label>
                            <div class="col-sm-10">
                                <input type="text" name="st_tencongty" class="form-control" value="{{ $setting_item->st_tencongty }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Email:</label>
                            <div class="col-sm-10">
                                <input type="text" name="st_email" class="form-control" value="{{ $setting_item->st_email }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Hotline:</label>
                            <div class="col-sm-10">
                                <input type="text" name="st_hotline" class="form-control" value="{{ $setting_item->st_hotline }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Địa chỉ:</label>
                            <div class="col-sm-10">
                                <input type="text" name="st_diachi" class="form-control" value="{{ $setting_item->st_diachi }}">
                            </div>
                        </div>

                        {{-- <div class="form-group last">
                            <label class="control-label col-md-2">Logo đầu trang:</label>
                            <div class="col-md-10">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="{{ asset('public/upload/info/'.$setting_item->st_logohead) }}" alt="" />
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-theme02 btn-file">
                                            <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                            <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                            <input type="file" name="st_logohead" class="default" />
                                        </span>
                                        <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                    </div>
                                </div>
                                <span class="label label-info">NOTE!</span>
                                <span>
                                Kích thước hình ảnh tối ưu 100px X 100px
                                </span>
                            </div>
                        </div> --}}

                      

                        
                        <hr/>

                        <h3>Cài đặt code bổ sung</h3>
                        <br/>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Đầu trang <code>&lt;head\&gt;</code>:</label>
                            <div class="col-sm-10">
                                <textarea name="st_codehead" id="" style="width:100%;" rows="10">{{ $setting_item->st_codehead }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Thân trang <code>&lt;body\&gt;</code>:</label>
                            <div class="col-sm-10">
                                <textarea name="st_codebody" id="" style="width:100%;" rows="10">{{ $setting_item->st_codebody }}</textarea>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Chân trang <code>&lt;footer\&gt;</code>:</label>
                            <div class="col-sm-10">
                                <textarea name="st_codefoot" id="" style="width:100%;" rows="10">{{ $setting_item->st_codefoot }}</textarea>
                            </div>
                        </div>


                        <hr/>

                        <h4><strong>Tối ưu SEO</strong></h4>
                        <br/>

                        <div class="form-group ">
                            <label for="newsletter" class="control-label col-lg-2 col-sm-3">Title:</label>
                            <div class="col-lg-10 col-sm-9">
                                    <input type="text" name="st_title" class="form-control" value="{{ $setting_item->st_title }}">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Description:</label>
                            <div class="col-sm-10">
                                <textarea name="st_mota" id="" style="width:100%;" rows="7">{{ $setting_item->st_mota }}</textarea>
                            </div>
                        </div>

                        

                        <div class=" pull-right">
                            <input style="width:100px;" type="submit" class="btn btn-primary" value="Cập nhật">
                        </div>

                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
            <!-- col-lg-12-->
        </div>

    </section>
    <!-- /wrapper -->
</section>

@stop()