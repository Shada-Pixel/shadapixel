<div class="app-menu">

    <!-- Sidenav Brand Logo -->
    <a href="index.html" class="logo-box">
        <!-- Light Brand Logo -->
        <div class="logo-light">
            <img src="{{asset('admindash/asset/images/logo-light.png')}}" class="logo-lg" alt="Light logo">
            <img src="{{asset('admindash/asset/images/logo-sm.png')}}" class="logo-sm" alt="Small logo">
        </div>

        <!-- Dark Brand Logo -->
        <div class="logo-dark">
            <img src="{{asset('admindash/asset/images/logo-dark.png')}}" class="logo-lg" alt="Dark logo">
            <img src="{{asset('admindash/asset/images/logo-sm.png')}}" class="logo-sm" alt="Small logo">
        </div>
    </a>



    <!--- Menu -->
    <div data-simplebar="">
        <!-- User Box -->
        <div class="user-box relative text-center mt-5">
            <img src="{{asset('admindash/asset/images/users/user-1.jpg')}}" alt="user-image" class="rounded-full h-14 w-14 p-1 border border-gray-300/30 mx-auto mb-3">
            <div>
                <button data-fc-type="dropdown" data-fc-placement="bottom" type="button" class="user-name text-[15px] font-medium mb-1.5">Nowak Helme</button>
                <div class="fc-dropdown fc-dropdown-open:opacity-100 hidden opacity-0 w-40 z-50 transition-all duration-300 bg-white shadow-lg border rounded-lg p-2 border-gray-200 dark:border-gray-700 dark:bg-gray-800">

                    <!-- item-->
                    <a class="flex items-center py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-primary dark:text-gray-400 hover:text-white dark:hover:text-white" href="#">
                        <i data-lucide="user" class="w-4 h-4 me-2"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a class="flex items-center py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-primary dark:text-gray-400 hover:text-white dark:hover:text-white" href="#">
                        <i data-lucide="settings" class="w-4 h-4 me-2"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a class="flex items-center py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-primary dark:text-gray-400 hover:text-white dark:hover:text-white" href="#">
                        <i data-lucide="lock" class="w-4 h-4 me-2"></i>
                        <span>Lock Screen</span>
                    </a>

                    <!-- item-->
                    <a class="flex items-center py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-primary dark:text-gray-400 hover:text-white dark:hover:text-white" href="#">
                        <i data-lucide="log-out" class="w-4 h-4 me-2"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </div>

            <p class="user-name text-sm mb-3">Admin Head</p>

            <div class="flex justify-center gap-2 mb-4">
                <a href="#" class="user-name">
                    <i class="mdi mdi-cog text-base"></i>
                </a>

                <a href="#" class="user-name">
                    <i class="mdi mdi-power text-base"></i>
                </a>
            </div>
        </div>

        <ul class="menu" data-fc-type="accordion">
            <li class="menu-title">Navigation</li>

            <li class="menu-item">
                <a href="{{route('dashboard')}}" class="menu-link">
                    <span class="menu-icon"><i class="mdi mdi-view-dashboard-outline"></i></span>
                    <span class="menu-text"> Dashboard </span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{route('home')}}" class="menu-link">
                    <span class="menu-icon"><i class="mdi mdi-eye"></i></span>
                    <span class="menu-text"> Site </span>
                </a>
            </li>

            <li class="menu-title">Apps</li>


            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"><i class="mdi mdi-format-list-bulleted"></i></span>
                    <span class="menu-text"> Categories </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{route('categories.index')}}" class="menu-link">
                            <span class="menu-text">All</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{route('categories.create')}}" class="menu-link">
                            <span class="menu-text">Add New</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"><i class="mdi mdi-email-outline"></i></span>
                    <span class="menu-text"> Contact Query </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{route('queries.index')}}" class="menu-link">
                            <span class="menu-text">Inbox</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="email-templates.html" class="menu-link">
                            <span class="menu-text">Email Templates</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="apps-calendar.html" class="menu-link">
                    <span class="menu-icon"><i class="mdi mdi-calendar-blank-outline"></i></span>
                    <span class="menu-text"> Calendar </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="apps-chat.html" class="menu-link">
                    <span class="menu-icon"><i class="mdi mdi-forum-outline"></i></span>
                    <span class="menu-text"> Chat </span>
                </a>
            </li>



            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"><i class="mdi mdi-clipboard-outline"></i></span>
                    <span class="menu-text"> Tasks </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="task-kanban-board.html" class="menu-link">
                            <span class="menu-text">Kanban Board</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="task-details.html" class="menu-link">
                            <span class="menu-text">Details</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="apps-projects.html" class="menu-link">
                    <span class="menu-icon"><i class="mdi mdi-briefcase-variant-outline"></i></span>
                    <span class="menu-text"> Projects </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"><i class="mdi mdi-book-open-page-variant-outline"></i></span>
                    <span class="menu-text"> Contacts </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="contacts-list.html" class="menu-link">
                            <span class="menu-text">Members List</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="contacts-profile.html" class="menu-link">
                            <span class="menu-text">Profile</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-title">Custom</li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"><i class="mdi mdi-account-multiple-plus-outline"></i></span>
                    <span class="menu-text"> Auth Pages </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="auth-login.html" class="menu-link">
                            <span class="menu-text">Log In</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="auth-register.html" class="menu-link">
                            <span class="menu-text">Register</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="auth-recoverpw.html" class="menu-link">
                            <span class="menu-text">Recover Password</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="auth-lock-screen.html" class="menu-link">
                            <span class="menu-text">Lock Screen</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="auth-confirm-mail.html" class="menu-link">
                            <span class="menu-text">Confirm Mail</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="auth-logout.html" class="menu-link">
                            <span class="menu-text">Logout</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"><i class="mdi mdi-file-multiple-outline"></i></span>
                    <span class="menu-text"> Extra Pages </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="pages-starter.html" class="menu-link">
                            <span class="menu-text">Starter</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-pricing.html" class="menu-link">
                            <span class="menu-text">Pricing</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-timeline.html" class="menu-link">
                            <span class="menu-text">Timeline</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-invoice.html" class="menu-link">
                            <span class="menu-text">Invoice</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-faqs.html" class="menu-link">
                            <span class="menu-text">FAQs</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-gallery.html" class="menu-link">
                            <span class="menu-text">Gallery</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-404.html" class="menu-link">
                            <span class="menu-text">Error 404</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-500.html" class="menu-link">
                            <span class="menu-text">Error 500</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-maintenance.html" class="menu-link">
                            <span class="menu-text">Maintenance</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-coming-soon.html" class="menu-link">
                            <span class="menu-text">Coming Soon</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="layouts-horizontal.html" class="menu-link" target="_blank">
                    <span class="menu-icon"><i class="mdi mdi-dock-window"></i></span>
                    <span class="menu-text"> Horizontal </span>
                </a>
            </li>

            <li class="menu-title">Components</li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"><i class="mdi mdi-briefcase-outline"></i></span>
                    <span class="menu-text"> Base UI </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="ui-buttons.html" class="menu-link">
                            <span class="menu-text">Buttons</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-badges.html" class="menu-link">
                            <span class="menu-text">Badges</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-cards.html" class="menu-link">
                            <span class="menu-text">Cards</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-avatars.html" class="menu-link">
                            <span class="menu-text">Avatars</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-tabs-accordions.html" class="menu-link">
                            <span class="menu-text">Tabs & Accordions</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-modals.html" class="menu-link">
                            <span class="menu-text">Modals</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-progress.html" class="menu-link">
                            <span class="menu-text">Progress</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-notifications.html" class="menu-link">
                            <span class="menu-text">Notifications</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-offcanvas.html" class="menu-link">
                            <span class="menu-text">Offcanvas</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-placeholders.html" class="menu-link">
                            <span class="menu-text">Placeholders</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-spinners.html" class="menu-link">
                            <span class="menu-text">Spinners</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui.images.html" class="menu-link">
                            <span class="menu-text">Images</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-swiper.html" class="menu-link">
                            <span class="menu-text">Swiper</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-list-group.html" class="menu-link">
                            <span class="menu-text">List Group</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-ratio.html" class="menu-link">
                            <span class="menu-text">Embed Video</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-dropdowns.html" class="menu-link">
                            <span class="menu-text">Dropdowns</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-tooltips-popovers.html" class="menu-link">
                            <span class="menu-text">Tooltips & Popovers</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-typography.html" class="menu-link">
                            <span class="menu-text">Typography</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="widgets.html" class="menu-link">
                    <span class="menu-icon"><i class="mdi mdi-gift-outline"></i></span>
                    <span class="menu-text"> Widgets </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"><i class="mdi mdi-layers-outline"></i></span>
                    <span class="menu-text"> Extended UI </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="extended-range-slider.html" class="menu-link">
                            <span class="menu-text">Range Slider</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="extended-sweet-alert.html" class="menu-link">
                            <span class="menu-text">Sweet Alert</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="extended-draggable-cards.html" class="menu-link">
                            <span class="menu-text">Draggable Cards</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="extended-tour.html" class="menu-link">
                            <span class="menu-text">Tour Page</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="extended-treeview.html" class="menu-link">
                            <span class="menu-text">Tree View</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"><i class="mdi mdi-shield-outline"></i></span>
                    <span class="menu-text"> Icons </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="icons-material-design.html" class="menu-link">
                            <span class="menu-text">Material Design</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="icons-material-symbols.html" class="menu-link">
                            <span class="menu-text">Material Symbols</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="icons-lucide.html" class="menu-link">
                            <span class="menu-text">Lucide Icons</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="icons-font-awesome.html" class="menu-link">
                            <span class="menu-text">Font Awesome 5</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"><i class="mdi mdi-texture"></i></span>
                    <span class="menu-text"> Forms </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="forms-elements.html" class="menu-link">
                            <span class="menu-text">General Elements</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="forms-advanced.html" class="menu-link">
                            <span class="menu-text">Advanced</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="forms-validation.html" class="menu-link">
                            <span class="menu-text">Validation</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="forms-wizard.html" class="menu-link">
                            <span class="menu-text">Wizard</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="forms-quilljs-editor.html" class="menu-link">
                            <span class="menu-text">Quilljs Editor</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="forms-picker.html" class="menu-link">
                            <span class="menu-text">Picker</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="forms-file-uploads.html" class="menu-link">
                            <span class="menu-text">File Uploads</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"> <i class="mdi mdi-table"></i></span>
                    <span class="menu-text"> Tables </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="tables-basic.html" class="menu-link">
                            <span class="menu-text">Basic Tables</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="tables-datatables.html" class="menu-link">
                            <span class="menu-text">Data Tables</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="tables-editable.html" class="menu-link">
                            <span class="menu-text">Editable Tables</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="tables-tablesaw.html" class="menu-link">
                            <span class="menu-text">Tablesaw Tables</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"> <i class="mdi mdi-equalizer"></i></span>
                    <span class="menu-text"> Apex Charts </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="charts-apex-area.html" class="menu-link">
                            <span class="menu-text">Area</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="charts-apex-bar.html" class="menu-link">
                            <span class="menu-text">Bar</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="charts-apex-bubble.html" class="menu-link">
                            <span class="menu-text">Bubble</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="charts-apex-candlestick.html" class="menu-link">
                            <span class="menu-text">Candlestick</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="charts-apex-column.html" class="menu-link">
                            <span class="menu-text">Column</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="charts-apex-heatmap.html" class="menu-link">
                            <span class="menu-text">Heatmap</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="charts-apex-line.html" class="menu-link">
                            <span class="menu-text">Line</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="charts-apex-mixed.html" class="menu-link">
                            <span class="menu-text">Mixed</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="charts-apex-timeline.html" class="menu-link">
                            <span class="menu-text">Timeline</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="charts-apex-boxplot.html" class="menu-link">
                            <span class="menu-text">Boxplot</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="charts-apex-treemap.html" class="menu-link">
                            <span class="menu-text">Treemap</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="charts-apex-pie.html" class="menu-link">
                            <span class="menu-text">Pie</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="charts-apex-radar.html" class="menu-link">
                            <span class="menu-text">Radar</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="charts-apex-radialbar.html" class="menu-link">
                            <span class="menu-text">Radialbar</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="charts-apex-scatter.html" class="menu-link">
                            <span class="menu-text">Scatter</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="charts-apex-polar-area.html" class="menu-link">
                            <span class="menu-text">Polar Area</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="charts-apex-sparklines.html" class="menu-link">
                            <span class="menu-text">Sparklines</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"> <i class="mdi mdi-chart-donut-variant"></i></span>
                    <span class="menu-text"> Chartsjs </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="charts-chartjs-area.html" class="menu-link">
                            <span class="menu-text">Area</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="charts-chartjs-bar.html" class="menu-link">
                            <span class="menu-text">Bar</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="charts-chartjs-line.html" class="menu-link">
                            <span class="menu-text">Line</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="charts-chartjs-other.html" class="menu-link">
                            <span class="menu-text">Other</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"><i class="mdi mdi-map"></i></span>
                    <span class="menu-text"> Maps </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="maps-google.html" class="menu-link">
                            <span class="menu-text">Google Maps</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="maps-vector.html" class="menu-link">
                            <span class="menu-text">Vector Maps</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
