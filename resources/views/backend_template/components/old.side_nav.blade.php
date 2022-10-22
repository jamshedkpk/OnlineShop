<aside class="main-sidebar elevation-4 @if (session('isSidebarDark')) sidebar-dark-primary @endif">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <!-- Large Device  -->


        @if(session()->get('isDark')== true || session()->get('isSidebarDark')== true )
            <img class="lg-logo" src="{{ $settings['darkLogo'] }}" alt="{{ $settings['compnayName'] }}">
            <!-- Small Device -->
            <img class="sm-logo" src="{{ $settings['smallDarkLogo'] }}" alt="{{ $settings['compnayName'] }}">
        @else

            <img class="lg-logo" src="{{ $settings['logo'] }}" alt="{{ $settings['compnayName'] }}">
            <!-- Small Device -->
            <img class="sm-logo" src="{{ $settings['smallLogo'] }}" alt="{{ $settings['compnayName'] }}">
        @endif

    </a>
    <!-- Sidebar -->
    <div class="sidebar custom-sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header text-bold">{{ __('ACTIVITY') }}</li>
                <li class="nav-item">
                    <a href=""
                        class="nav-link  {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>{{ __('Dashboard') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href=" {{ route('staff.index') }} "
                        class="nav-link {{ request()->is('admin/staff*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>{{ __('Staff') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('suppliers.index') }}"
                        class="nav-link {{ request()->is('admin/suppliers*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-people-carry"></i>
                        <p>{{ __('Suppliers') }}</p>
                    </a>
                </li>
                @if (auth()->user()->isAdmin())
                    <li class="nav-item">
                        <a href="{{ route('users.index') }}"
                            class="nav-link {{ request()->is('admin/users*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-users-cog"></i>
                            <p>{{ __('Users') }}</p>
                        </a>
                    </li>
                @endif
                <li class="nav-header text-bold">{{ __('EXPENSE') }}</li>
                <li class="nav-item">
                    <a href="{{ route('expCategories.index') }}"
                        class="nav-link {{ request()->is('admin/expense-categories*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-list-alt"></i>
                        <p>{{ __('Categories') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('expenses.index') }}"
                        class="nav-link {{ request()->is('admin/expenses*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-wallet"></i>
                        <p>{{ __('Expenses') }}</p>
                    </a>
                </li>

                <li class="nav-header text-bold">{{ __('PURCHASE') }}</li>
                <li class="nav-item">
                    <a href="{{ route('purchases.index') }}"
                        class="nav-link {{ request()->is('admin/purchases*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-shopping-basket"></i>
                        <p>{{ __('Purchases') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('purchaseReturn.index') }}"
                        class="nav-link {{ request()->is('admin/return-purchases*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-undo-alt"></i>
                        <p>{{ __('Return Purchases') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('purchaseDamage.index') }}"
                        class="nav-link {{ request()->is('admin/damage-purchases*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-trash-alt"></i>
                        <p>{{ __('Damage Purchases') }}</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('purchaseInventory.index') }}"
                        class="nav-link {{ request()->is('admin/purchase-inventory*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-boxes"></i>
                        <p>{{ __('Purchase Inventory') }}</p>
                    </a>
                </li>

                <li class="nav-header text-bold">{{ __('PRODUCT') }}</li>
                <li class="nav-item">
                    <a href="{{ route('categories.index') }}"
                        class="nav-link {{ request()->is('admin/categories*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tags"></i>
                        <p>{{ __('Categories') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('subCategories.index') }}"
                        class="nav-link {{ request()->is('admin/sub-categories*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-code-branch"></i>
                        <p>{{ __('Sub Categories') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('processing.index') }}"
                        class="nav-link {{ request()->is('admin/processing-products*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tools"></i>
                        <p>{{ __('Processing') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('finished.index') }}"
                        class="nav-link {{ request()->is('admin/finished-products*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-th-list"></i>
                        <p>{{ __('Finished') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('transferred.index') }}"
                        class="nav-link {{ request()->is('admin/transferred-products*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-random"></i>
                        <p>{{ __('Transferred') }}</p>
                    </a>
                </li>
                <li class="nav-header text-bold">{{ __('REPORT') }}</li>
                <li class="nav-item">
                    <a href="{{ route('purchase.report') }}"
                        class="nav-link {{ request()->is('admin/purchase-report') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-chart-area"></i>
                        <p>{{ __('Purchase') }}</p>
                    </a>
                </li>
                <li
                    class="nav-item has-treeview {{ request()->is('admin/processing-report') ? 'menu-open' : '' }} {{ request()->is('admin/finished-report') ? 'menu-open' : '' }} {{ request()->is('admin/transferred-report') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-bar"></i>
                        <p>
                            {{ __('Product') }}
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview ">
                        <li class="nav-item">
                            <a href="{{ route('processing.report') }}"
                                class="nav-link {{ request()->is('admin/processing-report') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-tools"></i>
                                <p>{{ __('Processing') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('finished.report') }}"
                                class="nav-link {{ request()->is('admin/finished-report') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-th-list"></i>
                                <p>{{ __('Finished') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('transferred.report') }}"
                                class="nav-link {{ request()->is('admin/transferred-report') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-random"></i>
                                <p>{{ __('Transferred') }}</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header text-bold">{{ __('ACCOUNT') }}</li>
                <li class="nav-item">
                    <a href="{{ route('admin.setup') }}"
                        class="nav-link {{ request()->is('admin/setup') ? 'active' : '' }} {{ request()->is('admin/general-settings') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>{{ __('Setup') }}</p>
                    </a>
                </li>
                <li class="nav-item has-treeview {{ request()->is('admin/profile') ? 'menu-open' : '' }}">
                    <a href="{{route('superadmin.profile')}}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            {{ ucfirst(auth()->user()->name) }}
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview ">
                        <li class="nav-item">
                            <a href="{{ route('superadmin.profile') }}"
                                class="nav-link {{ request()->is('admin/profile') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-user-circle"></i>
                                <p>{{ __('Profile') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link admin-logout" href="{{ route('logout') }}">
                                <i class="nav-icon fas fa-power-off"></i> {{ __('Logout') }}
                            </a>
                            <form id="sidebar-logout-form" action="{{ route('logout') }}" method="POST"
                                class="no-display logout-form">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
