@extends('admin.master') 
@section('title', 'Chỉnh sửa bài viết')


@section('css')
<!--External CSS-->
<link rel="stylesheet" type="text/css" href="lib/bootstrap-fileupload/bootstrap-fileupload.css" />
<link rel="stylesheet" type="text/css" href="lib/bootstrap-datepicker/css/datepicker.css" />
<link rel="stylesheet" type="text/css" href="lib/bootstrap-daterangepicker/daterangepicker.css" />
<link rel="stylesheet" type="text/css" href="lib/bootstrap-timepicker/compiled/timepicker.css" />
<link rel="stylesheet" type="text/css" href="lib/bootstrap-datetimepicker/datertimepicker.css" />
@endsection


@section('main')
<section id="main-content">
    <section class="wrapper">

        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">

            <div class="col-lg-12">

                <div style="padding: 20px 10px 0 10px;" class="form-panel">
                    <h3>Chỉnh sửa bài viết</h3>
                    <br/>
                    @include('error.note')
                    <form class="form-horizontal style-form" enctype='multipart/form-data' method="post">
                        
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Tiêu đề bài viết:</label>
                            <div class="col-sm-10">
                                <input type="text" name="blog_ten" class="form-control" value="{{ $blog_edit->blog_ten }}"> 
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Nội dung bài viết:</label>
                            <div class="col-sm-10">
                                <textarea class="editmce" name="blog_noidung" id="" style="width:100%;" rows="30">{{ $blog_edit->blog_noidung }}</textarea>
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="newsletter" class="control-label col-lg-2 col-sm-3">Danh mục bài viết:</label>
                            <div class="col-lg-10 col-sm-9">
                                <select class="alert alert-primary" name="blog_blogcatid" style="width:200px; border: 1.5px solid #dbdbdb;">
                                    @foreach ($blogcat_list as $blogcat)
                                        <option value="{{ $blogcat->blogcat_id }}" @if ($blogcat->blogcat_id==$blog_edit->blog_blogcatid) selected="selected" @endif>{{ $blogcat->blogcat_ten }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="form-group last">
                            <label class="control-label col-md-2">Hình đại diện:</label>
                            <div class="col-md-10">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="{{ asset('public/upload/blog/'.$blog_edit->blog_thumb) }}" class="image_output" alt="{{ $blog_edit->blog_ten }}" />
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-theme02 btn-file">
                                            <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                            <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                            <input type="file" name="blog_thumb" class="default image_input" />
                                        </span>
                                        <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                    </div>
                                </div>
                                <span class="label label-info">NOTE!</span>
                                <span>
                                Kích thước hình ảnh tối ưu 100px X 100px
                                </span>
                            </div>
                        </div>

                        

                        <div class="row">    
                            <div class="form-group col-md-4 col-sm-4">
                                <label for="newsletter" class="control-label col-lg-4 col-sm-4">Nổi bật:</label>
                                <div class="col-lg-8 col-sm-8">
                                    <input type="checkbox" style="width: 20px" class="checkbox form-control" id="newsletter" name="blog_noibat" />
                                </div>
                            </div>

                            <div class="form-group col-md-4 col-sm-4">
                                <label for="newsletter" class="control-label col-lg-4 col-sm-4">Hiển thị:</label>
                                <div class="col-lg-8 col-sm-8">
                                    <input type="checkbox" style="width: 20px" class="checkbox form-control" id="newsletter" name="blog_hienthi" />
                                </div>
                            </div>
                        </div>

                        <hr/>

                        <h4><strong>Tối ưu SEO</strong></h4>
                        <br/>

                        <div class="form-group ">
                            <label for="newsletter" class="control-label col-lg-2 col-sm-3">Title:</label>
                            <div class="col-lg-10 col-sm-9">
                                <input type="text" class="form-control" value="{{ $blog_edit->blog_title }}">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Description:</label>
                            <div class="col-sm-10">
                                <textarea name="blog_mota" id="" style="width:100%;" rows="7">{{ $blog_edit->blog_mota }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">URL:</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." readonly value="{{ $blog_edit->blog_slug }}">
                            </div>
                        </div>

                        <div class=" pull-right">
                            <input style="width:100px;" type="submit" class="btn btn-primary" value="Cập nhật">
                            <a href="{{ asset('admin/blog') }}">
                                <input style="width:100px;" type="button" class="btn btn-danger" value="Hủy">
                            </a>
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