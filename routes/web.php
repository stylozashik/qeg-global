<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('index');
})->name('/');
/* Route::get('/register', function(){
    return redirect()->route('register');
}); */

Route::view('register', 'frontend.registration.index')->name('register');

Route::prefix('register')->group(function () {
    Route::view('student', 'frontend.registration.student')->name('student');
    Route::view('school', 'frontend.registration.school')->name('school');
    Route::view('reqruitment-partner', 'frontend.registration.rp')->name('reqruitment-partner');
});
//Language Change
Route::get('lang/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'de', 'es','fr','pt', 'cn', 'ae'])) {
        abort(400);
    }   
    Session()->put('locale', $locale);
    Session::get('locale');
    return redirect()->back();
})->name('lang');


Route::prefix('profile')->group(function () {
    Route::view('index', 'backend.default.dashboard.profile.index')->name('profile');
    
});
Route::prefix('dashboard')->group(function () {
    Route::view('quick_search', 'backend.default.dashboard.quick_search')->name('quick_search');
    Route::view('index', 'backend.default.dashboard.index')->name('index');
    Route::view('students', 'backend.default.dashboard.students')->name('students');
    Route::view('applications', 'backend.default.dashboard.applications')->name('applications');
    Route::view('payment', 'backend.default.dashboard.payment')->name('payment');
    Route::view('growth-hub', 'backend.default.dashboard.growth_hub')->name('growth-hub');
});

Route::prefix('widgets')->group(function () {
    Route::view('general-widget', 'widgets.general-widget')->name('general-widget');
    Route::view('chart-widget', 'widgets.chart-widget')->name('chart-widget');
});

Route::prefix('page-layouts')->group(function () {
    Route::view('box-layout', 'page-layout.box-layout')->name('box-layout');    
    Route::view('layout-rtl', 'page-layout.layout-rtl')->name('layout-rtl');    
    Route::view('layout-dark', 'page-layout.layout-dark')->name('layout-dark');    
    Route::view('hide-on-scroll', 'page-layout.hide-on-scroll')->name('hide-on-scroll');    
    Route::view('footer-light', 'page-layout.footer-light')->name('footer-light');    
    Route::view('footer-dark', 'page-layout.footer-dark')->name('footer-dark');    
    Route::view('footer-fixed', 'page-layout.footer-fixed')->name('footer-fixed');    
}); 

Route::prefix('project')->group(function () {
    Route::view('projects', 'project.projects')->name('projects');
    Route::view('projectcreate', 'project.projectcreate')->name('projectcreate');
});

Route::view('file-manager', 'file-manager')->name('file-manager');
Route::view('kanban', 'kanban')->name('kanban');

Route::prefix('ecommerce')->group(function () {
    Route::view('product', 'backend.default.apps.product')->name('product');
    Route::view('product-page', 'backend.default.apps.product-page')->name('product-page');
    Route::view('list-products', 'backend.default.apps.list-products')->name('list-products');
    Route::view('payment-details', 'backend.default.apps.payment-details')->name('payment-details');
    Route::view('order-history', 'backend.default.apps.order-history')->name('order-history');
    Route::view('invoice-template', 'backend.default.apps.invoice-template')->name('invoice-template');
    Route::view('cart', 'backend.default.apps.cart')->name('cart');
    Route::view('list-wish', 'backend.default.apps.list-wish')->name('list-wish');
    Route::view('checkout', 'backend.default.apps.checkout')->name('checkout');
    Route::view('pricing', 'backend.default.apps.pricing')->name('pricing');
});

Route::prefix('email')->group(function () {
    Route::view('email-application', 'backend.default.apps.email-application')->name('email-application');
    Route::view('email-compose', 'backend.default.apps.email-compose')->name('email-compose');
});

Route::prefix('chat')->group(function () {
    Route::view('chat', 'backend.default.apps.chat')->name('chat');
    Route::view('chat-video', 'backend.default.apps.chat-video')->name('chat-video');
});

Route::prefix('users')->group(function () {
    Route::view('user-profile', 'backend.default.apps.user-profile')->name('user-profile');
    Route::view('edit-profile', 'backend.default.apps.edit-profile')->name('edit-profile');
    Route::view('user-cards', 'backend.default.apps.user-cards')->name('user-cards');
});


Route::view('bookmark', 'backend.default.apps.bookmark')->name('bookmark');
Route::view('contacts', 'backend.default.apps.contacts')->name('contacts');
Route::view('task', 'backend.default.apps.task')->name('task');
Route::view('calendar-basic', 'backend.default.apps.calendar-basic')->name('calendar-basic');
Route::view('social-app', 'backend.default.apps.social-app')->name('social-app');
Route::view('to-do', 'backend.default.apps.to-do')->name('to-do');
Route::view('search', 'backend.default.apps.search')->name('search');

