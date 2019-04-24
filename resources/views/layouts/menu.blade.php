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
        <li id="menu-academico"><a href="#"><i class="fa fa-list"></i> <span> Product</span> <span
                    class="fa fa-angle-right" style="float: right"></span></a>
            <ul id="menu-academico-sub">
                <li id="menu-academico-avaliacoes"><a href="{{ url('product') }}"> List </a></li>
                <li id="menu-academico-boletim"><a href="{{ url('product/create') }}"> Create New</a></li>

            </ul>
        </li>
        <li id="menu-academico"><a href="#"><i class="fa fa-file-text-o"></i> <span>Ui Elements</span> <span
                    class="fa fa-angle-right" style="float: right"></span></a>
            <ul id="menu-academico-sub">
                <li id="menu-academico-avaliacoes"><a href="{{ asset('admin/forms.html') }}">Forms</a></li>
                <li id="menu-academico-boletim"><a href="{{ asset('admin/validation.html') }}">Validation
                        Forms</a></li>
                <li id="menu-academico-boletim"><a href="{{ asset('admin/table.html') }}">Tables</a></li>
                <li id="menu-academico-boletim"><a href="{{ asset('admin/buttons.html') }}">Buttons</a></li>
            </ul>
        </li>

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
