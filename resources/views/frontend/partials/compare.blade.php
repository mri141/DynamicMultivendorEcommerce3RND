<a href="{{ route('compare') }}" class="d-flex align-items-center text-reset">
    <i class="la la-refresh la-2x opacity-80 text-white"></i>
    <span class="flex-grow-1 ml-1">
        @if(Session::has('compare'))
            <span class="badge badge-primary badge-inline badge-pill" style="background-color:#F16722 ">{{ count(Session::get('compare'))}}</span>
        @else
            <span class="badge badge-primary badge-inline badge-pill " style="background-color:#F16722 ">0</span>
        @endif
        <!--<span class="text-white nav-box-text d-none d-xl-block opacity-100">{{translate('Compare')}}</span>-->
    </span>
</a>