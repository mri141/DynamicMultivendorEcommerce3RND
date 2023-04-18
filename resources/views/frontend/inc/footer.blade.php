<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
   .f-icon{
   font-size:22px;
   color:#d40000;
   }
   .box4{
   /*border-right:1px solid #2e2e2e ;*/
   }
</style>
<section class="bg-white border-top mt-auto" style="background-color:#149777 !important">
   <div class="container" >
      <div class="row no-gutters">
         <div class="col-lg-4">
            <div class="row no-gutters">
               <div class="col-lg-6">
                  <p style="text-align:center; font-size:18px;color:#fff;"><span class="f-icon"><i class="las la-truck"></i></span> 24 hour delivery </p>
               </div>
               <div class="col-lg-6">
                  <p style="text-align:center; font-size:18px; color:#fff;"><span class="f-icon"><i class="las la-money-bill"></i></span > Cash on delivery</p>
               </div>
            </div>
         </div>
         <style>
             
         </style>
         <div class="col-lg-4 col-md-4 ">
              <ul class="list-unstyled text-center ">
                  <li>
                      <button data-toggle="modal" data-target="#exampleModal"   style="color:#fff;background-color:#F16722 !important;border:0px;border-radius:20px;" type="button" class="btn btn-warning btn-rounded  mt-2">Subscribe</button>
                  </li>
             
              
              </ul>
         </div>
         <div class="col-lg-4">
          {{--  <div class="text-center text-md-left">
              <ul class="list-inline mb-2 mt-2">
                  @if ( get_setting('payment_method_images') !=  null )
                  @foreach (explode(',', get_setting('payment_method_images')) as $key => $value)
                  <li class="list-inline-item">
                     <span style="color:#fff">Pay with: </span> <img src="{{ uploaded_asset($value) }}" height="40" style="max-height: 30px">
                  </li>
                  @endforeach
                  @endif
                  
               
               </ul> 
               
            </div> --}}
            
            
           
                   
                <div class="w-300px mw-100 mx-auto mx-md-0 mt-2 mb-2">
             
              
                    
                  
               @if(get_setting('play_store_link') != null)
               <a href="{{ get_setting('play_store_link') }}" target="_blank" class="d-inline-block mr-3 ml-1">
               <img src="{{ static_asset('assets/img/play.png') }}" class="mx-100 h-40px">
               </a>
               @endif
               @if(get_setting('app_store_link') != null)
               <a href="{{ get_setting('app_store_link') }}" target="_blank" class="d-inline-block">
               <img src="{{ static_asset('assets/img/app.png') }}" class="mx-100 h-40px">
               </a>
               @endif
            </div>
           
           
            
            
            
         </div>
      </div>
   </div>