Route::prefix('ui-kits')->group(function () {
    Route::view('state-color', 'ui-kits.state-color')->name('state-color');
    Route::view('typography', 'ui-kits.typography')->name('typography');
    Route::view('avatars', 'ui-kits.avatars')->name('avatars');
    Route::view('helper-classes', 'ui-kits.helper-classes')->name('helper-classes');
    Route::view('grid', 'ui-kits.grid')->name('grid');
    Route::view('tag-pills', 'ui-kits.tag-pills')->name('tag-pills');
    Route::view('progress-bar', 'ui-kits.progress-bar')->name('progress-bar');
    Route::view('modal', 'ui-kits.modal')->name('modal');
    Route::view('alert', 'ui-kits.alert')->name('alert');
    Route::view('popover', 'ui-kits.popover')->name('popover');
    Route::view('tooltip', 'ui-kits.tooltip')->name('tooltip');
    Route::view('loader', 'ui-kits.loader')->name('loader');
    Route::view('dropdown', 'ui-kits.dropdown')->name('dropdown');
    Route::view('accordion', 'ui-kits.accordion')->name('accordion');
    Route::view('tab-bootstrap', 'ui-kits.tab-bootstrap')->name('tab-bootstrap');
    Route::view('tab-material', 'ui-kits.tab-material')->name('tab-material');
    Route::view('box-shadow', 'ui-kits.box-shadow')->name('box-shadow');
    Route::view('list', 'ui-kits.list')->name('list');
});

Route::prefix('bonus-ui')->group(function () {
    Route::view('scrollable', 'backend.default.bonus-ui.scrollable')->name('scrollable');
    Route::view('tree', 'backend.default.bonus-ui.tree')->name('tree');
    Route::view('bootstrap-notify', 'backend.default.bonus-ui.bootstrap-notify')->name('bootstrap-notify');
    Route::view('rating', 'backend.default.bonus-ui.rating')->name('rating');
    Route::view('dropzone', 'backend.default.bonus-ui.dropzone')->name('dropzone');
    Route::view('tour', 'backend.default.bonus-ui.tour')->name('tour');
    Route::view('sweet-alert2', 'backend.default.bonus-ui.sweet-alert2')->name('sweet-alert2');
    Route::view('modal-animated', 'backend.default.bonus-ui.modal-animated')->name('modal-animated');
    Route::view('owl-carousel', 'backend.default.bonus-ui.owl-carousel')->name('owl-carousel');
    Route::view('ribbons', 'backend.default.bonus-ui.ribbons')->name('ribbons');
    Route::view('pagination', 'backend.default.bonus-ui.pagination')->name('pagination');
    Route::view('breadcrumb', 'backend.default.bonus-ui.breadcrumb')->name('breadcrumb');
    Route::view('range-slider', 'backend.default.bonus-ui.range-slider')->name('range-slider');
    Route::view('image-cropper', 'backend.default.bonus-ui.image-cropper')->name('image-cropper');
    Route::view('sticky', 'backend.default.bonus-ui.sticky')->name('sticky');
    Route::view('basic-card', 'backend.default.bonus-ui.basic-card')->name('basic-card');
    Route::view('creative-card', 'backend.default.bonus-ui.creative-card')->name('creative-card');
    Route::view('tabbed-card', 'backend.default.bonus-ui.tabbed-card')->name('tabbed-card');
    Route::view('dragable-card', 'backend.default.bonus-ui.dragable-card')->name('dragable-card');
    Route::view('timeline-v-1', 'backend.default.bonus-ui.timeline-v-1')->name('timeline-v-1');
    Route::view('timeline-v-2', 'backend.default.bonus-ui.timeline-v-2')->name('timeline-v-2');
    Route::view('timeline-small', 'backend.default.bonus-ui.timeline-small')->name('timeline-small');
});

Route::prefix('builders')->group(function () {
    Route::view('form-builder-1', 'builders.form-builder-1')->name('form-builder-1');
    Route::view('form-builder-2', 'builders.form-builder-2')->name('form-builder-2');
    Route::view('pagebuild', 'builders.pagebuild')->name('pagebuild');
    Route::view('button-builder', 'builders.button-builder')->name('button-builder');
});

