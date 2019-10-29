@extends('admin.master')
@section('title', 'Danh sách khách hàng')
@section('main')


    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        
        <!-- row -->
        <div class="row mt">
          <div class="col-md-12">
              


            <div class="content-panel">

                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"><h5><strong>Tìm kiếm khách hàng:</strong></h5></label>
                    <div class="col-sm-6">
                      <input type="text" placeholder="Nhập số điện thoại khách hàng..." class="form-control">
                    </div>
                  </div>
                  <br/><br/>
                

              <table class="table table-striped table-advance table-hover">
                <h4>Danh sách khách hàng</h4>
                
                
                <hr>

                <thead>
                  <tr>
                    <th><i class="fa fa-user"></i> Tên khách hàng </th>
                    <th class="hidden-phone"><i class="fa fa-calendar"></i> Email</th>
                    <th><i class="fa fa-credit-card"></i> Số điện thoại</th>
                    <th><i class=" fa fa-bullhorn"></i> Trạng thái</th>
                    <th><i class=" fa fa-edit"></i> Tùy chỉnh</th>
                  </tr>
                </thead>
                <tbody>
                    
                  @foreach ($customer_list as $item)
                    <tr>
                      <td>
                        <a href="{{ asset('admin/customer/detail/1') }}">{{ $item->name }}</a>
                      </td>
                      <td class="hidden-phone">{{ $item->email }}</td>
                      <td>{{ $item->phone }}</td>
                      <td><span class="label label-warning label-mini">VIP</span></td>
                      <td>
                        <a href="{{ asset('admin/customer/detail/1') }}"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                        @if (Auth::user()->phanquyen == 1)
                          <button class="btn btn-danger btn-xs" title="Xóa thông tin khách hàng" onclick="return confirm('Bạn có chắc chắn muốn xóa khách hàng {{ $item->name }} !')"><i class="fa fa-trash-o "></i></button>
                        @endif
                        
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