</section>
<section class="bg-white border-top mt-auto" style="background-color:#149777 !important">
   <div class="container"  >
      <div class="row no-gutters">
         <div class="col-lg-9">
            <a href="{{ route('home') }}" class="d-block mt-2">
            @if(get_setting('footer_logo') != null)
            <img class="lazyload custom_logo" src="{{ static_asset('assets/img/placeholder-rect.jpg') }}" data-src="{{ uploaded_asset(get_setting('footer_logo')) }}" alt="{{ env('APP_NAME') }}" height="44">
            @else
            <img class="lazyload" src="{{ static_asset('assets/img/placeholder-rect.jpg') }}" data-src="{{ static_asset('assets/img/logo.png') }}" alt="{{ env('APP_NAME') }}" height="44">
            @endif
            </a><br>
             @php
    $support_policy =  \App\Models\Page::where('type', 'support_policy_page')->first();
                  @endphp
         
               
               <div class="row container-fluid" >
                <div style="color:#fff;">
                    <!--class="text-center"-->
                     @php
                echo $support_policy->getTranslation('content');
                    @endphp
                    </div>
                </div>
            <!--<p>CropLand.com is an online shop available in Dhaka, Chattogram, Jashore, Khulna, Sylhet, Gazipur, Rajshahi and Narayanganj. We believe time is valuable to our fellow residents, and that they should not have to waste hours in traffic, brave bad weather and wait in line just to buy basic necessities like eggs! This is why CropLand delivers everything you need right at your door-step and at no additional cost.</p>-->
            <div class="row mt-5">
                
               <div class="col-lg-4">
                 <h5 style="text-align:center; color:#fff;">Customer Service</h5>
                 <hr>
                 
                  <li style="list-style:none;"><a class="text-reset d-block" href="	https://sobkisubazar.com/aboutus">
                    <h4 class="h6 text-center" style="color:#fff !important; font-size:14px;">{{ translate('About Us') }}</h4>
                </a>
                         </li>
                 <li style="list-style:none;"><a class="text-reset d-block" href="https://sobkisubazar.com/contactus">
                    <h4 class="h6 text-center" style="color:#fff !important; font-size:14px;">{{ translate('Contact Us') }}</h4>
                </a>
                         </li>
                         <li style="list-style:none;"><a class="text-reset d-block" href="https://sobkisubazar.com/faq">
                    <h4 class="h6 text-center" style="color:#fff !important; font-size:14px;">{{ translate('FAQ') }}</h4>
                </a>
                         </li>
               </div>
               <div class="col-lg-4">
                <h5 style="text-align:center; color:#fff;">About Us</h5>
                 <hr>
                 <li style="list-style:none;"><a class="text-reset d-block" href="{{ route('privacypolicy') }}">
                    <h4 class="h6 text-center" style="color:#fff !important; font-size:14px;">{{ translate('Privacy Policy') }}</h4>
                </a>
                         </li>
                         <li style="list-style:none;"><a class="text-reset d-block" href="{{ route('terms') }}">
                    <h4 class="h6 text-center" style="color:#fff !important; font-size:14px;">{{ translate('Terms of Use') }}</h4>
                </a>
                         </li>
                         <li style="list-style:none;"><a class="text-reset d-block" href="https://sobkisubazar.com/returnpolicy">
                    <h4 class="h6 text-center" style="color:#fff !important; font-size:14px;">Return Refund Policy</h4>
                </a>
                         </li>
                         <li style="list-style:none;"><a class="text-reset d-block" href="https://sobkisubazar.com/supportpolicy">
                    <h4 class="h6 text-center" style="color:#fff !important; font-size:14px;">Support Policy</h4>
                </a>
                         </li>
                         <li style="list-style:none;"><a class="text-reset d-block" href="https://sobkisubazar.com/sellerpolicy">
                    <h4 class="h6 text-center" style="color:#fff !important; font-size:14px;">Seller Policy</h4>
                
                         </li>
                          <li style="list-style:none;"><a class="text-reset d-block" href="https://sobkisubazar.com/CancellationPolicy">
                    <h4 class="h6 text-center" style="color:#fff !important; font-size:14px;">Cancellation Policy</h4>
                </a>
                         </li>
               </div>
               <div class="col-lg-4"> 
                 <h5 style="text-align:center; color:#fff;">For Business </h5>
                  <hr>
                  <li style="list-style:none;"><a class="text-reset d-block" href="https://sobkisubazar.com/corporate">
                    <h4 class="h6 text-center" style="color:#fff !important; font-size:14px;">{{ translate('Corporate') }}</h4>
                </a>
                         </li>
                         
               </div>
            </div>
         </div>
         <div class="col-lg-3">
           {{-- <div class="w-300px mw-100 mx-auto mx-md-0 mt-2 ">
               @if(get_setting('play_store_link') != null)
               <a href="{{ get_setting('play_store_link') }}" target="_blank" class="d-inline-block mr-3 ml-1">
               <img src="{{ static_asset('assets/img/play.png') }}" class="mx-100 h-40px">
               </a>
               @endif
               @if(get_setting('app_store_link') != null)
               <a href="{{ get_setting('app_store_link') }}" target="_blank" class="d-inline-block">
               <img src="{{ static_asset('assets/img/app.png') }}" class="mx-100 h-40px">
               </a>
               @endif
            </div> --}}
            
            <div class="social-icons mt-2">
                
                
                      @if ( get_setting('show_social_links') )
                <ul class="list-inline my-3 my-md-0 social text-center">
                    @if ( get_setting('facebook_link') !=  null )
                    <li class="list-inline-item">
                        <a href="{{ get_setting('facebook_link') }}" target="_blank" class="facebook"><i style="color:#1877f2" class="lab la-facebook-f"></i></a>
                    </li>
                    @endif
                    @if ( get_setting('twitter_link') !=  null )
                    <li class="list-inline-item">
                        <a href="{{ get_setting('twitter_link') }}" target="_blank" class="twitter"><i style="color:#1DA1F2 ;padding:2px;" class="lab la-twitter"></i></a>
                    </li>
                    @endif
                    @if ( get_setting('instagram_link') !=  null )
                    <li class="list-inline-item">
                        <a href="{{ get_setting('instagram_link') }}" target="_blank" class="instagram"><i style="color:#FFF" class="lab la-instagram"></i></a>
                    </li>
                    @endif
                    @if ( get_setting('youtube_link') !=  null )
                    <li class="list-inline-item">
                        <a href="{{ get_setting('youtube_link') }}" target="_blank" class="youtube"><i style="color:#fE4444"  class="lab la-youtube"></i></a>
                    </li>
                    @endif
                    @if ( get_setting('linkedin_link') !=  null )
                    <li class="list-inline-item">
                        <a href="{{ get_setting('linkedin_link') }}" target="_blank" class="linkedin"><i style="color:#0077B5"  class="lab la-linkedin-in"></i></a>
                    </li>
                    @endif
                </ul>
                @endif
            </div>
            
            
            <div class="calloremail mt-3  float-lg-end text-center ml-3">
               <ul class="list-unstyled text-center ">
                    <h5 style="text-align:center; color:#fff;">Information</h5>
                  <hr style="padding-bottom:5px;">
                  <li class="mb-2 ">
                     <span><strong  style="color:#fff;" class="d-block float-lg-end text-center ">{{ get_setting('contact_phone') }}</strong></span>
                  </li>
                  <li class="mb-2">
                     <a href="mailto:{{ get_setting('contact_email') }}" class="text-reset float-lg-end text-center"><strong  style="color:#fff;"> {{ get_setting('contact_email')  }}</strong></a>
                  </li>
                  <li class="mb-2">
                     <span><strong  style="color:#fff;" class="d-block float-lg-end text-center">{{ get_setting('contact_address',null,App::getLocale()) }}</strong></span>
                  </li>
                   @if (get_setting('vendor_system_activation') == 1)
                   <hr >
                    <li class="mb-2">
                       
                            <h4 style="color:#fff !important;" class="fs-13 text-uppercase fw-600 pb-2 mb-4 ">
                            {{ translate('Be a Seller') }}
                        </h4>
                        <a href="{{ route('shops.create') }}" style="background-color:#f16722;border-color:#f16722;color:#fff;" class="btn btn-warning btn-sm ">
                            {{ translate('Apply Now') }}
                        </a>
                       
                    
                        
                       
                   </li>
                   
                @endif
                 
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>

