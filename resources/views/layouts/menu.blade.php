<div class="menu">
    <ul id="menu">
        <li><a href="{{ asset('admin/index.html') }}"><i class="fa fa-home"></i>
                <span>Dashboard</span></a></li>
        <li id="menu-academico"><a href="#"><i class="fa fa-list"></i> <span> Category</span> <span
                    class="fa fa-angle-right" style="float: right"></span></a>
            <ul id="menu-academico-sub">
                <li id="menu-academico-avaliacoes"><a href="{{ url('products') }}"> List </a></li>
                <li id="menu-academico-boletim"><a href="{{ url('categories/create') }}"> Create New</a></li>

            </ul>
        </li>
        <li id="menu-academico"><a href="#"><i class="fas fa-box"></i> <span> Products</span> <span
                    class="fa fa-angle-right" style="float: right"></span></a>
            <ul id="menu-academico-sub">
                <li id="menu-academico-avaliacoes"><a href="{{ url('product') }}"> List </a></li>
                <li id="menu-academico-boletim"><a href="{{ url('product/create') }}"> Create New</a></li>

            </ul>
        </li>
        <li id="menu-academico"><a href="#"><i class="fas fa-user"></i> <span> Customers</span> <span
                    class="fa fa-angle-right" style="float: right"></span></a>
            <ul id="menu-academico-sub">
                <li id="menu-academico-avaliacoes"><a href="{{ url('customer') }}"> List </a></li>
                <li id="menu-academico-boletim"><a href="{{ url('customer/create') }}"> Create New</a></li>

            </ul>
        </li>
        @can('Shopon')
            <li id="menu-academico"><a href="#"><i class="fas fa-users"></i> <span> User</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                <ul id="menu-academico-sub">
                    <li id="menu-academico-avaliacoes"><a href="{{ route('users.index') }}"> User List </a></li>
                    <li id="menu-academico-boletim"><a href="{{ route('users.create') }}">User Create</a></li>

                </ul>
            </li>
        @endcan
        <li id="menu-academico"><a href="#"><i class="lnr lnr-book"></i> <span>Pages</span> <span
                    class="fa fa-angle-right" style="float: right"></span></a>
            <ul id="menu-academico-sub">
                <li id="menu-academico-avaliacoes"><a href="{{ asset('admin/login.html') }}">Login</a></li>
                <li id="menu-academico-boletim"><a href="{{ asset('admin/register.html') }}">Register</a></li>
                <li id="menu-academico-boletim"><a href="{{ asset('admin/404.html') }}">404</a></li>
                <li id="menu-academico-boletim"><a href="{{ asset('admin/sign.html') }}">Login2</a></li>
                <li id="menu-academico-boletim"><a href="{{ asset('admin/profile.html') }}">Profile</a></li>
            </ul>
        </li>

    </ul>
</div>
