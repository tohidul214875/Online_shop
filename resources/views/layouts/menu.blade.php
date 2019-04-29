<div class="menu" style="margin-top: -10px;">
    <ul id="menu">
        <li><a href="{{ asset('admin/index.html') }}"><i class="fa fa-home"></i>
                <span>Dashboard</span></a></li>
        <li id="menu-academico"><a href="#"><i class="fa fa-list"></i> <span> Category</span> <span
                    class="fa fa-angle-right" style="float: right"></span></a>
            <ul id="menu-academico-sub">
                <li id="menu-academico-avaliacoes"><a href="{{ route('category.index') }}"> Category List </a></li>
                <li id="menu-academico-boletim"><a href="{{ route('category.create') }}"> Create Category</a></li>

            </ul>
        </li>
        <li id="menu-academico"><a href="#"><i class="fas fa-box"></i> <span> Products</span> <span
                    class="fa fa-angle-right" style="float: right"></span></a>
            <ul id="menu-academico-sub">
                <li id="menu-academico-avaliacoes"><a href="{{ route('product.index') }}"> List </a></li>
                <li id="menu-academico-boletim"><a href="{{ route('product.create') }}"> Create New</a></li>

            </ul>
        </li>
        <li id="menu-academico"><a href="#"><i class="fas fa-user"></i> <span> Customers</span> <span
                    class="fa fa-angle-right" style="float: right"></span></a>
            <ul id="menu-academico-sub">
                <li id="menu-academico-avaliacoes"><a href="{{ url('customer.index') }}"> List </a></li>
                <li id="menu-academico-boletim"><a href="{{ url('customer/create') }}"> Create New</a></li>

            </ul>
        </li>
        @can('Show')
            <li id="menu-academico"><a href="#"><i class="fas fa-users"></i> <span> User</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                <ul id="menu-academico-sub">
                    <li id="menu-academico-avaliacoes"><a href="{{ route('users.index') }}"> User List </a></li>
                    <li id="menu-academico-boletim"><a href="{{ route('users.create') }}">Add User</a></li>

                </ul>
            </li>
        @endcan
        @can('Show')
            <li id="menu-academico"><a href="#"><i class="fas fa-user-tag"></i> <span> Role</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                <ul id="menu-academico-sub">
                    <li id="menu-academico-avaliacoes"><a href="{{ route('roles.index') }}"> Role List </a></li>
                    <li id="menu-academico-boletim"><a href="{{ route('roles.create') }}">Add Role</a></li>

                </ul>
            </li>
        @endcan
        @can('Show')
            <li id="menu-academico"><a href="#"><i class="fas fa-drum"></i> <span> Permission</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                <ul id="menu-academico-sub">
                    <li id="menu-academico-avaliacoes"><a href="{{ route('permissions.index') }}"> Permission List </a></li>
                    <li id="menu-academico-boletim"><a href="{{ route('permissions.create') }}">Add Permission</a></li>

                </ul>
            </li>
        @endcan

    </ul>
</div>
