<?php

use App\User;

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#61-title
    |
    */

    'title' => 'Clean As New®',
    'title_prefix' => '',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#62-logo
    |
    */

    'logo' => '',
    'logo_img' => 'assets/img/Clean-As-New-logo.png',
    'logo_img_class' => 'brand-image-xl',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'Clean As New®',

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#63-layout
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => true,
    'layout_fixed_navbar' => true,
    'layout_fixed_footer' => null,

    /*
    |--------------------------------------------------------------------------
    | Extra Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#64-classes
    |
    */

    'classes_auth_card' => 'bg-gradient-dark',
    'classes_auth_header' => '',
    'classes_auth_body' => 'bg-gradient-dark',
    'classes_auth_footer' => 'text-center',
    'classes_auth_icon' => 'text-light',
    'classes_auth_btn' => 'btn-flat btn-light',

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_header' => 'container-fluid',
    'classes_content' => 'container-fluid',
    'classes_sidebar' => 'sidebar-light-primary elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-primary navbar-light',
    'classes_topnav_nav' => 'navbar-expand-md',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#65-sidebar
    |
    */

    'sidebar_mini' => true,
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#66-control-sidebar-right-sidebar
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#67-urls
    |
    */

    'use_route_url' => false,

    'dashboard_url' => 'admin/home',

    'logout_url' => 'logout',

    'login_url' => 'login',

    'register_url' => 'register',

    'password_reset_url' => 'password/reset',

    'password_email_url' => 'password/email',

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#68-laravel-mix
    |
    */

    'enabled_laravel_mix' => false,

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#69-menu
    |
    */

    'menu' => [

        ['header' => ''],
        [
            'text' => 'My Profile',
            'route'  => 'myprofile',
            'icon' => 'fas fa-fw fa-user-cog',
        ],
        ['header' => 'Dashboard'],
        [
            'text' => 'Dashboard',
            'route'  => 'home',
            'icon' => 'fas fa-fw fa-tachometer-alt',
        ],

        ['header' => 'Content Management'],
        [
            'text' => 'Home',
            'route'  => 'posts.index',
            'icon' => 'fas fa-fw fa-mail-bulk',
            'active' => ['admin/posts', 'admin/posts/*'],
        ],
        [
            'text' => 'How We Compare',
            'route'  => 'comparisons.index',
            'icon' => 'fas fa-fw fa-greater-than-equal',
            'active' => ['admin/comparisons', 'admin/comparisons/*'],
        ],
        [
            'text' => 'What We Clean',
            'route'  => 'cleans.index',
            'icon' => 'fas fa-fw fa-snowplow',
            'active' => ['admin/cleans', 'admin/cleans/*'],
        ],
        [
            'text' => 'Our Services',
            'route'  => 'services.index',
            'icon' => 'fas fa-fw fa-taxi',
            'active' => ['admin/services', 'admin/services/*'],
        ],
        [
            'text' => 'How We Do It',
            'route'  => 'todos.index',
            'icon' => 'fas fa-fw fa-th-list',
            'active' => ['admin/todos', 'admin/todos/*'],
        ],
        [
            'text' => 'Our Value To You',
            'route'  => 'values.index',
            'icon' => 'fas fa-fw fa-praying-hands',
            'active' => ['admin/values', 'admin/values/*'],
        ],
        [
            'text' => 'FAQ',
            'route'  => 'faqs.index',
            'icon' => 'fas fa-fw fa-question-circle',
            'active' => ['admin/faqs', 'admin/faqs/*'],
        ],
        [
            'text' => 'Testimonials',
            'route'  => 'testimonials.index',
            'icon' => 'fas fa-fw fa-quote-right',
            'active' => ['admin/testimonials', 'admin/testimonials/*'],
        ],
        [
            'text' => 'Case Studies',
            'route'  => 'casestudies.index',
            'icon' => 'fas fa-fw fa-university',
            'active' => ['admin/casestudies', 'admin/casestudies/*'],
        ],
        [
            'text' => 'Feedbacks',
            'route'  => 'feedbacks.index',
            'icon' => 'fas fa-fw fa-comment-dots',
            'active' => ['admin/feedbacks', 'admin/feedbacks/*'],
        ],
        [
            'text' => 'Journal Publications',
            'route'  => 'publications.index',
            'icon' => 'fas fa-fw fa-dolly',
            'active' => ['admin/publications', 'admin/publications/*'],
        ],
        [
            'text' => 'ESG',
            'route'  => 'esgs.index',
            'icon' => 'fas fa-fw fa-users',
            'active' => ['admin/esgs', 'admin/esgs/*'],
        ],
        [
            'text' => 'About US',
            'route'  => 'aboutus.index',
            'icon' => 'fas fa-fw fa-info-circle',
            'active' => ['admin/aboutus', 'admin/aboutus/*'],
        ],
        [
            'text' => 'Company Information',
            'route'  => 'aboutcompany.index',
            'icon' => 'fas fa-fw fa-building',
            'active' => ['admin/aboutcompany', 'admin/aboutcompany/*'],
        ],
        [
            'text' => 'Advisory Board',
            'route'  => 'advisory_boards.index',
            'icon' => 'fas fa-fw fa-comment-medical',
            'active' => ['admin/advisory_boards', 'admin/advisory_boards/*'],
        ],
        [
            'text' => 'News & Events',
            'route'  => 'news_events.index',
            'icon' => 'fas fa-fw fa-calendar-plus',
            'active' => ['admin/news_events', 'admin/news_events/*'],
        ],
        [
            'text' => 'Contacts',
            'route'  => 'contacts.index',
            'icon' => 'fas fa-fw fa-user-secret',
            'active' => ['admin/contacts', 'admin/contacts/*'],
        ],
        [
            'text' => 'General Settings',
            'route'  => 'settings.index',
            'icon' => 'fas fa-fw fa-cogs',
            'active' => ['admin/settings', 'admin/settings/*'],
        ],
        [
            'text' => 'Meta Data Management',
            'route'  => 'metadata.index',
            'icon' => 'fas fa-fw fa-medal',
            'active' => ['admin/metadata', 'admin/metadata/*'],
        ],
        
        [
            'header' => 'User',
            'notrole' => User::ROLE_REGULAR,
        ],
        [
            'text' => 'Add User',
            'route'  => 'users.create',
            'icon' => 'fas fa-fw fa-user',
            'notrole' => User::ROLE_REGULAR,
        ],
        [
            'text' => 'User List',
            'route'  => 'users.index',
            'icon' => 'fas fa-fw fa-users',
            'notrole' => User::ROLE_REGULAR,
        ],
        ['header' => ''],

    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#610-menu-filters
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        // JeroenNoten\LaravelAdminLte\Menu\Filters\SubmenuFilter::class,        
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        // App\Http\Controllers\XtreamClassesFilter::class,
        App\Http\Controllers\XtreamMenuFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#611-plugins
    |
    */

    'plugins' => [
        [
            'name' => 'Datatables',
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        [
            'name' => 'Select2',
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        [
            'name' => 'Chartjs',
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        [
            'name' => 'Sweetalert2',
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        [
            'name' => 'Pace',
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
        [
            'name' => 'Pace',
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js',
                ],
            ],
        ],
        [
            'name' => 'Mine',
            'active' => true,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '/css/global.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '/js/global.js',
                ],
            ],
        ],
    ],
];
