@extends('admin.master') 
@section('title', 'Danh sách quản trị viên') 
@section('main')

<!--main content start-->
<section id="main-content">
    <section class="wrapper">

        <!-- row -->
        <div class="row mt">
            <div class="col-md-12">

                <div class="content-panel">
                    <div class="col-sm-2 col-sm-2 pull-right">
                            <a href="{{ asset('admin/users/add') }}">
                                <button class="pull-right btn btn-primary">Thêm quản trị viên</button>
                            </a>
                    </div>
                   

                    <table class="table table-striped table-advance table-hover">
                        <h4>Danh sách quản trị viên</h4>

                        <hr>                        
                        <thead>
                            <tr>
                                <th><i class="fa fa-pencil-square-o"></i> Tên quản trị viên </th>
                                <th><i class="fa fa-envelope"></i> Email</th>
                                <th class="hidden-phone"><i class="fa fa-phone"></i> Số điện thoại</th>
                                <th><i class=" fa fa-sitemap"></i> Cấp bậc quản trị</th>
                                <th><i class=" fa fa-edit"></i> Tùy chỉnh</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($user_list as $user)
                            
                                @if (Auth::user()->name != $user->name)
                                    <tr>
                                        <td>
                                            <a href="{{ asset('admin/users/edit/'.$user->id) }}">{{ $user->name }}</a>
                                        </td>
                                        <td>{{ $user->email }}</td>
                                        <td class="hidden-phone">{{ $user->phone }}</td>
                                        <td>
                                            @if ($user->xacnhan==0)
                                            <span class="label label-warning label-mini">Đang chờ xác nhận</span>
                                            @elseif ($user->xacnhan==1 && $user->phanquyen==1)
                                               Admin
                                            @elseif ($user->xacnhan==1 && $user->phanquyen==2)
                                                Manager
                                            @else
                                                Staff
                                            @endif
                                            
                                        </td>
                                        <td>
                                            <a href="{{ asset('admin/users/edit/'.$user->id) }}">
                                                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                            </a>
                                            <a href="{{ asset('admin/users/delete/'.$user->id) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa quyền quản trị của {{ $user->username }} !')">
                                                <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                            </a>
                                        </td>
                                    </tr>
                                @endif
                                
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

@endsection