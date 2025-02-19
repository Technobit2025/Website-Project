<!-- Page Sidebar Start-->
<div class="sidebar-wrapper" data-sidebar-layout="stroke-svg">
    <div>
        <div class="logo-wrapper"><a href="{{ route('admin.default_dashboard') }}"><img class="img-fluid for-light"
                    src="{{ asset('assets/images/logo/logo.png') }}" alt=""><img class="img-fluid for-dark"
                    src="{{ asset('assets/images/logo/logo_dark.png') }}" alt=""></a>
            <div class="back-btn"><i class="fa-solid fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid">
                </i></div>
        </div>
        <div class="logo-icon-wrapper"><a href="{{ route('admin.default_dashboard') }}"><img class="img-fluid"
                    src="{{ asset('assets/images/logo/logo-icon.png') }}" alt=""></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"><a href="{{ route('admin.default_dashboard') }}"><img class="img-fluid"
                                src="{{ asset('assets/images/logo/logo-icon.png') }}" alt=""></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa-solid fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    <li class="pin-title sidebar-main-title">
                        <div>
                            <h6>Pinned</h6>
                        </div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="lan-1">General</h6>
                        </div>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><label
                            class="badge badge-light-primary">13</label><a class="sidebar-link sidebar-title"
                            href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-home') }}"></use>
                            </svg><span class="lan-3">Dashboard </span></a>
                        <ul class="sidebar-submenu">
                            <li><a class="lan-4" href="{{ route('admin.default_dashboard') }}">Default</a></li>
                            <li><a class="lan-5" href="{{ route('admin.ecommerce_dashboard') }}">Ecommerce</a></li>
                            <li><a href="{{ route('admin.online_course_dashboard') }}">Online course</a></li>
                            <li><a href="{{ route('admin.crypto_dashboard') }}">Crypto</a></li>
                            <li><a href="{{ route('admin.social_dashboard') }}">Social</a></li>
                            <li><a href="{{ route('admin.nft_dashboard') }}">NFT</a></li>
                            <li> <a href="{{ route('admin.school_management_dashboard') }}">School management</a></li>
                            <li> <a href="{{ route('admin.pos_dashboard') }}">POS</a></li>
                            <li><label class="badge badge-light-success">New</label><a href="{{ route('admin.crm_dashboard') }}">CRM</a>
                            </li>
                            <li><label class="badge badge-light-success">New</label><a
                                    href="{{ route('admin.analytics_dashboard') }}">Analytics</a></li>
                            <li><label class="badge badge-light-success">New</label><a href="{{ route('admin.hr_dashboard') }}">HR</a>
                            </li>
                            <li><label class="badge badge-light-success">New</label><a
                                    href="{{ route('admin.projects_dashboard') }}">Projects</a></li>
                            <li><label class="badge badge-light-success">New</label><a
                                    href="{{ route('admin.logistics_dashboard') }}">Logistics</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title"
                            href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-widget') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-widget') }}"></use>
                            </svg><span class="lan">Laravel Example</span></a>
                        <ul class="sidebar-submenu">
                            @can('role.index')
                                <li><a href="{{ route('admin.role.index') }}">Role Management</a></li>
                            @endcan
                            @can('user.index')
                                <li><a  href="{{ route('admin.user.index') }}">User Management</a></li>
                            @endcan
                            @can('blog.index')
                                <li><a href="{{ route('admin.blog.index') }}">Blog Management</a></li>
                            @endcan
                            @can('category.index')
                                <li><a href="{{ route('admin.category.index') }}">Category Management</a></li>
                            @endcan
                            @can('tag.index')
                                <li><a href="{{ route('admin.tag.index') }}">Tag Management</a></li>
                            @endcan
                            @can('page.index')
                                <li><a href="{{ route('admin.page.index') }}">Page Management</a></li>
                            @endcan
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title"
                            href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-widget') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-widget') }}"></use>
                            </svg><span class="lan-6">Widgets</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.general_widget') }}">General</a></li>
                            <li><a href="{{ route('admin.chart_widget') }}">Chart</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title"
                            href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-layout') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-layout') }}"></use>
                            </svg><span class="lan-7">Page layout</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.box_layout') }}">Boxed</a></li>
                            <li><a href="{{ route('admin.rtl_layout') }}">RTL</a></li>
                            <li><a href="{{ route('admin.dark_layout') }}">Dark Layout</a></li>
                            <li><a href="{{ route('admin.hide_on_scroll') }}">Hide Nav Scroll</a></li>
                            <li><a href="{{ route('admin.footer_light') }}">Footer Light</a></li>
                            <li><a href="{{ route('admin.footer_dark') }}">Footer Dark</a></li>
                            <li><a href="{{ route('admin.footer_fixed') }}">Footer Fixed</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="lan-8">Applications</h6>
                        </div>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"> </i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-project') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-project') }}"></use>
                            </svg><span>Projects </span></a>
                        <ul class="sidebar-submenu">
                            <li><label class="badge badge-light-success">New</label><a
                                    href="{{ route('admin.details_project') }}">Project Details</a></li>
                            <li><a href="{{ route('admin.list_project') }}">Project List</a></li>
                            <li><a href="{{ route('admin.create_project') }}">Create new</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title link-nav" href="{{ route('admin.file_manager') }}"><svg
                                class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-file') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-file') }}"></use>
                            </svg><span>File manager</span></a></li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"> </i><a
                            class="sidebar-link sidebar-title link-nav" href="{{ route('admin.kanban') }}"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-board') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-board') }}"></use>
                            </svg><span>kanban Board</span></a></li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-ecommerce') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-ecommerce') }}"></use>
                            </svg><span>Ecommerce</span></a>
                        <ul class="sidebar-submenu">
                            <li><a class="submenu-title" href="javascript:void(0)">Products<span class="sub-arrow"><i
                                            class="fa-solid fa-angle-right"></i></span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{ route('admin.add_products') }}">Add Product</a></li>
                                    <li><a href="{{ route('admin.products_grid') }}">Products Grid</a></li>
                                    <li><a href="{{ route('admin.list_products') }}">Products List</a></li>
                                    <li><a href="{{ route('admin.products_details') }}">Product Details</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('admin.category_page') }}">Category</a></li>
                            <li><label class="badge badge-light-success">New</label><a class="submenu-title"
                                    href="javascript:void(0)">Seller<span class="sub-arrow"><i
                                            class="fa-solid fa-angle-right"></i></span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{ route('admin.seller_list') }}">Seller List</a></li>
                                    <li><a href="{{ route('admin.seller_details') }}">Seller Details</a></li>
                                </ul>
                            </li>
                            <li><a class="submenu-title" href="javascript:void(0)">Orders<span class="sub-arrow"><i
                                            class="fa-solid fa-angle-right"></i></span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{ route('admin.order_history') }}">Order History</a></li>
                                    <li><label class="badge badge-light-success">New</label><a
                                            href="{{ route('admin.order_details') }}">Order Details</a></li>
                                </ul>
                            </li>
                            <li><a class="submenu-title" href="javascript:void(0)">Invoices<span class="sub-arrow"><i
                                            class="fa-solid fa-angle-right"></i></span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{ route('admin.invoice_1') }}">Invoice-1</a></li>
                                    <li><a href="{{ route('admin.invoice_2') }}">Invoice-2</a></li>
                                    <li><a href="{{ route('admin.invoice_3') }}">Invoice-3</a></li>
                                    <li><a href="{{ route('admin.invoice_4') }}">Invoice-4</a></li>
                                    <li><a href="{{ route('admin.invoice_5') }}">Invoice-5</a></li>
                                    <li><a href="{{ route('admin.invoice_6') }}">Invoice-6</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('admin.cart') }}">Cart</a></li>
                            <li><a href="{{ route('admin.wish_list') }}">Wishlist</a></li>
                            <li><a href="{{ route('admin.checkout') }}">Checkout</a></li>
                            <li><label class="badge badge-light-success">New</label><a
                                    href="{{ route('admin.manage_review') }}">Manage Review</a></li>
                            <li><label class="badge badge-light-success">New</label><a
                                    href="{{ route('admin.settings') }}">Settings</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title link-nav" href="{{ route('admin.mail_box') }}"><svg
                                class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-email') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-email') }}"></use>
                            </svg><span>Mail Box</span></a></li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-chat') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-chat') }}"></use>
                            </svg><span>Chat</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.chat_private') }}">Private Chat</a></li>
                            <li><a href="{{ route('admin.chat_group') }}">Group Chat</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-user') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-user') }}"></use>
                            </svg><span>Users</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.user_profile') }}">User Profile</a></li>
                            <li><a href="{{ route('admin.add_user') }}">Add User</a></li>
                            <li><label class="badge badge-light-success">New</label><a href="{{ route('admin.user_list') }}">User
                                    List</a></li>
                            <li><a href="{{ route('admin.user_cards') }}">User Cards</a></li>
                            <li><label class="badge badge-light-success">New</label><a
                                    href="{{ route('admin.role_permission') }}">Roles & Permission</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><label class="badge badge-light-success">New</label><i
                            class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title"
                            href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-reports') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-reports') }}"></use>
                            </svg><span>Reports</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.products_reports') }}">Products</a></li>
                            <li><a href="{{ route('admin.sales_reports') }}">Sales</a></li>
                            <li><a href="{{ route('admin.sales_return') }}">Sales Return</a></li>
                            <li><a href="{{ route('admin.customer_order') }}">Customer Order</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title link-nav" href="{{ route('admin.bookmark') }}"><svg
                                class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-bookmark') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-bookmark') }}"> </use>
                            </svg><span>Bookmarks</span></a></li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title link-nav" href="{{ route('admin.contacts') }}"><svg
                                class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-contact') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-contact') }}"> </use>
                            </svg><span>Contacts</span></a></li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title link-nav" href="{{ route('admin.task') }}"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-task') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-task') }}"> </use>
                            </svg><span>Tasks</span></a></li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title link-nav" href="{{ route('admin.calendar_basic') }}"><svg
                                class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-calendar') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-calender') }}"></use>
                            </svg><span>Calendar</span></a></li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title link-nav" href="{{ route('admin.social_app') }}"><svg
                                class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-social') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-social') }}"> </use>
                            </svg><span>Social App</span></a></li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title link-nav" href="{{ route('admin.to_do') }}"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-to-do') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-to-do') }}"> </use>
                            </svg><span>To-Do</span></a></li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title link-nav" href="{{ route('admin.search') }}"><svg
                                class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-search') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-search') }}"> </use>
                            </svg><span>Search Result</span></a></li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Forms & Table</h6>
                        </div>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-form') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-form') }}"> </use>
                            </svg><span>Forms</span></a>
                        <ul class="sidebar-submenu">
                            <li><a class="submenu-title" href="javascript:void(0)">Form Controls<span class="sub-arrow"><i
                                            class="fa-solid fa-angle-right"></i></span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{ route('admin.form_validation') }}">Form Validation</a></li>
                                    <li><a href="{{ route('admin.base_input') }}">Base Inputs</a></li>
                                    <li><a href="{{ route('admin.radio_checkbox_control') }}">Checkbox & Radio</a></li>
                                    <li><a href="{{ route('admin.input_group') }}">Input Groups</a></li>
                                    <li><a href="{{ route('admin.input_mask') }}">Input Mask</a></li>
                                    <li><a href="{{ route('admin.megaoptions') }}">Mega Options</a></li>
                                </ul>
                            </li>
                            <li><a class="submenu-title" href="javascript:void(0)">Form Widgets<span class="sub-arrow"><i
                                            class="fa-solid fa-angle-right"></i></span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{ route('admin.datepicker') }}">Datepicker</a></li>
                                    <li><a href="{{ route('admin.touchspin') }}">Touchspin</a></li>
                                    <li><a href="{{ route('admin.select2') }}">Select2</a></li>
                                    <li><a href="{{ route('admin.switch') }}">Switch</a></li>
                                    <li><a href="{{ route('admin.typeahead') }}">Typeahead</a></li>
                                    <li><a href="{{ route('admin.clipboard') }}">Clipboard</a></li>
                                </ul>
                            </li>
                            <li><a class="submenu-title" href="javascript:void(0)">Form layout<span class="sub-arrow"><i
                                            class="fa-solid fa-angle-right"></i></span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{ route('admin.form_wizard') }}">Form Wizard 1</a></li>
                                    <li><a href="{{ route('admin.form_wizard_two') }}">Form Wizard 2</a></li>
                                    <li><a href="{{ route('admin.two_factor') }}">Two Factor</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-table') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-table') }}"></use>
                            </svg><span>Tables</span></a>
                        <ul class="sidebar-submenu">
                            <li><a class="submenu-title" href="javascript:void(0)">Bootstrap Tables<span class="sub-arrow"><i
                                            class="fa-solid fa-angle-right"></i></span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{ route('admin.bootstrap_basic_table') }}">Basic Tables</a></li>
                                    <li><a href="{{ route('admin.table_components') }}">Table components</a></li>
                                </ul>
                            </li>
                            <li><a class="submenu-title" href="javascript:void(0)">Data Tables<span class="sub-arrow"><i
                                            class="fa-solid fa-angle-right"></i></span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{ route('admin.datatable_basic_init') }}">Basic Init</a></li>
                                    <li> <a href="{{ route('admin.datatable_advance_init') }}">Advance Init </a></li>
                                    <li><a href="{{ route('admin.datatable_api') }}">API</a></li>
                                    <li><a href="{{ route('admin.datatable_data_source') }}">Data Sources</a></li>
                                    <li><a href="{{ route('admin.datatable_ext_autofill') }}">Extensions</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('admin.jsgrid_table') }}">Js Grid Table </a></li>
                        </ul>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Components</h6>
                        </div>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-ui-kits') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-ui-kits') }}"></use>
                            </svg><span>Ui Kits</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.typography') }}">Typography</a></li>
                            <li><a href="{{ route('admin.avatars') }}">Avatars</a></li>
                            <li><label class="badge badge-light-success">New</label><a href="{{ route('admin.divider') }}">Divider</a>
                            </li>
                            <li><a href="{{ route('admin.helper_classes') }}">helper classes</a></li>
                            <li><a href="{{ route('admin.grid') }}">Grid</a></li>
                            <li><a href="{{ route('admin.tag_pills') }}">Tags & pills</a></li>
                            <li><a href="{{ route('admin.progress_bar') }}">Progress</a></li>
                            <li><a href="{{ route('admin.modal') }}">Modal</a></li>
                            <li><a href="{{ route('admin.alert') }}">Alert</a></li>
                            <li><a href="{{ route('admin.popover') }}">Popover</a></li>
                            <li><label class="badge badge-light-success">New</label><a
                                    href="{{ route('admin.placeholders') }}">Placeholders</a></li>
                            <li><a href="{{ route('admin.tooltip') }}">Tooltip</a></li>
                            <li><a href="{{ route('admin.dropdown') }}">Dropdown</a></li>
                            <li><a href="{{ route('admin.according') }}">Accordion</a></li>
                            <li><a href="{{ route('admin.tabs') }}">Tabs</a></li>
                            <li><label class="badge badge-light-success">New</label><a
                                    href="{{ route('admin.offcanvas') }}">Offcanvas</a></li>
                            <li><label class="badge badge-light-success">New</label><a
                                    href="{{ route('admin.navigate_links') }}">Navigate Links</a></li>
                            <li><a href="{{ route('admin.list') }}">Lists</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-bonus-kit') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-bonus-kit') }}"></use>
                            </svg><span>Bonus Ui</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.scrollable') }}">Scrollable</a></li>
                            <li><label class="badge badge-light-success">New</label><a href="{{ route('admin.tree') }}">Tree
                                    view</a></li>
                            <li><a href="{{ route('admin.toasts') }}">Toasts</a></li>
                            <li><label class="badge badge-light-success">New</label><a
                                    href="{{ route('admin.block_ui') }}">BlockUI</a></li>
                            <li><a href="{{ route('admin.rating') }}">Rating</a></li>
                            <li><a href="{{ route('admin.dropzone') }}">dropzone</a></li>
                            <li><a href="{{ route('admin.tour') }}">Tour</a></li>
                            <li><a href="{{ route('admin.sweet_alert2') }}">Sweet Alert2</a></li>
                            <li><a href="{{ route('admin.modal_animated') }}">Animated Modal</a></li>
                            <li><a href="{{ route('admin.owl_carousel') }}">Owl Carousel</a></li>
                            <li><a href="{{ route('admin.ribbons') }}">Ribbons</a></li>
                            <li><a href="{{ route('admin.pagination') }}">Pagination</a></li>
                            <li><label class="badge badge-light-success">New</label><a
                                    href="{{ route('admin.scroll_spy') }}">ScrollSpy</a></li>
                            <li><a href="{{ route('admin.breadcrumb') }}">Breadcrumb</a></li>
                            <li><a href="{{ route('admin.range_slider') }}">Range Slider</a></li>
                            <li><label class="badge badge-light-success">New</label><a href="{{ route('admin.ratios') }}">Ratios</a>
                            </li>
                            <li><a href="{{ route('admin.image_cropper') }}">Image cropper</a></li>
                            <li><a href="{{ route('admin.basic_card') }}">Basic Card</a></li>
                            <li><a href="{{ route('admin.creative_card') }}">Creative Card</a></li>
                            <li><a href="{{ route('admin.draggable_card') }}">Draggable Card</a></li>
                            <li><a href="{{ route('admin.timeline') }}">Timeline </a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-animation') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-animation') }}"></use>
                            </svg><span>Animations</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.animate') }}">Animate</a></li>
                            <li><a href="{{ route('admin.scroll_reveal') }}">Scroll Reveal</a></li>
                            <li><a href="{{ route('admin.aos') }}">AOS animation</a></li>
                            <li><a href="{{ route('admin.tilt') }}">Tilt Animation</a></li>
                            <li><a href="{{ route('admin.wow') }}">Wow Animation</a></li>
                            <li><label class="badge badge-light-success">New</label><a href="{{ route('admin.flash_icon') }}">Flash
                                    Icons</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-icons') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-icons') }}"></use>
                            </svg><span>Icons</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.flag_icon') }}">Flag icon</a></li>
                            <li><a href="{{ route('admin.font_awesome') }}">Fontawesome Icon</a></li>
                            <li><a href="{{ route('admin.ico_icon') }}">Ico Icon</a></li>
                            <li><a href="{{ route('admin.themify_icon') }}">Themify Icon</a></li>
                            <li><a href="{{ route('admin.feather_icon') }}">Feather icon</a></li>
                            <li><a href="{{ route('admin.whether_icon') }}">Weather Icon</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title link-nav" href="{{ route('admin.buttons') }}"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-button') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-button') }}"></use>
                            </svg><span>Button</span></a></li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-charts') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-charts') }}"></use>
                            </svg><span>Charts</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.chart_apex') }}">Apex Chart</a></li>
                            <li><a href="{{ route('admin.chart_google') }}">Google Chart</a></li>
                            <li><a href="{{ route('admin.chart_sparkline') }}">Sparkline chart</a></li>
                            <li><a href="{{ route('admin.chart_flot') }}">Flot Chart</a></li>
                            <li><a href="{{ route('admin.chart_knob') }}">Knob Chart</a></li>
                            <li><a href="{{ route('admin.chart_morris') }}">Morris Chart</a></li>
                            <li><a href="{{ route('admin.chartjs') }}">Chatjs Chart</a></li>
                            <li><a href="{{ route('admin.chartist') }}">Chartist Chart</a></li>
                            <li><a href="{{ route('admin.chart_peity') }}">Peity Chart</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Pages</h6>
                        </div>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title link-nav" href="{{ route('admin.sample_page') }}"><svg
                                class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-sample-page') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-sample-page') }}"></use>
                            </svg><span>Sample page</span></a></li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title link-nav" href="{{ route('admin.internationalization') }}"><svg
                                class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-internationalization') }}">
                                </use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-internationalization') }}"></use>
                            </svg><span>Internationalization</span></a></li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-error') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-error') }}"></use>
                            </svg><span>Error Pages</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.error_403') }}">Error 403</a></li>
                            <li><a href="{{ route('admin.error_404') }}">Error 404</a></li>
                            <li><a href="{{ route('admin.error_500') }}">Error 500</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-authenticate') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-authenticate') }}"></use>
                            </svg><span>Authentication</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('login') }}" target="_blank">Login Simple</a></li>
                            <li><a href="{{ route('admin.login_one') }}" target="_blank">Login with bg image</a></li>
                            <li><a href="{{ route('admin.login_two') }}" target="_blank">Login with image two </a></li>
                            <li><a href="{{ route('admin.login_three') }}" target="_blank">Login With Image Three</a></li>
                            <li><a href="{{ route('admin.login_with_tooltip') }}" target="_blank">Login with tooltip</a>
                            </li>
                            <li><a href="{{ route('admin.login_with_sweetalert') }}" target="_blank">Login with
                                    sweetalert</a></li>
                            <li><a href="{{ route('admin.sign_up') }}" target="_blank">Register Simple</a></li>
                            <li><a href="{{ route('admin.sign_up_with_bg_image') }}" target="_blank">Register with Bg Image
                                </a></li>
                            <li><a href="{{ route('admin.sign_up_with_image_two') }}" target="_blank">Register with image
                                    two</a></li>
                            <li><a href="{{ route('admin.sign_up_wizard') }}" target="_blank">Register wizard</a></li>
                            <li><a href="{{ route('admin.account_restricted') }}" target="_blank">Account Restricted</a>
                            </li>
                            <li><a href="{{ route('admin.unlock') }}">Unlock User</a></li>
                            <li><a href="{{ route('admin.forget_password') }}">Forgot Password</a></li>
                            <li><a href="{{ route('admin.reset_password') }}">Reset Password</a></li>
                            <li><a href="{{ route('admin.maintenance') }}">Maintenance</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-coming-soon') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-coming-soon') }}"></use>
                            </svg><span>Coming Soon</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.comingsoon') }}">Coming Simple</a></li>
                            <li><a href="{{ route('admin.comingsoon_bg_video') }}">Coming with Bg video</a></li>
                            <li><a href="{{ route('admin.comingsoon_bg_img') }}">Coming with Bg Image</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-email-temp') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-email-temp') }}"></use>
                            </svg><span>Email templates</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.basic_template') }}">Basic Email</a></li>
                            <li><a href="{{ route('admin.email_header') }}">Basic With Header</a></li>
                            <li><a href="{{ route('admin.template_email') }}">Ecomerce Template</a></li>
                            <li><a href="{{ route('admin.template_email_2') }}">Email Template 2</a></li>
                            <li><a href="{{ route('admin.ecommerce_templates') }}">Ecommerce Email</a></li>
                            <li><a href="{{ route('admin.email_order_success') }}">Order Success</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><label class="badge badge-light-success">New</label><i
                            class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title link-nav"
                            href="{{ route('admin.manage_api') }}"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-api') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-api') }}"></use>
                            </svg><span>Manage API</span></a></li>
                    <li class="sidebar-list"><label class="badge badge-light-success">New</label><i
                            class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title link-nav"
                            href="{{ route('admin.site_map') }}"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-sitemap') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-sitemap') }}"></use>
                            </svg><span>Site Map</span></a></li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title link-nav" href="{{ route('admin.pricing') }}"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-price') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-price') }}"></use>
                            </svg><span>Pricing </span></a></li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title link-nav" href="{{ route('admin.faq') }}"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-faq') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-faq') }}"></use>
                            </svg><span>FAQ</span></a></li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title link-nav" href="{{ route('admin.subscribed_user') }}"><svg
                                class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-subscribe') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-subscribe') }}"></use>
                            </svg><span>Subscribed User</span></a></li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Miscellaneous</h6>
                        </div>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-gallery') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-gallery') }}"></use>
                            </svg><span>Gallery</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.gallery') }}">Gallery Grid</a></li>
                            <li><a href="{{ route('admin.gallery_with_description') }}">Gallery Grid Desc</a></li>
                            <li><a href="{{ route('admin.gallery_masonry') }}">Masonry Gallery</a></li>
                            <li><a href="{{ route('admin.masonry_gallery_with_disc') }}">Masonry with Desc</a></li>
                            <li><a href="{{ route('admin.gallery_hover') }}">Hover Effects</a></li>
                            <li>
                            <label class="badge badge-light-success">New</label><a href="{{ route('admin.gallery_placeholder') }}">Gallery Placeholder</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-blog') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-blog') }}"></use>
                            </svg><span>Blog</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.blogs') }}">Blog</a></li>
                            <li><a href="{{ route('admin.blog_details') }}">Blog Details</a></li>
                            <li><a href="{{ route('admin.add_blog') }}">Add Blog</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-job-search') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-job-search') }}"></use>
                            </svg><span>Jobs</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.job_cards_view') }}">Cards view</a></li>
                            <li><a href="{{ route('admin.job_list_view') }}">List View</a></li>
                            <li><a href="{{ route('admin.job_details') }}">Job Details</a></li>
                            <li><a href="{{ route('admin.job_candidates') }}">Candidates</a></li>
                            <li><a href="{{ route('admin.job_companies') }}">Companies</a></li>
                            <li><a href="{{ route('admin.job_apply') }}">Apply</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-learning') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-learning') }}"></use>
                            </svg><span>Courses</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.course_list') }}">Course List</a></li>
                            <li><a href="{{ route('admin.course_details') }}">Course Details</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-maps') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-maps') }}"></use>
                            </svg><span>Maps</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.map_js') }}">Maps JS</a></li>
                            <li><a href="{{ route('admin.vector_map') }}">Vector Maps</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-editors') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-editors') }}"></use>
                            </svg><span>Editors</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.quill_editor') }}">Quill Editor</a></li>
                            <li><a href="{{ route('admin.ckeditor') }}">CK Editor</a></li>
                            <li><a href="{{ route('admin.ace_code_editor') }}">ACE Code Editor </a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title link-nav" href="{{ route('admin.knowledgebase') }}"><svg
                                class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-knowledgebase') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-knowledgebase') }}"></use>
                            </svg><span>Knowledgebase</span></a></li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title link-nav" href="{{ route('admin.support_ticket') }}"><svg
                                class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-support-tickets') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-support-tickets') }}"></use>
                            </svg><span>Support Ticket</span></a></li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
<!-- Page Sidebar Ends-->
