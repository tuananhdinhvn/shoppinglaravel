@extends('admin.master') 
@section('title', 'Sửa danh mục bài viết') 
@section('main')

<section id="main-content">
    <section class="wrapper">
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <h4 class="mb">Chỉnh sửa danh mục bài viết</h4>
                    @include('error.note')
                    <form class="form-horizontal style-form" method="post">
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Tên danh mục: </label>
                            <div class="col-sm-10">
                                <input type="text" name="blogcat_ten" class="form-control" value="{{ $blogcat_edit->blogcat_ten }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Mô tả: </label>
                            <div class="col-sm-10">
                                <input type="text" name="blogcat_mota" class="form-control" value="{{ $blogcat_edit->blogcat_mota }}">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">URL</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." readonly value="{{ $blogcat_edit->blogcat_slug }}">
                            </div>
                        </div>
                        

                        <div class="form-group">
                            <div class="row pull-right" style="padding-right:50px">
                                <input style="width:100px;" type="submit" class="btn btn-primary" value="Cập nhật">
                                <a href="{{ asset('admin/blogcat') }}"><input style="width:100px;" type="button" class="btn btn-danger" value="Hủy"></a>
                            </div>
                        </div>
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
            <!-- col-lg-12-->
        </div>
        <!-- /row -->

    </section>
    <!-- /wrapper -->
</section>

@stop