Route::prefix('animation')->group(function () {
    Route::view('animate', 'animation.animate')->name('animate');
    Route::view('scroll-reval', 'animation.scroll-reval')->name('scroll-reval');
    Route::view('aos', 'animation.aos')->name('aos');
    Route::view('tilt', 'animation.tilt')->name('tilt');
    Route::view('wow', 'animation.wow')->name('wow');
});


Route::prefix('icons')->group(function () {
    Route::view('flag-icon', 'icons.flag-icon')->name('flag-icon');
    Route::view('font-awesome', 'icons.font-awesome')->name('font-awesome');
    Route::view('ico-icon', 'icons.ico-icon')->name('ico-icon');
    Route::view('themify-icon', 'icons.themify-icon')->name('themify-icon');
    Route::view('feather-icon', 'icons.feather-icon')->name('feather-icon');
    Route::view('whether-icon', 'icons.whether-icon')->name('whether-icon');
    Route::view('simple-line-icon', 'icons.simple-line-icon')->name('simple-line-icon');
    Route::view('material-design-icon', 'icons.material-design-icon')->name('material-design-icon');
    Route::view('pe7-icon', 'icons.pe7-icon')->name('pe7-icon');
    Route::view('typicons-icon', 'icons.typicons-icon')->name('typicons-icon');
    Route::view('ionic-icon', 'icons.ionic-icon')->name('ionic-icon');
});

Route::prefix('buttons')->group(function () {
    Route::view('buttons', 'buttons.buttons')->name('buttons');
    Route::view('buttons-flat', 'buttons.buttons-flat')->name('buttons-flat');
    Route::view('buttons-edge', 'buttons.buttons-edge')->name('buttons-edge');
    Route::view('raised-button', 'buttons.raised-button')->name('raised-button');
    Route::view('button-group', 'buttons.button-group')->name('button-group');
});

Route::prefix('forms')->group(function () {
    Route::view('form-validation', 'backend.default.forms.form-validation')->name('form-validation');
    Route::view('base-input', 'backend.default.forms.base-input')->name('base-input');
    Route::view('radio-checkbox-control', 'backend.default.forms.radio-checkbox-control')->name('radio-checkbox-control');
    Route::view('input-group', 'backend.default.forms.input-group')->name('input-group');
    Route::view('megaoptions', 'backend.default.forms.megaoptions')->name('megaoptions');
    Route::view('datepicker', 'backend.default.forms.datepicker')->name('datepicker');
    Route::view('time-picker', 'backend.default.forms.time-picker')->name('time-picker');
    Route::view('datetimepicker', 'backend.default.forms.datetimepicker')->name('datetimepicker');
    Route::view('daterangepicker', 'backend.default.forms.daterangepicker')->name('daterangepicker');
    Route::view('touchspin', 'backend.default.forms.touchspin')->name('touchspin');
    Route::view('select2', 'backend.default.forms.select2')->name('select2');
    Route::view('switch', 'backend.default.forms.switch')->name('switch');
    Route::view('typeahead', 'backend.default.forms.typeahead')->name('typeahead');
    Route::view('clipboard', 'backend.default.forms.clipboard')->name('clipboard');
    Route::view('default-form', 'backend.default.forms.default-form')->name('default-form');
    Route::view('form-wizard', 'backend.default.forms.form-wizard')->name('form-wizard');
    Route::view('form-wizard-two', 'backend.default.forms.form-wizard-two')->name('form-wizard-two');
    Route::view('form-wizard-three', 'backend.default.forms.form-wizard-three')->name('form-wizard-three');
    Route::post('form-wizard-three', function(){
        return redirect()->route('form-wizard-three');
    })->name('form-wizard-three-post');
});

