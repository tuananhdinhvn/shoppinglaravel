@extends('admin.master') 
@section('title', 'Danh mục sản phẩm') 
@section('main')

<section id="main-content">
    <section class="wrapper">

        <div class="row mt">
            <div class="col-md-12">
                <div class="content-panel">
                    <div class="col-sm-2 col-sm-2 pull-right">
                        <a href="{{ asset('admin/productcat/add') }}">
                            <button class="pull-right btn btn-primary">Thêm danh mục</button>
                        </a>
                    </div>

                    <table class="table table-striped table-advance table-hover">
                        <h4>Danh mục sản phẩm</h4>

                        <hr>
                        <thead>
                            <tr>
                                <th><i class="fa fa-list-ul"></i> Tên danh mục</th>

                                <th>Số sản phẩm</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($procat_list as $item)
                                <tr>
                                    <td>
                                        <a href="{{ asset('admin/productcat/edit/'.$item->procat_id) }}">{{ $item->procat_ten }}</a>
                                    </td>
                                    <td><span class="label label-warning label-mini">10 sản phẩm</span></td>
                                    <td class="middle-align">
                                        <a href="{{ asset('admin/productcat/edit/'.$item->procat_id) }}">
                                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                        </a>
    
                                        <a href="{{ asset('admin/productcat/delete/'.$item->procat_id) }}" onclick="return confirm('Tất cả sản phẩm trong cùng danh mục {{ $item->procat_ten }} cũng sẽ đồng loạt bị xóa. Bạn có chắc chắn muốn xóa !')">
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

        </div>

    </section>
</section>

@stop