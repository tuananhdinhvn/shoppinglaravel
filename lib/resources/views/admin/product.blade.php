@extends('admin.master') 
@section('title', 'Danh sách sản phẩm') 
@section('main')

<!--main content start-->
<section id="main-content">
    <section class="wrapper">

        <!-- row -->
        <div class="row mt">
            <div class="col-md-12">

                <div class="content-panel">
                    <div class="col-sm-2 col-sm-2 pull-right">
                            <a href="{{ asset('admin/product/add') }}">
                                <button class="pull-right btn btn-primary">Thêm sản phẩm</button>
                            </a>
                    </div>
                   
                    <div>
                        <form class="form-inline col-md-9" action="" >
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <input type="text" name="search_name" value="{{ Request::get("search_name") }}" placeholder="Nhập tên sản phẩm..." class="form-control">
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="col-lg-10 col-sm-9">
                                    <select class="alert alert-primary" name="search_category" style="width:200px; border: 1.5px solid #dbdbdb;padding: 5px; margin-bottom: 0;">
                                        <option >Danh mục</option>
                                        @foreach ($procat_list as $item)
                                            <option value="{{ $item->procat_id }}" {{ Request::get('search_category')==$item->procat_id ? "selected='selected'" : ""}}>{{ $item->procat_ten }}</option>
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
                        <h4>Product list</h4>

                        <hr>

                        <thead>
                            <tr>
                                <th><i class="fa fa-tag"></i> Tên sản phẩm </th>
                                <th class="hidden-phone"><i class="fa fa-picture-o"></i> Hình đại diện</th>
                                <th><i class="fa fa-th-list"></i> Danh mục</th>
                                <th><i class=" fa fa-credit-card"></i> Giá</th>
                                <th><i class=" fa fa-edit"></i> Tùy chỉnh</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($product_list as $item)
                                <tr>
                                    <td>
                                        <a href="{{ asset('admin/product/detail/'.$item->pro_id) }}">{{ $item->pro_ten }}</a>
                                    </td>
                                    
                                    <td class="hidden-phone">
                                        <img width="60px" height="40px" src="{{ asset('public/upload/product/'.$item->pro_thumb) }}" />
                                    </td>

                                    <td>{{ $item->procat_ten }}</td>
                                    <td>{{ number_format($item->pro_giaban, 0, ',', '.') }} VND</td>
                                    <td>
                                        <a href="{{ asset('admin/product/show/'.$item->pro_id) }}" >
                                            @if ($item->pro_hienthi==1)
                                                <button class="btn btn-success btn-xs" title="Đang hiển thị"><i class="fa fa-check"></i></button>
                                            @else
                                                <button class="btn btn-danger btn-xs" title="Đang ẩn"><i class="fa fa-minus"></i></button>
                                            @endif
                                            
                                        </a>
                                        <a href="{{ asset('admin/product/detail/'.$item->pro_id) }}">
                                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                        </a>
                                        <a href="{{ asset('admin/product/delete/'.$item->pro_id) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa !')">
                                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                        </a>
                                       
                                    </td>
                                </tr>
                            @endforeach
                                
                        </tbody>
                        
                    </table>
                    <div class="pull-right">
                        {{ $product_list->links() }}
                    </div>
                    
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