Route::prefix('tables')->group(function () {
    Route::view('bootstrap-basic-table', 'tables.bootstrap-basic-table')->name('bootstrap-basic-table');
    Route::view('bootstrap-sizing-table', 'tables.bootstrap-sizing-table')->name('bootstrap-sizing-table');
    Route::view('bootstrap-border-table', 'tables.bootstrap-border-table')->name('bootstrap-border-table');
    Route::view('bootstrap-styling-table', 'tables.bootstrap-styling-table')->name('bootstrap-styling-table');
    Route::view('table-components', 'tables.table-components')->name('table-components');
    Route::view('datatable-basic-init', 'tables.datatable-basic-init')->name('datatable-basic-init');
    Route::view('datatable-advance', 'tables.datatable-advance')->name('datatable-advance');
    Route::view('datatable-styling', 'tables.datatable-styling')->name('datatable-styling');
    Route::view('datatable-ajax', 'tables.datatable-ajax')->name('datatable-ajax');
    Route::view('datatable-server-side', 'tables.datatable-server-side')->name('datatable-server-side');
    Route::view('datatable-plugin', 'tables.datatable-plugin')->name('datatable-plugin');
    Route::view('datatable-api', 'tables.datatable-api')->name('datatable-api');
    Route::view('datatable-data-source', 'tables.datatable-data-source')->name('datatable-data-source');
    Route::view('datatable-ext-autofill', 'tables.datatable-ext-autofill')->name('datatable-ext-autofill');
    Route::view('datatable-ext-basic-button', 'tables.datatable-ext-basic-button')->name('datatable-ext-basic-button');
    Route::view('datatable-ext-col-reorder', 'tables.datatable-ext-col-reorder')->name('datatable-ext-col-reorder');
    Route::view('datatable-ext-fixed-header', 'tables.datatable-ext-fixed-header')->name('datatable-ext-fixed-header');
    Route::view('datatable-ext-html-5-data-export', 'tables.datatable-ext-html-5-data-export')->name('datatable-ext-html-5-data-export');
    Route::view('datatable-ext-key-table', 'tables.datatable-ext-key-table')->name('datatable-ext-key-table');
    Route::view('datatable-ext-responsive', 'tables.datatable-ext-responsive')->name('datatable-ext-responsive');
    Route::view('datatable-ext-row-reorder', 'tables.datatable-ext-row-reorder')->name('datatable-ext-row-reorder');
    Route::view('datatable-ext-scroller', 'tables.datatable-ext-scroller')->name('datatable-ext-scroller');
    Route::view('jsgrid-table', 'tables.jsgrid-table')->name('jsgrid-table');
});

Route::prefix('charts')->group(function () {
    Route::view('echarts', 'charts.echarts')->name('echarts');
    Route::view('chart-apex', 'charts.chart-apex')->name('chart-apex');
    Route::view('chart-google', 'charts.chart-google')->name('chart-google');
    Route::view('chart-sparkline', 'charts.chart-sparkline')->name('chart-sparkline');
    Route::view('chart-flot', 'charts.chart-flot')->name('chart-flot');
    Route::view('chart-knob', 'charts.chart-knob')->name('chart-knob');
    Route::view('chart-morris', 'charts.chart-morris')->name('chart-morris');
    Route::view('chartjs', 'charts.chartjs')->name('chartjs');
    Route::view('chartist', 'charts.chartist')->name('chartist');
    Route::view('chart-peity', 'charts.chart-peity')->name('chart-peity');
});

Route::view('sample-page', 'pages.sample-page')->name('sample-page');
Route::view('internationalization', 'pages.internationalization')->name('internationalization');

Route::prefix('starter-kit')->group(function () {
});

Route::prefix('others')->group(function () {
    Route::view('400', 'errors.400')->name('error-400');
    Route::view('401', 'errors.401')->name('error-401');
    Route::view('403', 'errors.403')->name('error-403');
    Route::view('404', 'errors.404')->name('error-404');
    Route::view('500', 'errors.500')->name('error-500');
    Route::view('503', 'errors.503')->name('error-503');
});

Route::prefix('authentication')->group(function () {
    Route::view('login', 'authentication.login')->name('login');
    Route::view('login-one', 'authentication.login-one')->name('login-one');
    Route::view('login-two', 'authentication.login-two')->name('login-two');
    Route::view('login-bs-validation', 'authentication.login-bs-validation')->name('login-bs-validation');
    Route::view('login-bs-tt-validation', 'authentication.login-bs-tt-validation')->name('login-bs-tt-validation');
    Route::view('login-sa-validation', 'authentication.login-sa-validation')->name('login-sa-validation');
    Route::view('sign-up', 'authentication.sign-up')->name('sign-up');
    Route::view('sign-up-one', 'authentication.sign-up-one')->name('sign-up-one');
    Route::view('sign-up-two', 'authentication.sign-up-two')->name('sign-up-two');
    Route::view('sign-up-wizard', 'authentication.sign-up-wizard')->name('sign-up-wizard');
    Route::view('unlock', 'authentication.unlock')->name('unlock');
    Route::view('forget-password', 'authentication.forget-password')->name('forget-password');
    Route::view('reset-password', 'authentication.reset-password')->name('reset-password');
    Route::view('maintenance', 'authentication.maintenance')->name('maintenance');
});

Route::view('comingsoon', 'comingsoon.comingsoon')->name('comingsoon');
Route::view('comingsoon-bg-video', 'comingsoon.comingsoon-bg-video')->name('comingsoon-bg-video');
Route::view('comingsoon-bg-img', 'comingsoon.comingsoon-bg-img')->name('comingsoon-bg-img');

