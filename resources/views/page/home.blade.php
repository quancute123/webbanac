@extends('layout')
@section('content')
    

<div class="c-content-box c-size-md c-bg-white">
    <div class="container">
       <!-- Begin: Testimonals 1 component -->
       <div class="c-content-client-logos-slider-1  c-bordered" data-slider="owl">
          <!-- Begin: Title 1 component -->
          <div class="c-content-title-1">
             <h3 class="c-center c-font-uppercase c-font-bold">Dịch vụ nổi bật</h3>
             <div class="c-line-center c-theme-bg"></div>
          </div>
          <div class="owl-carousel owl-theme c-theme owl-bordered1 c-owl-nav-center" data-items="6" data-desktop-items="4" data-desktop-small-items="3" data-tablet-items="3" data-mobile-items="2" data-slide-speed="5000" data-rtl="false">
             <div class="item">
                <a href="{{route('dich_vu')}}" ><img src="{{asset('frontend/img/vHPm7XyQah_1623147701.jpg')}}" alt="Trang cá nhân nickvn"/></a>
             </div>
             <div class="item">
                <a href="{{route('dich_vu')}}" ><img src="{{asset('f/rontendimg/vHPm7XyQah_1623147701.jpg')}}" alt="dịch vụ nickvn"/></a>
             </div>
             <div class="item">
                <a href="{{route('dich_vu')}}" ><img src="{{asset('frontend/img/vHPm7XyQah_1623147701.jpg')}}" alt="Mua thẻ cào"/></a> 
               </div>
             <div class="item">
                <a href="{{route('dich_vu')}}" ><img src="{{asset('frontend/img/vHPm7XyQah_1623147701.jpg')}}" alt="nạp tiền"/></a>
             </div>
          </div>
          <!-- End-->
       </div>
       <!-- End-->
    </div>
 </div>
<div class="c-content-box c-size-md c-bg-white">
    <div class="container">
       <!-- Begin: Testimonals 1 component -->
       <div class="c-content-client-logos-slider-1  c-bordered" data-slider="owl">
          <!-- Begin: Title 1 component -->
          <div class="c-content-title-1">
             <h3 class="c-center c-font-uppercase c-font-bold">Danh mục game</h3>
             <div class="c-line-center c-theme-bg"></div>
          </div>
          <div class="row row-flex-safari game-list">
             <div class="col-sm-3 col-xs-6 p-5">
                <div class="classWithPad">
                   <div class="news_image">
                      <img style="position: absolute;max-width: 79px;height: auto;top: -5px;right: -6px;z-index: 1122;" src="{{('frontend/img/giam.png')}}"/>
                      <a href="/danh-muc/danh-muc-game-free-fire" title="Danh Mục Game Free Fire" class="">
                      <img src="{{asset('frontend/img/danhmuc.gif')}}" alt="Danh Mục Game Free Fire"></a>
                   </div>
                   <div class="news_title">
                      <h2>
                         <a href="/danh-muc/danh-muc-game-lien-quan" title="Danh Mục Game Liên Quân">Danh Mục Game Liên Quân</a>
                      </h2>
                   </div>
                   <div class="news_description">
                      <p>
                         Số tài khoản: 23,763
                      </p>
                      <!-- <p>
                         Đã bán: 198
                         </p> -->
                   </div>
                   <div class="a-more">
                      <div class="row">
                         <div class="col-xs-12">
                            <div class="custom72 view">
                               <a href="/danh-muc/danh-muc-game-lien-quan" class="" title="Danh Mục Game Liên Quân">
                                  &nbsp;
                                  <style type="text/css">
                                     .custom72{
                                     border: none!important;
                                     padding: 0;
                                     }
                                     .custom72 a{
                                     background-size: 136px 35px;
                                     background-repeat: no-repeat;
                                     border: none;
                                     margin: 0 auto;
                                     width: 136px;
                                     height: 35px;
                                     background: url({{asset('frontend/img/danhmuc.gif')}});
                                     }
                                     .custom72 a:hover{
                                     background-size: 136px 35px;
                                     background-repeat: no-repeat;
                                     border: none;
                                     margin: 0 auto;
                                     width: 136px;
                                     height: 35px;
                                     background: url({{asset('frontend/img/danhmuc.gif')}});
                                     filter: saturate(2);
                                     filter: brightness(130%);
                                     }
                                  </style>
                               </a>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             
           
            
          
             <!-- End-->
          </div>
          <!-- End-->
       </div>
    </div>
    <style type="text/css">
       .news_image, .image, .news_title, .a-more, .news_description {
       position: relative;
       z-index: 200;
       }
       span.sale {
       position: absolute;
       z-index: 1000;
       right: -1px;
       top:-1px;
       background: rgba(255, 212, 36, .9);
       padding: 5px;
       text-align: center;
       color: #ee4d2d;
       width: 50px;
       font-weight: 700;
       font-size: 15px;
       }
       .sale:after {
       content: "";
       width: 0;
       height: 0;
       left: 0;
       bottom: -4px;
       position: absolute;
       border-color: transparent rgba(255, 212, 36, .9);
       border-style: solid;
       border-width: 0 25px 4px;
       }
       .outPrice {
       padding-top: 20px;
       text-align: center;
       width: 100px;
       margin: 0 auto;
       margin-top: 10px;
       display: flex;
       justify-content: center;
       }
       .oldPrice {
       text-decoration: line-through;
       color: #3f0;
       border: 2px solid;
       padding: 5px 15px;
       border-radius: 5px;
       font-size: 14px;
       font-weight: bold;
       }
       .newPrice {
       border: 2px solid red;
       padding: 5px 15px;
       color: red;
       display: inline;
       border-radius: 5px;
       margin-left: 10px;
       font-size: 14px;
       font-weight: bold;
       margin-bottom: 10px;
       }
       .game-list .a-more .view{
       margin-top: 20px;
       }
       @media (max-width: 550px) {
       .outPrice {
       flex-direction: column;
       }
       .newPrice {
       margin-left: 0;
       margin-top: 10px;
       margin-bottom: 10px;
       }
       }
    </style>
    <!-- END: PAGE CONTENT -->
 </div>
 @endsection