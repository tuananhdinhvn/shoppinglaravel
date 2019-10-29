@extends('admin.master') 
@section('title', 'Danh sách bài viết') 
@section('main')

<!--main content start-->
<section id="main-content">
    <section class="wrapper">

        <!-- row -->
        <div class="row mt">
            <div class="col-md-12">

                <div class="content-panel">
                    <div class="col-sm-2 col-sm-2 pull-right">
                            <a href="{{ asset('admin/blog/add') }}">
                                <button class="pull-right btn btn-primary">Thêm bài viết</button>
                            </a>
                    </div>
                   
                    <div>
                        <form class="form-inline col-md-9" action="" method="get">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <input type="text" name="search_name" value="{{ Request::get("search_name") }}" placeholder="Nhập tên bài viết..." class="form-control">
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="col-lg-10 col-sm-9">
                                    <select class="alert alert-primary" name="search_category" style="width:200px; border: 1.5px solid #dbdbdb;padding: 5px; margin-bottom: 0;">
                                        <option >Danh mục</option>
                                        @foreach ($blogcat_list as $item)
                                            <option value="{{ $item->blogcat_id }}" {{ Request::get('search_category')==$item->blogcat_id ? "selected='selected'" : ""}}>{{ $item->blogcat_ten }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <button type="submit" style="padding: 5px; width: 50px;"><i class="fa fa-search" style="height:100%; border: 1.5px solid #dbdbdb; "></i></button>
                        </form>
                    </div>
                    <br/>
                    <br/>

                    <table class="table table-striped table-advance table-hover">
                        <h4>Blog list</h4>

                        <hr>

                        <thead>
                            <tr>
                                <th><i class="fa fa-pencil-square-o"></i> Tên bài viết </th>
                                <th><i class="fa fa-th-list"></i> Danh mục</th>
                                <th class="hidden-phone"><i class="fa fa-calendar"></i> Cập nhật gần nhất</th>
                                <th><i class=" fa fa-user"></i> Tác giả</th>
                                <th><i class=" fa fa-edit"></i> Tùy chỉnh</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blog_list as $blog)
                            <tr>
                                <td>
                                    <a href="{{ asset('admin/blog/edit/'.$blog->blog_id) }}">{{ $blog->blog_ten }}</a>
                                </td>
                                <td>{{ $blog->blogcat_ten }}</td>
                                <td class="hidden-phone">{{ date('d/m/Y | H:i', strtotime($blog->updated_at)) }}</td>
                                <td>{{ $blog->blog_nguoiviet }}</td>
                                <td>
                                    <a href="{{ asset('admin/blog/show/'.$blog->blog_id) }}" >
                                        @if ($blog->blog_hienthi==1)
                                            <button class="btn btn-success btn-xs" title="Đang hiển thị"><i class="fa fa-check"></i></button>
                                        @else
                                            <button class="btn btn-danger btn-xs" title="Đang ẩn"><i class="fa fa-minus"></i></button>
                                        @endif
                                        
                                    </a>
                                    <a href="{{ asset('admin/blog/edit/'.$blog->blog_id) }}">
                                        <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                    </a>
                                    <a href="{{ asset('admin/blog/delete/'.$blog->blog_id) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa !')">
                                        <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                           
                          
                            
                            
                        </tbody>
                    </table>
                </div>
                <!-- /content-panel -->
            </div>
            <!-- /col-md-12 -->
        </div>
        <!-- /row -->
    </section>
</section>
<!-- /MAIN CONTENT -->

@stop()