Route::view('basic-template', 'email-templates.basic-template')->name('basic-template');
Route::view('email-header', 'email-templates.email-header')->name('email-header');
Route::view('template-email', 'email-templates.template-email')->name('template-email');
Route::view('template-email-2', 'email-templates.template-email-2')->name('template-email-2');
Route::view('ecommerce-templates', 'email-templates.ecommerce-templates')->name('ecommerce-templates');
Route::view('email-order-success', 'email-templates.email-order-success')->name('email-order-success');


Route::prefix('gallery')->group(function () {
    Route::view('/', 'backend.default.apps.gallery')->name('gallery');
    Route::view('gallery-with-description', 'backend.default.apps.gallery-with-description')->name('gallery-with-description');
    Route::view('gallery-masonry', 'backend.default.apps.gallery-masonry')->name('gallery-masonry');
    Route::view('masonry-gallery-with-disc', 'backend.default.apps.masonry-gallery-with-disc')->name('masonry-gallery-with-disc');
    Route::view('gallery-hover', 'backend.default.apps.gallery-hover')->name('gallery-hover');
});

Route::prefix('blog')->group(function () {
    Route::view('/', 'backend.default.apps.blog')->name('blog');
    Route::view('blog-single', 'backend.default.apps.blog-single')->name('blog-single');
    Route::view('add-post', 'backend.default.apps.add-post')->name('add-post');
});


Route::view('faq', 'backend.default.apps.faq')->name('faq');

Route::prefix('job-search')->group(function () {
    Route::view('job-cards-view', 'backend.default.apps.job-cards-view')->name('job-cards-view');
    Route::view('job-list-view', 'backend.default.apps.job-list-view')->name('job-list-view');
    Route::view('job-details', 'backend.default.apps.job-details')->name('job-details');
    Route::view('job-apply', 'backend.default.apps.job-apply')->name('job-apply');
});

Route::prefix('learning')->group(function () {
    Route::view('learning-list-view', 'backend.default.apps.learning-list-view')->name('learning-list-view');
    Route::view('learning-detailed', 'backend.default.apps.learning-detailed')->name('learning-detailed');
});

Route::prefix('maps')->group(function () {
    Route::view('map-js', 'backend.default.apps.map-js')->name('map-js');
    Route::view('vector-map', 'backend.default.apps.vector-map')->name('vector-map');
});

Route::prefix('editors')->group(function () {
    Route::view('summernote', 'backend.default.apps.summernote')->name('summernote');
    Route::view('ckeditor', 'backend.default.apps.ckeditor')->name('ckeditor');
    Route::view('simple-mde', 'backend.default.apps.simple-mde')->name('simple-mde');
    Route::view('ace-code-editor', 'backend.default.apps.ace-code-editor')->name('ace-code-editor');
});

Route::view('knowledgebase', 'backend.default.apps.knowledgebase')->name('knowledgebase');
Route::view('support-ticket', 'backend.default.apps.support-ticket')->name('support-ticket');
Route::view('landing-page', 'pages.landing-page')->name('landing-page');

Route::prefix('layouts')->group(function () {
    Route::view('compact-sidebar', 'admin_unique_layouts.compact-sidebar'); //default //Dubai
    Route::view('box-layout', 'admin_unique_layouts.box-layout');    //default //New York //
    Route::view('dark-sidebar', 'admin_unique_layouts.dark-sidebar');

    Route::view('default-body', 'admin_unique_layouts.default-body');
    Route::view('compact-wrap', 'admin_unique_layouts.compact-wrap');
    Route::view('enterprice-type', 'admin_unique_layouts.enterprice-type');

    Route::view('compact-small', 'admin_unique_layouts.compact-small');
    Route::view('advance-type', 'admin_unique_layouts.advance-type');
    Route::view('material-layout', 'admin_unique_layouts.material-layout');

    Route::view('color-sidebar', 'admin_unique_layouts.color-sidebar');
    Route::view('material-icon', 'admin_unique_layouts.material-icon');
    Route::view('modern-layout', 'admin_unique_layouts.modern-layout');
});

Route::get('layout-{light}', function($light){
    session()->put('layout', $light);
    session()->get('layout');
    if($light == 'vertical-layout')
    {
        return redirect()->route('pages-vertical-layout');
    }
    return redirect()->route('index');
    return 1;
});
Route::get('/clear-cache', function() {
    Artisan::call('config:cache');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return "Cache is cleared";
})->name('clear.cache');

