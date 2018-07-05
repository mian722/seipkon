<?php

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

Route::get('/', function () { return view('index'); });
Route::get('/product', function () { return view('product'); });
Route::get('/add-product', function () { return view('add-product'); });
Route::get('/edit-product', function () { return view('edit-product'); });
Route::get('/all-offers', function () { return view('all-offers'); });
Route::get('/offer-pool', function () { return view('offer-pool'); });
Route::get('/create-pool', function () { return view('create-pool'); });
Route::get('/detail-pool', function () { return view('detail-pool'); });
Route::get('/offer-application', function () { return view('offer-application'); });
Route::get('/pages', function () { return view('pages'); });
Route::get('/basic-table', function () { return view('basic-table'); });
Route::get('/advance-table', function () { return view('advance-table'); });
Route::get('/advance-components', function () { return view('advance-components'); });
Route::get('/create-page', function () { return view('create-page'); });
Route::get('/edit-page', function () { return view('edit-page'); });
Route::get('/chatting', function () { return view('chatting'); });
Route::get('/notes', function () { return view('notes'); });
Route::get('/apps-contact-list', function () { return view('apps-contact-list'); });
Route::get('/compose', function () { return view('compose'); });
Route::get('/inbox', function () { return view('inbox'); });
Route::get('/mail-read', function () { return view('mail-read'); });
Route::get('/ui_button', function () { return view('ui_button'); });
Route::get('/ui_panels', function () { return view('ui_panels'); });
Route::get('/icon-fontawesome', function () { return view('icon-fontawesome'); });	
Route::get('/icon-glyphicons', function () { return view('icon-glyphicons'); });	
Route::get('/icon-themify', function () { return view('icon-themify'); });	
Route::get('/ui_tab_accordion', function () { return view('ui_tab_accordion'); });	
Route::get('/ui_sweet_alerts', function () { return view('ui_sweet_alerts'); });	
Route::get('/ui_progressbars', function () { return view('ui_progressbars'); });	
Route::get('/ui_carousel', function () { return view('ui_carousel'); });	
Route::get('/ui_breadcrumbs', function () { return view('ui_breadcrumbs'); });	
Route::get('/ui_pagination', function () { return view('ui_pagination'); });	
Route::get('/affiliates', function () { return view('affiliates'); });
Route::get('/pending-affiliates', function () { return view('pending-affiliates'); });	
Route::get('/affiliate-payouts', function () { return view('affiliate-payouts'); });
Route::get('/affiliate-postback', function () { return view('affiliate-postback'); });
Route::get('/affiliate-payout-tiers', function () { return view('affiliate-payout-tiers'); });
Route::get('/affiliate-invoices', function () { return view('affiliate-invoices'); });
Route::get('/affiliate-create', function () { return view('affiliate-create'); });
Route::get('/affiliate-invoice-create', function () { return view('affiliate-invoice-create'); });
Route::get('/advertisers', function () { return view('advertisers'); });

Route::get('/advertisers-pending', function () { return view('advertisers-pending'); });
Route::get('/advertisers-invoices', function () { return view('advertisers-invoices'); });
Route::get('/invoice', function () { return view('invoice'); });
Route::get('/advertisers-invoice-create', function () { return view('advertisers-invoice-create'); });
Route::get('/advertisers-create', function () { return view('advertisers-create'); });
Route::get('/accounts', function () { return view('accounts'); });
Route::get('/roles', function () { return view('roles'); });
Route::get('/teams', function () { return view('teams'); });
Route::get('/advertisers-reports', function () { return view('advertisers-reports'); });
Route::get('/affiliate-reports', function () { return view('affiliate-reports'); });
Route::get('/operation-report', function () { return view('operation-report'); });
Route::get('/generat-report', function () { return view('generat-report'); });
Route::get('/conversion-report', function () { return view('conversion-report'); });
Route::get('/conversion-status-report', function () { return view('conversion-status-report'); });
Route::get('/test-conversion-report', function () { return view('test-conversion-report'); });
Route::get('/server-log', function () { return view('server-log'); });
Route::get('/activity-log', function () { return view('activity-log'); });
Route::get('/customization', function () { return view('customization'); });
Route::get('/email-templates', function () { return view('email-templates'); });
Route::get('/mail-box', function () { return view('mail-box'); });
Route::get('/unsubscribe-list', function () { return view('unsubscribe-list'); });
Route::get('/puller-sources', function () { return view('puller-sources'); });
Route::get('/puller-compaigns', function () { return view('puller-compaigns'); });
Route::get('/source-offers', function () { return view('source-offers'); });
Route::get('/smart-alert', function () { return view('smart-alert'); });
Route::get('/smart-link', function () { return view('smart-link'); });
Route::get('/integration', function () { return view('integration'); });
Route::get('/compaigns', function () { return view('compaigns'); });
Route::get('/offers-details-page', function () { return view('offers-details-page'); });

Route::get('/postback-create', function () { return view('postback-create'); });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
