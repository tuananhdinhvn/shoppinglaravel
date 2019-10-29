@extends('admin.master')
@section('title', 'Thông tin khách hàng')
@section('main')


<section id="main-content">
    <section class="wrapper">
    
    <!-- BASIC FORM ELELEMNTS -->
    <div class="row mt">
            
        <div class="col-lg-12">
                
        <div style="padding: 20px 10px 0 10px;" class="form-panel">
                <h3>Thông tin khách hàng</h3>
                <br/>
            <form class="form-horizontal style-form" method="get">
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Tên khách hàng:</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Địa chỉ:</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Số điện thoại:</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Email:</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control">
                    </div>
                </div>
            

                <div class="form-group ">
                    <label for="newsletter" class="control-label col-lg-2 col-sm-3">Khách hàng VIP:</label>
                    <div class="col-lg-10 col-sm-9">
                        <input type="checkbox" style="width: 20px" class="checkbox form-control" id="newsletter" name="newsletter" />
                    </div>
                </div>


                <div class=" pull-right">
                    <input style="width:100px;" type="submit" class="btn btn-primary" value="Cập nhật">
                    <a href="{{ asset('admin/customer  ') }}"><input style="width:100px;" type="button" class="btn btn-danger" value="Hủy"></a>
                </div>

               
                


                {{ csrf_field() }}
            </form>
        </div>
        </div>
        <!-- col-lg-12-->
    </div>
   
    
    
    <section class="wrapper">
        <div class="col-lg-12">
            <div class="row content-panel">
                
                    <div class="invoice-body">
                        <div class="pull-left">
                            <h3>ĐƠN HÀNG ĐÃ MUA</h3>
                            <address></address>
                        </div>
                       
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-left" style="width:110px">MÃ ĐƠN HÀNG</th>
                                    <th class="text-left" style="width:110px">NGÀY MUA HÀNG</th>
                                    <th style="width:140px">TÊN SẢN PHẨM</th>
                                    <th style="width:60px" class="text-right">GIÁ TRỊ</th>
                                    <th style="width:90px" class="text-right">SỐ LƯỢNG</th>
                                    <th style="width:90px" class="text-right">TỔNG</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#ABC123</td>
                                    <td>11/02/2019</td>
                                    <td>Flat Pack Heritage</td>
                                    <td class="text-right">429.00</td>
                                    <td class="text-right">1</td>
                                    <td class="text-right">429.00</td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Flat Pack Heritage</td>
                                    <td class="text-right">429.00</td>
                                    <td class="text-right">1</td>
                                    <td class="text-right">429.00</td>
                                </tr>

                                <tr>
                                    <td colspan="4" rowspan="4">

                                        <td class="text-right"><strong>Discount</strong></td>
                                        <td class="text-right">0.00</td>
                                </tr>

                                <tr>
                                    <td class="text-right no-border"><strong>Shipping</strong></td>
                                    <td class="text-right">0.00</td>
                                </tr>

                                <tr>
                                    <td class="text-right no-border"><strong>VAT</strong></td>
                                    <td class="text-right">0.00</td>
                                </tr>

                                <tr>
                                    <td class="text-right no-border"><strong>TOTAL</strong></td>
                                    <td class="text-right">1029.00</td>
                                </tr>

                            </tbody>
                        </table>
                       
                    </div>
            </div>    
        </div>   
    </section>
    
    
    </section>
    <!-- /wrapper -->
</section>
   

@stop()