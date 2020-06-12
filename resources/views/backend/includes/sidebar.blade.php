<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav first-nav" id="side-menu">

            <li>
                <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span
                        class="nav-label">Dashboards</span> </a>
            </li>
            <li>
                <a href="{{route('product.index')}}" class=" hvr-bounce-to-right"><i
                        class="fa fa-shopping-bag nav_icon "></i><span class="nav-label">Products</span> </a>
            </li>
            <li>
                <a href="{{route('order.index')}}" class=" hvr-bounce-to-right"><i class="fa fa-shopping-cart nav_icon "></i><span
                        class="nav-label">Orders</span> </a>
            </li>

            <li>
                <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-cog nav_icon"></i> <span
                        class="nav-label">Settings</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level second-nav">
                    <li> <a class="hvr-bounce-to-right" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-in nav_icon"></i>{{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>