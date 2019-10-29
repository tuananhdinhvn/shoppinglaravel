@extends('admin.master')
@section('title', 'Trang quản trị')
@section('main')
    
  <!--main content start-->
  <section id="main-content">
      <section class="wrapper">
          <div class="row">
              <div class="col-lg-12 main-chart">
                  <!--CUSTOM CHART START -->
                  <div class="border-head">
                      <h3>Doanh thu</h3>
                  </div>

                  <div class="custom-bar-chart">
                      <ul class="y-axis">
                          <li><span>10.000</span></li>
                          <li><span>8.000</span></li>
                          <li><span>6.000</span></li>
                          <li><span>4.000</span></li>
                          <li><span>2.000</span></li>
                          <li><span>0</span></li>
                      </ul>
                      <div class="bar">
                          <div class="title">JAN</div>
                          <div class="value tooltips" data-original-title="850" data-toggle="tooltip" data-placement="top">15%</div>
                      </div>
                      <div class="bar ">
                          <div class="title">FEB</div>
                          <div class="value tooltips" data-original-title="5.000" data-toggle="tooltip" data-placement="top">50%</div>
                      </div>
                      <div class="bar ">
                          <div class="title">MAR</div>
                          <div class="value tooltips" data-original-title="6.000" data-toggle="tooltip" data-placement="top">60%</div>
                      </div>
                      <div class="bar ">
                          <div class="title">APR</div>
                          <div class="value tooltips" data-original-title="4.500" data-toggle="tooltip" data-placement="top">45%</div>
                      </div>
                      <div class="bar">
                          <div class="title">MAY</div>
                          <div class="value tooltips" data-original-title="3.200" data-toggle="tooltip" data-placement="top">32%</div>
                      </div>
                      <div class="bar ">
                          <div class="title">JUN</div>
                          <div class="value tooltips" data-original-title="6.200" data-toggle="tooltip" data-placement="top">62%</div>
                      </div>
                      <div class="bar">
                          <div class="title">JUL</div>
                          <div class="value tooltips" data-original-title="7.500" data-toggle="tooltip" data-placement="top">75%</div>
                      </div>
                  </div>
                  <!--custom chart end-->

                  
                  <div class="row mt">
                      <!-- SERVER STATUS PANELS -->
                      <div class="col-md-4 col-sm-4 mb">
                          <div class="weather pn">
                              <i class="fa fa-shopping-cart fa-4x"></i>
                              <h2>{{ $count_new_order }} new order</h2>
                          </div>
                      </div>
                      <!-- /col-md-4-->
                      <div class="col-md-4 col-sm-4 mb">
                          <!-- INSTAGRAM PANEL -->
                          <div class="weather pn">
                              <i class="fa fa-comments fa-4x"></i>
                              <h2>11 new comment</h2>
                          </div>
                      </div>
                      <!-- /col-md-4 -->
                      <div class="col-md-4 col-sm-4 mb">
                          <!-- INSTAGRAM PANEL -->
                          <div class="weather pn">
                              <i class="fa fa-tags fa-4x"></i>
                              <h2>Product list</h2>
                          </div>
                      </div>
                      <!-- /col-md-4 -->
                  </div>
                  <!-- /row -->
                
              </div>
             
          </div>
      </section>
  </section>
  <!--main content end-->
  
     
@endsection