@extends('frontend.layouts.app')

<style>
 .bannar1{
        
        height:465px;
        max-width:100%;
        width:100%;
      
    }
    
    .bannar2{
        
          width:100%;
        height:400px;
        
    }
    
    .bannar3{
        
         width:100%;
        height:350px;
        
    }

    
    .img_item{
        width:100%;
        height:100px;
        /*height:180px;*/
    }
    
    
@media only screen and (min-width: 320px) and (max-width: 991.98px) {
    .bannar1{
        
        width:100%;
        height:200px;
    }
     .bannar2{
        
          width:100%;
        height:190px;
        
    }
    
    
        .bannar3{
        
         width:100%;
        height:190px;
        
    }
    
    

    
  .main-holder {
    margin-top: 10%;
    width: 100%;
    border-radius: 15px;
    box-shadow: 0 24px 45px -15px rgba(161, 159, 219, 0.41);
    background-color: #ffffff;
    padding-top: 60px;
    padding-bottom: 30px;
    
  }

  .card-img {
    width: 44px;
    height: 44px;
    margin-bottom: 5px;
    margin-top: 15px;
    margin-left: auto;
    margin-right: auto;
  }
  .card-text {
    font-family: Poppins;
    font-size: 12px;
    font-weight: normal;
    font-stretch: normal;
    font-style: normal;
    line-height: normal;
    letter-spacing: normal;
    text-align: center;
    color: #2b417b;
  }
  
.category {
  width: 30%;
  margin-left: 1%;
  margin-right: 1%;
  margin-bottom: 24px;
  border-radius: 5px;
  border-style: solid;
  border-width: 1px;
  box-shadow: 0 8px 15px -10px #8fbcff;
  padding-bottom: 15px;
}
}
@media only screen and (min-width: 992px) {
   .main-holder {
    margin-top: 5%;
    width: 100%;
    border-radius: 15px;
    box-shadow: 0 24px 45px -15px rgba(161, 159, 219, 0.41);
    background-color: #ffffff;
    padding-top: 60px;
    padding-bottom: 30px;
    padding-left: 2%;
    padding-right: 2%;
  }

  .card-img {
    width: 44px;
    height: 44px;
    margin-bottom: 5px;
    margin-top: 15px;
    margin-left: auto;
    margin-right: auto;
  }
  .card-text {
    font-family: Poppins;
    font-size: 12px;
    font-weight: normal;
    font-stretch: normal;
    font-style: normal;
    line-height: normal;
    letter-spacing: normal;
    text-align: center;
    color: #2b417b;
  }
  
.category {
  width: 19%;
  margin-left: 2.6%;
  margin-right: 2.6%;
  margin-bottom: 24px;
  border-radius: 5px;
  border-style: solid;
  border-width: 1px;
  box-shadow: 0 8px 15px -10px #8fbcff;
  padding-bottom: 5px;
}


.category-header {
  width: 50%;
  margin-left: auto;
  margin-right: auto;
  min-height: 5px;
  max-height: 5px;
   border-bottom-left-radius: 10px;
   border-bottom-right-radius: 10px;
}

.category-header-1 {
  background-color: #a68fff;
}

.category-header-2 {
  background-color: #8fbcff;
}


.category-header-3 {
  background-color: #ff8faa;
}

.category-header-4 {
  background-color: #a6cd74;
}

.category-header-5 {
  background-color: #fcc18a;
}

.category-header-6 {
  background-color: #6edddd;
}


.category-1 {
  border-color: #a68fff;
}

.category-2 {
  border-color: #8fbcff;
}


.category-3 {
  border-color: #ff8faa;
}

.category-4 {
  border-color: #a6cd74;
}

.category-5 {
  border-color: #fcc18a;
}

.category-6 {
  border-color: #6edddd;
}


    
</style>

@section('content')
   
  
    <div class="container-fluid">
            <div class="row position-relative mt-3 mb-3">
                <div class="col-lg-2 position-static d-none d-lg-block">
                    @include('frontend.partials.category_menu_2')
                </div>

                <div class=" col-lg-10">
                    
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    
  <div class="carousel-inner">
      
      
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
             
                   @php
                   
                   $banner = App\Models\HomeBanner::all();
                   @endphp
                    
                
                  
                 @foreach($banner as $key => $img)
                  <div class="carousel-item {{$key==0?'active':''}}">
                      <a href="{{$img->link}}">
                           <img class="d-block w-100 bannar1" src="{{asset('public/uploads/homebanner/'.$img->image)}}" alt="First slide">
                      </a>
                        
                  </div>
    
    @endforeach
    

      
      
    <!--<div class="carousel-item active">-->
        
  <!--    <img class="d-block w-100 bannar1" src="{{asset('public/assets/homebanner/banner4.jpg')}}" alt="First slide">-->
  <!--  </div>-->
  <!--  <div class="carousel-item">-->
  <!--    <img class="d-block w-100 bannar1" src="{{asset('public/assets/homebanner/banner5.jpg')}}" alt="Second slide">-->
  <!--  </div> -->
  <!--  <div class="carousel-item">-->
  <!--    <img class="d-block w-100 bannar1" src="{{asset('public/assets/homebanner/banner7.png')}}" alt="Third slide">-->
  <!--  </div>-->
    <!-- <div class="carousel-item">-->
    <!--  <img class="d-block w-100 bannar1" src="{{asset('public/assets/img/Fashion-Nagar-Hat.jpg')}}" alt="Third slide">-->
    <!--</div>-->
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
                    
                </div>

            </div>
            
       </div>
      

    </div>
     {{-- Featured Categories --}}
    
      <div class="mb-4">
                    <div class="container">
                        
                  
                            
                            
                             @if (count($featured_categories) > 0)
                        <ul class="list-unstyled mb-0 row gutters-5">
                            @foreach ($featured_categories as $key => $category)
                                <li class="minw-0 col-4 col-md mt-3">
                                    <a href="{{ route('products.category', $category->slug) }}" class="d-block rounded bg-white p-2 text-reset shadow-sm">
                                        <img
                                            src="{{ static_asset('assets/img/placeholder.jpg') }}"
                                            data-src="{{ uploaded_asset($category->banner) }}"
                                            alt="{{ $category->getTranslation('name') }}"
                                            class="lazyload img-fit"
                                            height="78"
                                            onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder-rect.jpg') }}';"
                                        >
                                        <div class="text-truncate fs-12 fw-600 mt-2 opacity-70">{{ $category->getTranslation('name') }}</div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
 

                        
                    </div>
                </div>
    
    
    
    
    {{-- Featured categories Ends --}}  
    
    
    <style>
    .pad-lef{
        padding-left:0px !important;
       
    }
    
    .boxx {
  display: flex;
  align-items: center;
  justify-content: center;
  background: #fff;
  margin: 8px 0;
  padding: 30px;
  width: 100%;
  min-height: 108px;
   /*min-height: 100px;*/
  
  
  /* .boxx {*/
  /*display: flex;*/
  /*align-items: center;*/
  /*justify-content: center;*/
  /*background: #fff;*/
  /*margin: 20px 0;*/
  /*padding: 0px;*/
  /*width: 100%;*/
  /*min-height: 70px;*/
  
  
  
  /*border: 2px #ccc solid;*/
   box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px !important;
  /*border: 1px solid red !important;*/
  /*border-radius: 10px !important;"*/
  border-radius: 0px !important;"
 
  color: #fff;
}
      @media only screen and (min-width:767px) and (max-width:1260px){
         .boxx{
             min-height: 110px ;
             padding:30px ;
         }
        
      }
        @media only screen and (min-width:1024px) and (max-width:1208px){
         .boxx{
             min-height: 110px;
             padding:20px;
         }
        
      }
      
        
    </style>
    
    
    
    
    
    
    
    
    
    
    
   


    {{-- Banner section 1 --}}
   <!--@if (get_setting('home_banner1_images') != null)-->
   <!-- <div class="mb-4">-->
   <!--    <div class="container">-->
   <!--           <h3 class="mb-3" style="text-align:center">Premium Service</h3>-->
   <!--         <div class="row gutters-10">-->
              
   <!--             @php $banner_1_imags = json_decode(get_setting('home_banner1_images')); @endphp-->
   <!--             @foreach ($banner_1_imags as $key => $value)-->
   <!--                 <div class="col-lg-3 mb-3">-->
   <!--                     <div class="mb-3 mb-lg-0">-->
   <!--                         <a href="{{ json_decode(get_setting('home_banner1_links'), true)[$key] }}" class="d-block text-reset">-->
   <!--                             <img src="{{ static_asset('assets/img/placeholder-rect.jpg') }}" data-src="{{ uploaded_asset($banner_1_imags[$key]) }}" alt="{{ env('APP_NAME') }} promo" class="img-fluid lazyload w-100">-->
   <!--                         </a>-->
   <!--                     </div>-->
   <!--                 </div>-->
   <!--             @endforeach-->
   <!--         </div>-->
   <!--         </div>-->
      
   <!-- </div>-->
   <!-- @endif-->
   

    
        <style>
   @media only screen and (min-width: 992px) {
        .marleft{
            margin-left:210px !important;
        }
    }
     @media only screen and (min-width: 1024px ) and (max-width:1100px) {
        /*.marleft{*/
        /*    margin-left:150px !important;*/
        /*}*/
        .marleft{
            max-width:720px;
        }
    }
    @media only screen and (min-width: 1100px ) and (max-width:1280px) {
    
        .marleft{
            max-width:800px;
        }
    }
      @media only screen and (min-width: 1920px){
        .marleft{
            margin-left:310px !important;
        }
    }
    </style>
    
    {{-- Classified Product --}}
    @if(get_setting('classified_product') == 1)
        @php
            $classified_products = \App\Models\CustomerProduct::where('status', '1')->where('published', '1')->take(10)->get();
        @endphp
           @if (count($classified_products) > 0)
      
               <section  class="mb-4 ">
                   <div class="container " >
                       <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded ">
                            <div class="d-flex mb-3 align-items-baseline border-bottom">
                                <h3 class="h5 fw-700 mb-0">
                                    <span class="border-bottom border-primary border-width-2 pb-3 d-inline-block">Advertisement</span>
                                    <!--{{ translate('Classified Ads') }}-->
                                    
                                </h3>
                                <a href="{{ route('customer.products') }}" class="ml-auto mr-0 btn btn-primary btn-sm shadow-md">{{ translate('View More') }}</a>
                            </div>
                           <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="5"  data-xl-items="5" data-lg-items="4"  data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true'>
                               @foreach ($classified_products as $key => $classified_product)
                                   <div class="carousel-box">
                                        <div class="aiz-card-box border border-light rounded hov-shadow-md my-2 has-transition">
                                            <div class="position-relative">
                                                <a href="{{ route('customer.product', $classified_product->slug) }}" class="d-block">
                                                    <img
                                                        class="img-fit lazyload mx-auto h-140px h-md-210px"
                                                        src="{{ static_asset('assets/img/placeholder.jpg') }}"
                                                        data-src="{{ uploaded_asset($classified_product->thumbnail_img) }}"
                                                        alt="{{ $classified_product->getTranslation('name') }}"
                                                        onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
                                                    >
                                                </a>
                                                <div class="absolute-top-left pt-2 pl-2">
                                                    @if($classified_product->conditon == 'new')
                                                       <span class="badge badge-inline badge-success">{{translate('new')}}</span>
                                                    @elseif($classified_product->conditon == 'used')
                                                       <span class="badge badge-inline badge-danger">{{translate('Used')}}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="p-md-3 p-2 text-left">
                                                <div class="fs-15 mb-1">
                                                    <span class="fw-700 text-primary">{{ single_price($classified_product->unit_price) }}</span>
                                                </div>
                                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                                    <a href="{{ route('customer.product', $classified_product->slug) }}" class="d-block text-reset">{{ $classified_product->getTranslation('name') }}</a>
                                                </h3>
                                            </div>
                                       </div>
                                   </div>
                               @endforeach
                           </div>
                       </div>
                   </div>
               </section>
           @endif
       @endif
 
  <div class="mb-4">
        
        <div class="container">
            
                {{-- Banner Section 2 --}}
    @if (get_setting('home_banner2_images') != null)
    <div class="mb-4">
        <div class="container">
            <div class="row gutters-10">
                @php $banner_2_imags = json_decode(get_setting('home_banner2_images')); @endphp
                @foreach ($banner_2_imags as $key => $value)
                    <div class="col-xl-4 col-md-4 col-lg-4 col-12 mb-3">
                        <div class="mb-3 mb-lg-0">
                            <a href="{{ json_decode(get_setting('home_banner2_links'), true)[$key] }}" class="d-block text-reset">
                                <img src="{{ static_asset('assets/img/placeholder-rect.jpg') }}" data-src="{{ uploaded_asset($banner_2_imags[$key]) }}" alt="{{ env('APP_NAME') }} promo" class="img-fluid lazyload w-100">
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif
            
        </div>
        
    </div> 
 
      
    
    
    
                       
    
     <div class="mb-2">
        <div class="container">
            
            <div class="row">
                
                <div class="col">
                    <h3 class="" style="text-align:center">Our Product Categories</h3>
                </div>
            </div>
            
            
  <!--         <div class="row mb-3">-->
                
  <!--              <div class="col">-->
  <!--               <div class="main-holder d-flex flex-wrap justify-content-center align-items-center">-->
  <!--    <div class="d-flex flex-wrap col-12">-->
        <!-- card 1 starts -->
  <!--        @foreach (\App\Models\Category::where('level', 0)->orderBy('order_level', 'desc')->limit(12)->get() as $key => $category)-->
         
  <!--      <a  href="{{ route('products.category', $category->slug) }}" class="category category-1 d-flex flex-column justify-content-center align-item-center">-->
  <!--        <div class="category-header category-header-1"></div>-->
  <!--        <img src="{{ uploaded_asset($category->banner) }}" class="img-responsive card-img" style="width:44px;" />-->
  <!--        <p class="card-text">{{$category->name}}</p>-->
  <!--      </a>-->
  <!--      @endforeach-->
                <!-- card 1 ends -->
       
       
       
  <!--    </div>-->
  <!--</div>-->
  <!--              </div>-->
  <!--          </div>-->
  
  
               
  
            
            
            </div>
            
            </div>
            
            <!--start catagory first row-->
            
            <div  class="">
                <style>
                @media screen and (max-width:767px){
                     .catcon{
                         padding-left:15px;
                         
                     }
                    
                } 
                   
                </style>
                <div class="container catcon">
                     
             <div class="row">
                    @php 
                 $banner = App\Models\AddBanner::take(20)->limit(18)->get();
                   @endphp
                
                  
                 @foreach($banner as $key => $img)
                  <div class="col-lg-2 col-md-4 col-sm-6 col-6  catcon" >
                      <!--pad-lef-->
                      
                      <div class=" rounded"  >
                         
                         
                           <a class="itemss" href="">
                         <!--<a class="itemss" href="{{$img->links}}">-->
                           
                           <div class="boxx" >
                               <div class="row">
                                   <a href="{{$img->link}}">
                                      <img class="img_item" src="public/uploads/banner/{{$img->image}}" alt="">
                                        <div >
                                            <h6  class=" ml-3 text-center" style="color:#000">{{$img->name}}</h6>
                                        </div> 
                                   </a>
                                        
                                        
                               </div>
                          
                             
                                
                             </div>
                                        
                                      
                                       
                                   
                           <!--Previous Category menu -->
                           <!--<div class="boxx" >-->
                           <!--    <img class="img_item" src="public/uploads/banner/{{$img->image}}" alt="">-->
                           <!--    <div class="row">-->
                           <!--        <div class="col-12 text-center mb-2">-->
                           <!--              <img class="img_item "  src="{{asset('public/uploads/banner/'.$img->image)}}" alt="">-->
                           <!--        </div>-->
                           <!--        <div class="col-12 text-center " >-->
                           <!--            <h6>{{$img->name}}</h6>-->
                                       
                           <!--        </div>-->
                                  
                           <!--    </div>-->
                               
                                <!--margin-left:40px;-->
                                
                           <!-- </div>-->
                            
                        
                                
                            
                         
                           
                       
                               
                           {{-- <div style="height:150px;width:120px;" >
                                <img class="img_item  ml-3" style="height:80px;width:80px;margin-top:30px;" src="{{asset('public/uploads/banner/'.$img->image)}}" alt="">
                                <!--margin-left:40px;-->
                            </div> --}}
                            
                        </a>
                      </div>
                       
                    </div>
                 @endforeach
                 
                  <!--<div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-3">-->
                  <!--      <a class="itemss" href="https://courier.softcreation.tech/category/Food-xw5KV">-->
                  <!--         <img class="img_item" src="{{asset('public/assets/category_banner/choto1.png')}}" alt="">-->
                  <!--      </a>-->
                  <!--  </div>-->
                    
                    
                  <!--    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-3">-->
                  <!--      <a class="itemss" href="https://courier.softcreation.tech/category/Food-xw5KV">-->
                  <!--         <img class="img_item" src="{{asset('public/assets/category_banner/choto2.jpg')}}" alt="">-->
                  <!--      </a>-->
                  <!--  </div>-->
                    
                    
                    
                  <!--   <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-3">-->
                  <!--      <a class="itemss" href="https://courier.softcreation.tech/category/Food-xw5KV">-->
                  <!--         <img class="img_item" src="{{asset('public/assets/category_banner/choto3.png')}}" alt="">-->
                  <!--      </a>-->
                  <!--  </div>-->
                    
                  
                    
                    
                     
                  <!--    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-3">-->
                  <!--      <a class="itemss" href="https://courier.softcreation.tech/category/Food-xw5KV">-->
                  <!--         <img class="img_item" src="{{asset('public/assets/category_banner/choto4.jpg')}}" alt="">-->
                  <!--      </a>-->
                  <!--  </div>-->
                    
                    
                </div>
                </div>
                </div>
                
                <!--end catagory first row-->
                
                  <!--start catagory Second row-->
            
            <div class="">
                <div class="container">
                     
             <div class="row">
                 
                 
                   @php 
                 $banner = App\Models\AddBanner::skip(4)->take(0)->get();
                   @endphp
                
                  
                 @foreach($banner as $key => $img)
                  <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-3 bg-white">
                        <a class="itemss" href="{{$img->name}}">
                           <!--<img class="img_item" src="public/uploads/banner/{{$img->image}}" alt="">-->
                            <img class="img_item" src="{{asset('public/uploads/banner/'.$img->image)}}" alt="">
                        </a>
                    </div>
                 @endforeach
                 
                   <!--<div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-3">-->
                   <!--     <a class="itemss" href="https://courier.softcreation.tech/category/Food-xw5KV">-->
                   <!--        <img class="img_item" src="{{asset('public/assets/category_banner/choto5.webp')}}" alt="">-->
                   <!--     </a>-->
                   <!-- </div>-->
                    
                    
                  
                   <!--  <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-3">-->
                   <!--     <a class="itemss" href="https://courier.softcreation.tech/category/Food-xw5KV">-->
                   <!--        <img class="img_item" src="{{asset('public/assets/category_banner/choto6.webp')}}" alt="">-->
                   <!--     </a>-->
                   <!-- </div>-->
                   <!--     <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-3">-->
                   <!--     <a class="itemss" href="https://courier.softcreation.tech/category/Food-xw5KV">-->
                   <!--        <img class="img_item" src="{{asset('public/assets/category_banner/choto7.jpg')}}" alt="">-->
                   <!--     </a>-->
                   <!-- </div>-->
                      
                   <!--   <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-3">-->
                   <!--     <a class="itemss" href="https://courier.softcreation.tech/category/Food-xw5KV">-->
                   <!--        <img class="img_item" src="{{asset('public/assets/category_banner/choto8.png')}}" alt="">-->
                   <!--     </a>-->
                   <!-- </div>-->
                      
                </div>
                </div>
                </div>
                
                <!--end catagory second row-->
                
                
                  <!--start catagory third row-->
            
          <div class="">
                <div class="container">
                     
             <div class="row">
                     @php 
                 $banner = App\Models\AddBanner::skip(8)->take(0)->get();
                   @endphp
                
                  
                 @foreach($banner as $key => $img)
                 <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-3 bg-white" >
                  <a class="itemss" href="{{$img->name}}">
                           <!--<img class="img_item" src="public/uploads/banner/{{$img->image}}" alt="">-->
                            <img class="img_item" src="{{asset('public/uploads/banner/'.$img->image)}}" alt="">
                        </a>
                </div>
                 @endforeach
                    
          <!--          <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-3">-->
          <!--              <a class="itemss" href="https://courier.softcreation.tech/category/Food-xw5KV">-->
          <!--                 <img class="img_item" src="{{asset('public/assets/img/Category9.jpg')}}" alt="">-->
          <!--              </a>-->
          <!--          </div>-->
          <!--           <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-3">-->
          <!--              <a class="itemss" href="https://courier.softcreation.tech/category/Food-xw5KV">-->
          <!--                 <img class="img_item" src="{{asset('public/assets/img/Category10.jpg')}}" alt="">-->
          <!--              </a>-->
          <!--          </div>-->
          <!--              <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-3">-->
          <!--              <a class="itemss" href="https://courier.softcreation.tech/category/Food-xw5KV">-->
          <!--                 <img class="img_item" src="{{asset('public/assets/img/Category11.jpg')}}" alt="">-->
          <!--              </a>-->
          <!--          </div>-->
          <!--             <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-3">-->
          <!--              <a class="itemss" href="https://courier.softcreation.tech/category/Food-xw5KV">-->
          <!--                 <img class="img_item" src="{{asset('public/assets/img/Category12.jpg')}}" alt="">-->
          <!--              </a>-->
          <!--          </div>-->
                    
                    
                    
                </div>
                </div>
                </div>
                 
                <!--end catagory third row-->
                
                
  <!--<div class="mb-4">-->
        
  <!--      <div class="container">-->
            
  <!--              {{-- Banner Section 2 --}}-->
  <!--  @if (get_setting('home_banner2_images') != null)-->
  <!--  <div class="mb-4">-->
  <!--      <div class="container">-->
  <!--          <div class="row gutters-10">-->
  <!--              @php $banner_2_imags = json_decode(get_setting('home_banner2_images')); @endphp-->
  <!--              @foreach ($banner_2_imags as $key => $value)-->
  <!--                  <div class="col-xl col-md-6 col-12 mb-3">-->
  <!--                      <div class="mb-3 mb-lg-0">-->
  <!--                          <a href="{{ json_decode(get_setting('home_banner2_links'), true)[$key] }}" class="d-block text-reset">-->
  <!--                              <img src="{{ static_asset('assets/img/placeholder-rect.jpg') }}" data-src="{{ uploaded_asset($banner_2_imags[$key]) }}" alt="{{ env('APP_NAME') }} promo" class="img-fluid lazyload w-100">-->
  <!--                          </a>-->
  <!--                      </div>-->
  <!--                  </div>-->
  <!--              @endforeach-->
  <!--          </div>-->
  <!--      </div>-->
  <!--  </div>-->
  <!--  @endif-->
            
  <!--      </div>-->
        
  <!--  </div>  -->
                
                
      
      
      
      
      
      
      
      
      
      
      
       <!--  || Home Slider Start || -->  
        
 <div  class="mb-4 mt-4">
        
                <div class="container " >
                    <!--<h3 class="mb-4 mt-3" style="text-align:center;">How to Order</h3>-->
                    <div class="row">
                      <!--<div class="col-lg-2"></div>-->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    @if (get_setting('home_slider_images') != null)
                        <div class="aiz-carousel dots-inside-bottom mobile-img-auto-height" data-arrows="false" data-dots="true" data-autoplay="true" style="border:1px solid #4682B4;">
                            @php $slider_images = json_decode(get_setting('home_slider_images'), true);  @endphp
                            @foreach ($slider_images as $key => $value)
                                <div class="carousel-box">
                                    <a href="{{ json_decode(get_setting('home_slider_links'), true)[$key] }}">
                                        <img
                                            class="d-block mw-100 img-fit shadow-sm overflow-hidden"
                                            src="{{ uploaded_asset($slider_images[$key]) }}"
                                            alt="{{ env('APP_NAME')}} promo"
                                            @if(count($featured_categories) == 0)
                                            height="430"
                                            @else
                                            height="430"
                                            @endif
                                            onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder-rect.jpg') }}';"
                                        >
                                    </a>
                                </div>
                            @endforeach
                        </div>             
                    @endif
                     <!--height:"315"-->
                </div>
                
                
                  <!--<div class="col-lg-2"></div>-->
                
                
                
                
                      
                
                
            </div>
            </div>
            </div>           
                
    
                
                  {{-- Flash Deal --}}
                  
                 
   @php
        $flash_deal = \App\Models\FlashDeal::where('status', 1)->where('featured', 1)->first();
    @endphp
    @if($flash_deal != null && strtotime(date('Y-m-d H:i:s')) >= $flash_deal->start_date && strtotime(date('Y-m-d H:i:s')) <= $flash_deal->end_date)
    <section class="mb-4">
        <div class="container">
            <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">

                <div class="d-flex flex-wrap mb-3 align-items-baseline border-bottom">
                    <h3 class="h5 fw-700 mb-0">
                        <span class="border-bottom border-primary border-width-2 pb-3 d-inline-block">{{ translate('Flash Sale') }}</span>
                    </h3>
                    <div class="aiz-count-down ml-auto ml-lg-3 align-items-center" data-date="{{ date('Y/m/d H:i:s', $flash_deal->end_date) }}"></div>
                    <a href="{{ route('flash-deal-details', $flash_deal->slug) }}" class="ml-auto mr-0 btn btn-primary btn-sm shadow-md w-100 w-md-auto">{{ translate('View More') }}</a>
                </div>

                <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="6" data-xl-items="6" data-lg-items="6"  data-md-items="6" data-sm-items="2" data-xs-items="2" data-arrows='true'>
                    @foreach ($flash_deal->flash_deal_products->take(20) as $key => $flash_deal_product)
                        @php
                            $product = \App\Models\Product::find($flash_deal_product->product_id);
                        @endphp
                        @if ($product != null && $product->published != 0)
                            <div class="carousel-box">
                                @include('frontend.partials.product_box_1',['product' => $product])
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @endif
                
          {{-- Best Selling  --}}
    <div id="section_best_selling">

    </div>
   
            <!-- Category wise product -->
              {{-- Category wise Products --}}
    <div id="section_home_categories">

    </div>
            
            
            
            <!-- Category wise product Ends -->
         
         
         
       
            
            
  
    <!--    <div class="mb-4">-->
        
    <!--            <div class="container">-->
    <!--                <h3 class="mb-4 mt-3" style="text-align:center;">Why People <span> <img style="width:32px; height:32px;" src="{{asset('public/assets/img/heart.png')}}"/></span>  XYZ</h3>-->
    <!--                <div class="row">-->
                     
    <!--                <div class="col-lg-12">-->
    <!--                {{-- Banner Section 2 --}}-->
    <!--@if (get_setting('home_banner3_images') != null)-->
    <!--<div class="mb-4">-->
    <!--    <div class="container">-->
    <!--        <div class="row gutters-10">-->
    <!--            @php $banner_3_imags = json_decode(get_setting('home_banner3_images')); @endphp-->
    <!--            @foreach ($banner_3_imags as $key => $value)-->
    <!--                <div class="col-xl col-md col-sm">-->
    <!--                    <div class="mb-3 mb-lg-0">-->
    <!--                        <a href="{{ json_decode(get_setting('home_banner3_links'), true)[$key] }}" class="d-block text-reset">-->
    <!--                            <img src="{{ static_asset('assets/img/placeholder-rect.jpg') }}" data-src="{{ uploaded_asset($banner_3_imags[$key]) }}" alt="{{ env('APP_NAME') }} promo" class="img-fluid lazyload w-100">-->
    <!--                        </a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            @endforeach-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!--@endif-->
                    
    <!--            </div>-->
             
    <!--        </div>-->
    <!--        </div>-->
    <!--        </div> -->
        
    
             
         {{--   
            <div class="mb-4">
                <div class="container">
                     <h3 class="mb-4 mt-3" style="text-align:center;">Our Satisfying Customers</h3>
                    <div class="row">
                   
                      <div class="col-lg-2"></div>
                       <div class="col-lg-8">
                   
                       
                        </div>
                        
                          <div class="col-lg-2"></div>
                 
                </div>
            </div>
            </div> 
            --}}
           
           
       {{--  
       <div class="mb-4 mt-3">
                <div class="container">
                    
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            
                       <img class="bannar2" src="{{asset('public/assets/img/m7.jpg')}}"/>
                        </div>
                    </div>
                    
                </div>
                </div> 
          --}}      
        
    
{{--
     <div class="mb-4 mt-3">
                <div class="container">
                    
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            
                       <img class="bannar3" src="{{asset('public/assets/img/nagarhatbanner.jpg')}}"/>
                        </div>
                    </div>
                    
                </div>
                </div> 
     --}}           
          
                
           {{--    
           <div class="mb-4">
                    <div class="container">
                        
                  
                            
                            
                             @if (count($featured_categories) > 0)
                        <ul class="list-unstyled mb-0 row gutters-5">
                            @foreach ($featured_categories as $key => $category)
                                <li class="minw-0 col-4 col-md mt-3">
                                    <a href="{{ route('products.category', $category->slug) }}" class="d-block rounded bg-white p-2 text-reset shadow-sm">
                                        <img
                                            src="{{ static_asset('assets/img/placeholder.jpg') }}"
                                            data-src="{{ uploaded_asset($category->banner) }}"
                                            alt="{{ $category->getTranslation('name') }}"
                                            class="lazyload img-fit"
                                            height="78"
                                            onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder-rect.jpg') }}';"
                                        >
                                        <div class="text-truncate fs-12 fw-600 mt-2 opacity-70">{{ $category->getTranslation('name') }}</div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
 

                        
                    </div>
                </div> 
                --}}
    


   
    
    
  
     {{-- Featured Product --}}
    <div id="section_best_sellers">

    </div>
    
    

    
   <!--    {{-- Category wise Products --}}-->
   <!--<div id="section_home_categories">-->

   <!-- </div>  -->

    <!--{{--All Products --}}-->
    <!--<div id="section_featured">-->

    <!--</div>-->
    
    

   

     {{-- Auction Product --}} 
    @if(addon_is_activated('auction'))
        <div id="auction_products">

        </div>
    @endif
    
   



 
    
        {{-- Best sellers --}}
    <div id="section_feature_product">

    </div>

    


   

    {{-- Top 10 categories and Brands --}}
    @if (get_setting('top10_categories') != null || get_setting('top10_brands') != null)
    <section class="mb-4">
        <div class="container">
            <div class="row gutters-10">
                @if (get_setting('top10_categories') != null)
                    <div class="col-lg-6">
                        <div class="d-flex mb-3 align-items-baseline border-bottom">
                            <h3 class="h5 fw-700 mb-0">
                                <span class="border-bottom border-primary border-width-2 pb-3 d-inline-block">{{ translate('Top 10 Categories') }}</span>
                            </h3>
                            <a href="{{ route('categories.all') }}" class="ml-auto mr-0 btn btn-primary btn-sm shadow-md">{{ translate('View All Categories') }}</a>
                        </div>
                        <div class="row gutters-5">
                            @php $top10_categories = json_decode(get_setting('top10_categories')); @endphp
                            @foreach ($top10_categories as $key => $value)
                                @php $category = \App\Models\Category::find($value); @endphp
                                @if ($category != null)
                                    <div class="col-sm-6">
                                        <a href="{{ route('products.category', $category->slug) }}" class="bg-white border d-block text-reset rounded p-2 hov-shadow-md mb-2">
                                            <div class="row align-items-center no-gutters">
                                                <div class="col-3 text-center">
                                                    <img
                                                        src="{{ static_asset('assets/img/placeholder.jpg') }}"
                                                        data-src="{{ uploaded_asset($category->banner) }}"
                                                        alt="{{ $category->getTranslation('name') }}"
                                                        class="img-fluid img lazyload h-60px"
                                                        onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
                                                    >
                                                </div>
                                                <div class="col-7">
                                                    <div class="text-truncat-2 pl-3 fs-14 fw-600 text-left">{{ $category->getTranslation('name') }}</div>
                                                </div>
                                                <div class="col-2 text-center">
                                                    <i class="la la-angle-right text-primary"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endif
                @if (get_setting('top10_brands') != null)
                    <div class="col-lg-6">
                        <div class="d-flex mb-3 align-items-baseline border-bottom">
                            <h3 class="h5 fw-700 mb-0">
                                <span class="border-bottom border-primary border-width-2 pb-3 d-inline-block">{{ translate('Top 10 Brands') }}</span>
                            </h3>
                            <a href="{{ route('brands.all') }}" class="ml-auto mr-0 btn btn-primary btn-sm shadow-md">{{ translate('View All Brands') }}</a>
                        </div>
                        <div class="row gutters-5">
                            @php $top10_brands = json_decode(get_setting('top10_brands')); @endphp
                            @foreach ($top10_brands as $key => $value)
                                @php $brand = \App\Models\Brand::find($value); @endphp
                                @if ($brand != null)
                                    <div class="col-sm-6">
                                        <a href="{{ route('products.brand', $brand->slug) }}" class="bg-white border d-block text-reset rounded p-2 hov-shadow-md mb-2">
                                            <div class="row align-items-center no-gutters">
                                                <div class="col-4 text-center">
                                                    <img
                                                        src="{{ static_asset('assets/img/placeholder.jpg') }}"
                                                        data-src="{{ uploaded_asset($brand->logo) }}"
                                                        alt="{{ $brand->getTranslation('name') }}"
                                                        class="img-fluid img lazyload h-60px"
                                                        onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
                                                    >
                                                </div>
                                                <div class="col-6">
                                                    <div class="text-truncate-2 pl-3 fs-14 fw-600 text-left">{{ $brand->getTranslation('name') }}</div>
                                                </div>
                                                <div class="col-2 text-center">
                                                    <i class="la la-angle-right text-primary"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
    @endif

@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $.post('{{ route('home.section.featured') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_featured').html(data);
                AIZ.plugins.slickCarousel();
            });
            $.post('{{ route('home.section.best_selling') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_best_selling').html(data);
                AIZ.plugins.slickCarousel();
            });
            $.post('{{ route('home.section.auction_products') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#auction_products').html(data);
                AIZ.plugins.slickCarousel();
            });
            $.post('{{ route('home.section.home_categories') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_home_categories').html(data);
                AIZ.plugins.slickCarousel();
            });
            
            $.post('{{ route('home.section.featuredss') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_best_sellers').html(data);
                AIZ.plugins.slickCarousel();
            });
            
              $.post('{{ route('home.section.best_sellers') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_feature_product').html(data);
                AIZ.plugins.slickCarousel();
            });
        });
    </script>
@endsection
