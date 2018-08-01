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

Route::group(['middleware'=> 'boss'], function(){
	Route::get('/boss/home', 'BossController@index')->name('boss/home');
});

Route::group(['middleware'=> 'admin'], function(){
	Route::get('/admin/home', 'AdminController@index')->name('admin.home');
	Route::get('/admin', 'AdminController@index')->name('admin.home');
	Route::post('/add-offer/store', 'OfferController@store')->name('add-offer.store');
	Route::get('/add-offer', 'OfferController@create')->name('add-offer');
	Route::get('/offer-pool', 'OffersPoolController@index')->name('offer-pool');
	Route::get('/create-pool', 'OffersPoolController@create_pool')->name('create-pool');
	Route::post('/create-pool/store', 'OffersPoolController@store')->name('create-pool.store');
	Route::post('/add-offer/store', 'OfferController@store')->name('add-offer.store');
	Route::get('/details/show/{id}', 'OffersPoolController@show')->name('create-pool.show');
	Route::get('/details/addoffer', 'OffersPoolController@addoffertopool')->name('detail.addoffer');
	Route::get('/details/deleteoffer/{oid}/{pid}', 'OffersPoolController@deleteofferfrompool')->name('detail.deleteoffer');
	Route::post('/create-pool/updatename/{id}', 'OffersPoolController@updatename')->name('create-pool.updatename');
	Route::post('/create-pool/updatestatus/{id}', 'OffersPoolController@updatestatus')->name('create-pool.updatestatus');
	Route::post('/create-pool/updatenote/{id}', 'OffersPoolController@updatenote')->name('create-pool.updatenote');
	Route::post('/add-offer/store', 'OfferController@store')->name('add-offer.store');
	Route::get('/advertisers-create', 'UserController@getadvertiser')->name('advertiser.get');
	Route::post('/add-affliate/create', 'UserController@createaffilate')->name('add-affliate.create');
	Route::post('/add-advertiser/create', 'UserController@createadvertiser')->name('add-advertiser.create');
	Route::get('/affiliates',  'AffiliateController@index')->name('affiliates');
	Route::get('/affiliate-create', 'AffiliateController@create')->name('affiliate.create');
	Route::get('/affiliate-detail/{id}', 'AffiliateController@show')->name('affiliate.show');
	Route::get('/all-offers', 'OfferController@index')->name('all-offers.get');
	Route::get('/affiliates-pending', 'AffiliateController@pendingaffiliates')->name('pendingaffiliates');
	Route::get('/advertisers-pending', 'AdvertiserController@pendingadvertisers')->name('pendingadvertisers');
	Route::get('/approve-affiliate/{id}', 'AffiliateController@aproveaffiliates')->name('approve.affiliate');
	Route::get('/approve-advertiser/{id}', 'AdvertiserController@aproveadvertiser')->name('approve.advertiser');	
	Route::get('/advertisers', 'AdvertiserController@index')->name('advertisers');	
	Route::get('/affiliate-payouts', 'AffiliateController@affiliatepayouts')->name('affiliate-payouts');
	Route::get('/affiliate-payout-create', 'AffiliateController@affiliatepayoutcreate')->name('affiliatepayoutcreate');
	Route::post('/affiliate-payout-save', 'AffiliateController@affiliatepayoutsave')->name('affiliatepayoutsave');
	Route::post('/offerrate', 'AffiliateController@offerrate')->name('offerrate');
	Route::post('/affiliateoffersdetails', 'AffiliateController@affiliateoffersdetails')->name('affiliateoffersdetails');

	Route::get('/affiliate-invoices', 'AffiliateController@affiliateinvoices')->name('affiliateinvoices');
	Route::get('/affiliate-invoice-create', 'AffiliateController@affiliateinvoicescreate')->name('affiliateinvoicescreate'); 
	Route::post('/affiliate-invoice/add', 'AffiliateController@affiliateaddinvoices')->name('affiliateaddinvoices'); 
	Route::post('/affiliate-invoice/update/{id}', 'AffiliateController@affiliateupdateinvoices')->name('affiliateupdateinvoices'); 

	Route::get('/affiliate-invoice/edit/{id}', 'AffiliateController@affiliateinvoicesedit')->name('affiliateinvoicesedit'); 
	Route::post('/affiliate-update-clicks/{id}', 'AffiliateController@affiliateupdateclicks')->name('affiliateupdateclicks'); 
	Route::post('/affiliatedetail', 'AffiliateController@affiliatedetail')->name('affiliatedetail'); 
	Route::get('/postback-create', 'AffiliateController@createaffiliatepostback')->name('createaffiliatepostback');

	Route::get('/accounts', 'UserController@accountslist')->name('admin.accountslist');
	Route::get('/accounts-create', 'UserController@createaccount')->name('createaccount');
	Route::post('/accounts-create/store', 'UserController@storeaccount')->name('storeaccount');
	Route::get('/roles', 'ManagerController@index')->name('admin.roleslist');
	Route::get('/roles-create', 'ManagerController@createmanagerrole')->name('createmanagerrole');
	Route::post('/roles-create/store', 'ManagerController@storemanagerrole')->name('storemanagerrole');
	Route::post('/manager-role-detail', 'ManagerController@getmanagerrole')->name('getmanagerrole');
});

Route::get('/', function () { return view('index'); });
Route::get('/offer', function () { return view('offer'); });
Route::get('/edit-offer', function () { return view('edit-offer'); });
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


Route::get('/affiliate-postback', function () { return view('affiliate-postback'); });
Route::get('/affiliate-payout-tiers', function () { return view('affiliate-payout-tiers'); });
Route::get('/advertisers-invoices', function () { return view('advertisers-invoices'); });
Route::get('/invoice', function () { return view('invoice'); });
Route::get('/advertisers-invoice-create', function () { return view('advertisers-invoice-create'); });

Route::get('/teams', function () { return view('teams'); });
Route::get('/teams-create', function () { return view('teams-create'); });
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
Route::get('/offers-detail-page', function () { return view('offers-detail-page'); });
Route::get('/affiliate-detail-page', function () { return view('affiliate-detail-page'); });
Route::get('/log-detail', function () { return view('log-detail'); });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


