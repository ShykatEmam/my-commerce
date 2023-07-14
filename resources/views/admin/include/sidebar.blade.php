<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li>
                    <a class="waves-effect waves-dark" href="{{route('dashboard')}}" aria-expanded="false">
                        <i class="icon-speedometer"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-layout-grid2"></i>
                        <span class="hide-menu">Category Module</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('category.add')}}">Add Category</a></li>
                        <li><a href="{{route('category.manage')}}">Manage Category</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-email"></i>
                        <span class="hide-menu">Sub Category</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('add.subcategory')}}">Add Sub Category</a></li>
                        <li><a href="{{route('manage.subcategory')}}">Manage Sub Category</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-palette"></i>
                        <span class="hide-menu">Brand Module</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('brand.add')}}">Add Brand</a></li>
                        <li><a href="{{route('brand.manage')}}">Manage Brand</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-palette"></i>
                        <span class="hide-menu">Unit Module</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('unit.add')}}">Add Unit</a></li>
                        <li><a href="{{route('unit.manage')}}">Manage Unit</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-palette"></i>
                        <span class="hide-menu">Product Module</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Add Product</a></li>
                        <li><a href="#">Manage Product</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-palette"></i>
                        <span class="hide-menu">Order Module</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Add Order</a></li>
                        <li><a href="#">Manage Order</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-palette"></i>
                        <span class="hide-menu">Customer Module</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Manage Customer</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-palette"></i>
                        <span class="hide-menu">User Module</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Add User</a></li>
                        <li><a href="#">Manage User</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-palette"></i>
                        <span class="hide-menu">Coupon Module</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Add Coupon</a></li>
                        <li><a href="#">Manage Coupon</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-palette"></i>
                        <span class="hide-menu">Setting Module</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Company Setting</a></li>
                        <li><a href="#">Tax Setting</a></li>
                        <li><a href="#">Shipping Setting</a></li>
                    </ul>
                </li>


            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
