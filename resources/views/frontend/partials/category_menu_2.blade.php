<div class="aiz-category-menu bg-white rounded @if(Route::currentRouteName() == 'home') shadow-sm" @else shadow-lg id="category-sidebar" @endif>
    <div class="p-3 bg-soft-primary d-none d-lg-block rounded-top all-category position-relative text-left">
        <a href="{{ route('categories.all') }}" class="text-reset">
        <span class="fw-600 fs-16 mr-3">{{ translate('All Categories') }}</span>
       
            <!--<span class="d-none d-lg-inline-block">{{ translate('All Categories') }} ></span>-->
        </a>
    </div>
    <ul class="list-unstyled categories no-scrollbar py-2 mb-0 text-left" >
        
        <!-- Show 15 category menu
        .pb-2, .py-2 {
    padding-bottom: 0.5rem!important;
}
        
        -->
        
        <style>
            .hova:hover{
                color:#fff;
                    background-color:#149777;
            }
        </style>
        @foreach (\App\Models\Category::where('level', 0)->orderBy('order_level', 'desc')->get()->take(15) as $key => $category)
            <li class="category-nav-element" data-id="{{ $category->id }}">
                <a href="{{ route('products.category', $category->slug) }}" class="text-truncate text-reset py-1 px-3 d-block" >
                    <img
                        class="cat-image lazyload mr-2 opacity-60 "
                        src="{{ static_asset('assets/img/placeholder.jpg') }}"
                        data-src="{{ uploaded_asset($category->icon) }}"
                        width="16"
                        alt="{{ $category->getTranslation('name') }}"
                        onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
                    >
                    <span class="cat-name hova">{{ $category->getTranslation('name') }}</span>
                </a>
                @if(count(\App\Utility\CategoryUtility::get_immediate_children_ids($category->id))>0)
                    <div class="sub-cat-menu2 c-scrollbar-light rounded shadow-lg p-4">
                        <div class="c-preloader text-center absolute-center">
                            <i class="las la-spinner la-spin la-3x opacity-70"></i>
                        </div>
                    </div>
                @endif
            </li>
        @endforeach
    </ul>
</div>
