@extends('admin.master') 
@section('title', 'Thông tin sản phẩm')

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
                    <h3>Thông tin sản phẩm</h3>
                    <br/>
                    @include('error.note')
                    <form class="form-horizontal style-form" enctype='multipart/form-data' method="post">
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Tên sản phẩm:</label>
                            <div class="col-sm-10">
                                <input type="text" name="pro_ten" class="form-control" value="{{ $editpro->pro_ten }}">
                            </div>
                        </div>

                        <div class="form-group last">
                            <label class="control-label col-md-2">Hình đại diện:</label>
                            <div class="col-md-10">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="{{ asset('public/upload/product/'.$editpro->pro_thumb) }}" class="image_output" alt="{{ $editpro->pro_ten }}" />
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-theme02 btn-file">
                                            <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                            <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                            <input type="file" name="pro_thumb"class="default image_input" />
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

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Mô tả sản phẩm:</label>
                            <div class="col-sm-10">
                                <textarea class="editmce" name="pro_thongtin" id="" style="width:100%;" rows="20">{{ $editpro->pro_thongtin }}</textarea>
                            </div>
                        </div>
                        

                        

                        <div class="form-group ">
                            <label for="newsletter" class="control-label col-lg-2 col-sm-3">Danh mục sản phẩm:</label>
                            <div class="col-lg-10 col-sm-9">
                                <select class="alert alert-primary" name="pro_procatid" style="width:200px; border: 1.5px solid #dbdbdb;">
                                   @foreach ($procat_list as $item)
                                        <option value="{{ $item->procat_id }}" @if ($item->procat_id==$editpro->pro_procatid) selected="selected" @endif>{{ $item->procat_ten }}</option>
                                   @endforeach
                                        
                                    
                                </select>
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="newsletter" class="control-label col-lg-2 col-sm-3">Giá bán:</label>
                            <div class="col-lg-10 col-sm-9">
                                    <input type="number" name="pro_giaban" min="0" class="form-control" value="{{ $editpro->pro_giaban }}">
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="newsletter" class="control-label col-lg-2 col-sm-3">Giá khuyến mãi (Nếu có):</label>
                            <div class="col-lg-10 col-sm-9">
                                    <input type="number" name="pro_giakhuyenmai" min="0" class="form-control" value="{{ $editpro->pro_giakhuyenmai }}">
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="newsletter" class="control-label col-lg-2 col-sm-3">Bảo hành:</label>
                            <div class="col-lg-10 col-sm-9">
                                    <input type="text" name="pro_baohanh" class="form-control" value="{{ $editpro->pro_baohanh }}">
                            </div>
                        </div>
    
                        <div class="form-group ">
                            <label for="newsletter" class="control-label col-lg-2 col-sm-3">Cân nặng (Kg):</label>
                            <div class="col-lg-10 col-sm-9">
                                <input type="number" name="pro_cannang" min="0" class="form-control" value="{{ $editpro->pro_cannang }}">
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="newsletter" class="control-label col-lg-2 col-sm-3">Kích thước:</label>
                            <div class="col-lg-10 col-sm-9">
                                <div class="row">
                                    <div class=" ">
                                        <label for="newsletter" class="control-label col-md-1 col-sm-12">Dài:</label>
                                        <div class="col-md-3 col-sm-12">
                                            <input type="number" name="pro_sizedai" min="0" class="form-control" value="{{ $editpro->pro_sizedai }}">
                                        </div>
                                    </div>

                                    <div class=" ">
                                        <label for="newsletter" class="control-label col-md-1 col-sm-12">Rộng:</label>
                                        <div class="col-md-3 col-sm-12">
                                            <input type="number" name="pro_sizerong" min="0" class="form-control" value="{{ $editpro->pro_sizerong }}">
                                        </div>
                                    </div>

                                    <div class=" ">
                                        <label for="newsletter" class="control-label col-md-1 col-sm-12">Cao:</label>
                                        <div class="col-md-3 col-sm-12">
                                            <input type="number" name="pro_sizecao" min="0" class="form-control" value="{{ $editpro->pro_sizecao }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="newsletter" class="control-label col-lg-2 col-sm-3">Trạng thái:</label>
                            <div class="col-lg-10 col-sm-9">
                                <select class="alert alert-primary" name="" style="width:200px; border: 1.5px solid #dbdbdb;">
                                    <option value="1">Còn hàng</option>
                                    <option value="1">Hết hàng</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">    
                            <div class="form-group col-md-4 col-sm-4">
                                <label for="newsletter" class="control-label col-lg-4 col-sm-4">Nổi bật:</label>
                                <div class="col-lg-8 col-sm-8">
                                    <input type="checkbox" style="width: 20px" class="checkbox form-control" id="newsletter" name="newsletter" name="pro_noibat"/>
                                </div>
                            </div>

                            <div class="form-group col-md-4 col-sm-4">
                                <label for="newsletter" class="control-label col-lg-4 col-sm-4">Bán chạy:</label>
                                <div class="col-lg-8 col-sm-8">
                                    <input type="checkbox" style="width: 20px" class="checkbox form-control" id="newsletter" name="newsletter" name="pro_banchay"/>
                                </div>
                            </div>

                            <div class="form-group col-md-4 col-sm-4">
                                <label for="newsletter" class="control-label col-lg-4 col-sm-4">Hiển thị:</label>
                                <div class="col-lg-8 col-sm-8">
                                    <input type="checkbox" style="width: 20px" class="checkbox form-control" id="newsletter" name="newsletter" name="pro_hienthi"/>
                                </div>
                            </div>
                        </div>
                        <br/>

                        <hr/>

                        <h4><strong>Tối ưu SEO</strong></h4>
                        <br/>

                        <div class="form-group ">
                            <label for="newsletter" class="control-label col-lg-2 col-sm-3">Title:</label>
                            <div class="col-lg-10 col-sm-9">
                                <input type="text" name="pro_title" class="form-control" value="{{ $editpro->pro_title }}">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Description:</label>
                            <div class="col-sm-10">
                                <textarea name="pro_mota" id="" style="width:100%;" rows="7">{{ $editpro->pro_mota }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">URL:</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="pro_slug" id="disabledInput" type="text" value="{{ $editpro->pro_slug }}" readonly>
                            </div>
                        </div>

                        <div class=" pull-right">
                            <input style="width:100px;" type="submit" class="btn btn-primary" value="Cập nhật">
                            <a href="{{ asset('admin/product') }}">
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

@endsection