<footer class="pt-3 pb-7 pb-xl-3 bg-white text-light" style="background-color:#149777 !important"></footer>
<div class="aiz-mobile-bottom-nav d-xl-none fixed-bottom bg-white shadow-lg border-top rounded-top" style="box-shadow: 0px -1px 10px rgb(0 0 0 / 15%)!important; ">
   <div class="row align-items-center gutters-5">
      <div class="col">
         <a href="{{ route('home') }}" class="text-reset d-block text-center pb-2 pt-3">
         <i class="las la-home fs-20 opacity-60 {{ areActiveRoutes(['home'],'opacity-100 text-primary')}}"></i>
         <span class="d-block fs-10 fw-600 opacity-60 {{ areActiveRoutes(['home'],'opacity-100 fw-600')}}">{{ translate('Home') }}</span>
         </a>
      </div>
      <div class="col">
         <a href="{{ route('categories.all') }}" class="text-reset d-block text-center pb-2 pt-3">
         <i class="las la-list-ul fs-20 opacity-60 {{ areActiveRoutes(['categories.all'],'opacity-100 text-primary')}}"></i>
         <span class="d-block fs-10 fw-600 opacity-60 {{ areActiveRoutes(['categories.all'],'opacity-100 fw-600')}}">{{ translate('Categories') }}</span>
         </a>
      </div>
      @php
      if(auth()->user() != null) {
      $user_id = Auth::user()->id;
      $cart = \App\Models\Cart::where('user_id', $user_id)->get();
      } else {
      $temp_user_id = Session()->get('temp_user_id');
      if($temp_user_id) {
      $cart = \App\Models\Cart::where('temp_user_id', $temp_user_id)->get();
      }
      }
      @endphp
      <div class="col-auto">
         <a href="{{ route('cart') }}" class="text-reset d-block text-center pb-2 pt-3" id="cart_items">
         <span class="align-items-center bg-primary border border-white border-width-4 d-flex justify-content-center position-relative rounded-circle size-50px" style="margin-top: -33px;box-shadow: 0px -5px 10px rgb(0 0 0 / 15%);border-color: #fff !important;">
         <i class="las la-shopping-bag la-2x text-white"></i>
         </span>
         <span class="d-block mt-1 fs-10 fw-600 opacity-60 {{ areActiveRoutes(['cart'],'opacity-100 fw-600')}}" >
         {{ translate('Cart') }}
         @php
         $count = (isset($cart) && count($cart)) ? count($cart) : 0;
         @endphp
         (<span class="cart-count">{{$count}}</span>)
         </span>
         </a>
      </div>
      <div class="col">
         <a href="{{ route('all-notifications') }}" class="text-reset d-block text-center pb-2 pt-3">
         <span class="d-inline-block position-relative px-2">
         <i class="las la-bell fs-20 opacity-60 {{ areActiveRoutes(['all-notifications'],'opacity-100 text-primary')}}"></i>
         @if(Auth::check() && count(Auth::user()->unreadNotifications) > 0)
         <span class="badge badge-sm badge-dot badge-circle badge-primary position-absolute absolute-top-right" style="right: 7px;top: -2px;"></span>
         @endif
         </span>
         <span class="d-block fs-10 fw-600 opacity-60 {{ areActiveRoutes(['all-notifications'],'opacity-100 fw-600')}}">{{ translate('Notifications') }}</span>
         </a>
      </div>
      <div class="col">
         @if (Auth::check())
         @if(isAdmin())
         <a href="{{ route('admin.dashboard') }}" class="text-reset d-block text-center pb-2 pt-3">
         <span class="d-block mx-auto">
         @if(Auth::user()->photo != null)
         <img src="{{ custom_asset(Auth::user()->avatar_original)}}" class="rounded-circle size-20px">
         @else
         <img src="{{ static_asset('assets/img/avatar-place.png') }}" class="rounded-circle size-20px">
         @endif
         </span>
         <span class="d-block fs-10 fw-600 opacity-60">{{ translate('Account') }}</span>
         </a>
         @else
         <a href="javascript:void(0)" class="text-reset d-block text-center pb-2 pt-3 mobile-side-nav-thumb" data-toggle="class-toggle" data-backdrop="static" data-target=".aiz-mobile-side-nav">
         <span class="d-block mx-auto">
         @if(Auth::user()->photo != null)
         <img src="{{ custom_asset(Auth::user()->avatar_original)}}" class="rounded-circle size-20px">
         @else
         <img src="{{ static_asset('assets/img/avatar-place.png') }}" class="rounded-circle size-20px">
         @endif
         </span>
         <span class="d-block fs-10 fw-600 opacity-60">{{ translate('Account') }}</span>
         </a>
         @endif
         @else
         <a href="{{ route('user.login') }}" class="text-reset d-block text-center pb-2 pt-3">
         <span class="d-block mx-auto">
         <img src="{{ static_asset('assets/img/avatar-place.png') }}" class="rounded-circle size-20px">
         </span>
         <span class="d-block fs-10 fw-600 opacity-60">{{ translate('Account') }}</span>
         </a>
         @endif
      </div>
   </div>
</div>
@if (Auth::check() && !isAdmin())
<div class="aiz-mobile-side-nav collapse-sidebar-wrap sidebar-xl d-xl-none z-1035">
   <div class="overlay dark c-pointer overlay-fixed" data-toggle="class-toggle" data-backdrop="static" data-target=".aiz-mobile-side-nav" data-same=".mobile-side-nav-thumb"></div>
   <div class="collapse-sidebar bg-white">
      @include('frontend.inc.user_side_nav')
   </div>
</div>
@endif