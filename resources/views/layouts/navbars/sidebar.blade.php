
@if(Auth()->user()->type == 'staff')
<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text logo-mini">{{ __('G') }}</a>
            <a href="#" class="simple-text logo-normal">{{ __('Staff') }}</a>
        </div>
        <ul class="nav">
            <li @if (isset($pageSlug) && $pageSlug == 'dashboard') class="active " @endif>
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
             <li @if (isset($pageSlug) && $pageSlug == 'category') class="active " @endif>
                <a href="{{ route('categoryHome')  }}">
                    <i class="tim-icons icon-app"></i>
                    <p>{{ __('Categories') }}</p>
                </a>
            </li>
            <li @if (isset($pageSlug) && $pageSlug == 'company') class="active " @endif>
                <a href="{{ route('companyHome')  }}">
                    <i class="tim-icons icon-istanbul"></i>
                    <p>{{ __('Companies') }}</p>
                </a>
            </li>
            <li @if (isset($pageSlug) && $pageSlug == 'product') class="active " @endif>
                <a href="{{ route('productHome')  }}">
                    <i class="tim-icons icon-atom"></i>
                    <p>{{ __('Products') }}</p>
                </a>
            </li>
            <li @if (isset($pageSlug) && $pageSlug == 'icons') class="active " @endif>
                <a href="{{ route('pages.icons') }}">
                    <i class="tim-icons icon-atom"></i>
                    <p>{{ __('Icons') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
@endif

@if(Auth()->user()->type == 'admin')
    <div class="sidebar">
        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text logo-mini">{{ __('M') }}</a>
                <a href="#" class="simple-text logo-normal">{{ __('Admin Dash') }}</a>
            </div>
            <ul class="nav">
                <li @if (isset($pageSlug) && $pageSlug == 'dashboard') class="active " @endif>
                    <a href="{{ route('home') }}">
                        <i class="tim-icons icon-chart-pie-36"></i>
                        <p>{{ __('Dashboard') }}</p>
                    </a>
                </li>
                <li @if (isset($pageSlug) && $pageSlug == 'user' ) class="active " @endif>
                    <a href="{{ route('staffHome') }}">
                        <i class="tim-icons icon-single-02"></i>
                        <p>{{ __('User Management') }}</p>
                    </a>
                </li>
                <li @if (isset($pageSlug) && $pageSlug == 'category') class="active " @endif>
                    <a href="{{ route('categoryHome')  }}">
                        <i class="tim-icons icon-app"></i>
                        <p>{{ __('Categories') }}</p>
                    </a>
                </li>
                <li @if (isset($pageSlug) && $pageSlug == 'company') class="active " @endif>
                    <a href="{{ route('companyHome')  }}">
                        <i class="tim-icons icon-istanbul"></i>
                        <p>{{ __('Companies') }}</p>
                    </a>
                </li>
                <li @if (isset($pageSlug) && $pageSlug == 'product') class="active " @endif>
                    <a href="{{ route('productHome')  }}">
                        <i class="tim-icons icon-atom"></i>
                        <p>{{ __('Products') }}</p>
                    </a>
                </li>
                <li @if (isset($pageSlug) && $pageSlug == 'orders') class="active " @endif>
                    <a href="{{ route('orderHome')  }}">
                        <i class="tim-icons icon-basket-simple"></i>
                        <p>{{ __('Order Managment') }}</p>
                    </a>
                </li>
                <li @if (isset($pageSlug) && $pageSlug == 'history') class="active " @endif>
                    <a href="{{ route('orderHistory')  }}">
                        <i class="tim-icons icon-basket-simple"></i>
                        <p>{{ __('Order History') }}</p>
                    </a>
                </li>
                <li @if (isset($pageSlug) && $pageSlug == 'icons') class="active " @endif>
                    <a href="{{ route('pages.icons') }}">
                        <i class="tim-icons icon-atom"></i>
                        <p>{{ __('Icons') }}</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
@endif
