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

Route::group(['prefix' => '{affiliates}', 'middleware'=> 'affiliate'], function(){
	Route::get('/affiliates', 'AffiliateController@index')->name('affiliate.home');
	Route::get('/all-offers', 'AffiliateController@affiliateoffers')->name('affiliate.offers');
	Route::get('/offers-details', 'AffiliateController@affiliateofferdetail')->name('affiliate.offerdetail');
	Route::get('/approved-offers', 'AffiliateController@approveoffers')->name('affiliate.approveoffers');
	Route::get('/invoices', 'AffiliateController@index')->name('affiliate.inovices');
	Route::get('/postback', 'AffiliateController@userpostback')->name('affiliate.postback');
	Route::get('/create-postback', 'AffiliateController@createuserpostback')->name('affiliate.createpostbackk');
	Route::post('/save-postback', 'AffiliateController@saveuserpostback')->name('affiliate.savepostbac');
	Route::get('/general-report', 'ReportsController@generalreport')->name('affiliate.generalreport');
	Route::get('/conversion-report', 'ReportsController@conversionreport')->name('affiliate.conversionreport');
	Route::get('/conversion-status-report', 'ReportsController@conversionstatusreport')->name('affiliate.conversionstatusreport');
});

Route::group(['prefix' => '{affiliates}', 'middleware'=> 'advertiser'], function(){
	Route::get('/user', 'AdvertiserController@index')->name('advertiser.home');
	Route::get('/all-offers', 'AdvertiserController@advertiseroffers')->name('advertiser.offers');
	Route::get('/general-report', 'ReportsController@generalreport')->name('advertiser.generalreport');
	Route::get('/conversion-report', 'ReportsController@conversionreport')->name('advertiser.conversionreport');
});

Route::group(['middleware'=> 'admin'], function(){
	Route::get('/admin/home', 'AdminController@index')->name('admin.home');
	Route::get('/admin', 'AdminController@index')->name('admin.home');

	/* Offer Links */
	Route::get('/all-offers', 'OfferController@index')->name('all-offers.get');
	Route::post('/add-offer/store', 'OfferController@store')->name('add-offer.store');
	Route::get('/add-offer', 'OfferController@create')->name('add-offer');
	Route::post('/update-offer/{id}', 'OfferController@update')->name('update-offer');
	Route::get('/edit-offer/{id}', 'OfferController@show')->name('edit-offer');
	Route::get('/offers-detail/{id}', 'OfferController@offerdetail')->name('offers-detail');
	Route::get('/offer-application', 'OfferController@offerapplications')->name('offerapplications');
	Route::get('/offer-application/approve/{id}', 'OfferController@approveapplication')->name('approveapplication');

	/* Offer Pool */
	Route::get('/offer-pool', 'OffersPoolController@index')->name('offer-pool');
	Route::get('/create-pool', 'OffersPoolController@create_pool')->name('create-pool');
	Route::post('/create-pool/store', 'OffersPoolController@store')->name('create-pool.store');
	Route::get('/details/show/{id}', 'OffersPoolController@show')->name('create-pool.show');
	Route::get('/details/addoffer', 'OffersPoolController@addoffertopool')->name('detail.addoffer');
	Route::get('/details/deleteoffer/{oid}/{pid}', 'OffersPoolController@deleteofferfrompool')->name('detail.deleteoffer');
	Route::post('/create-pool/updatename/{id}', 'OffersPoolController@updatename')->name('create-pool.updatename');
	Route::post('/create-pool/updatestatus/{id}', 'OffersPoolController@updatestatus')->name('create-pool.updatestatus');
	Route::post('/create-pool/updatenote/{id}', 'OffersPoolController@updatenote')->name('create-pool.updatenote');

	/* Affiliates */
	Route::post('/add-affliate/create', 'UserController@createaffilate')->name('add-affliate.create');
	Route::get('/affiliates',  'AffiliateController@affiliatelist')->name('affiliates');
	Route::get('/affiliate-create', 'AffiliateController@create')->name('affiliate.create');
	Route::get('/affiliate-detail/{id}', 'AffiliateController@show')->name('affiliate.show');
	Route::get('/affiliates-pending', 'AffiliateController@pendingaffiliates')->name('pendingaffiliates');
	Route::get('/approve-affiliate/{id}', 'AffiliateController@aproveaffiliates')->name('approve.affiliate');
	Route::get('/reject-affiliate/{id}', 'AffiliateController@rejected')->name('affiliate.reject');
	Route::get('/affiliate-payouts', 'AffiliateController@affiliatepayouts')->name('affiliate-payouts');
	Route::post('/affiliate-payouts/edit', 'AffiliateController@editpayout')->name('payout.edit');
	Route::get('/affiliate-payouts/delete/{id}', 'AffiliateController@deletepayout')->name('payout.delete');
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
	Route::get('/affiliate-postback', 'AffiliateController@affiliatepostback')->name('affiliatepostback');
	Route::get('/postback-create', 'AffiliateController@createaffiliatepostback')->name('createaffiliatepostback');
	Route::get('/postback-create/{id}', 'AffiliateController@getaffiliatepostback')->name('getaffiliatepostback');
	Route::get('/affiliate/edit/{id}', 'AffiliateController@edit')->name('affiliate.edit');	
	Route::post('/affiliate/update/{id}', 'AffiliateController@update')->name('affiliate.update');
	Route::get('/affiliate/delete/{id}', 'AffiliateController@delete')->name('affiliate.delete');	
	Route::get('/affiliate/block/{id}', 'AffiliateController@block')->name('affiliate.block');	
	Route::get('/affiliate/unblock/{id}', 'AffiliateController@unblock')->name('affiliate.unblock');	

	Route::post('/postbackcreate', 'AffiliateController@createpostback')->name('createpostback');
	Route::get('/postback/edit/{id}', 'AffiliateController@editpostback')->name('editpostback');
	Route::get('/postback/delete/{id}', 'AffiliateController@deletepostback')->name('deletepostback');
	Route::post('/postbackupdate/{id}', 'AffiliateController@postbackupdate')->name('postbackupdate');
	Route::get('/invoice/{id}', 'AffiliateController@getinvoice')->name('getinvoice');


	/* Advertisers */
	Route::get('/advertisers-create', 'AdvertiserController@getadvertiser')->name('advertiser.get');
	Route::post('/add-advertiser/create', 'AdvertiserController@createadvertiser')->name('advertiser.create');
	Route::get('/advertisers-pending', 'AdvertiserController@pendingadvertisers')->name('pendingadvertisers');
	Route::get('/approve-advertiser/{id}', 'AdvertiserController@aproveadvertiser')->name('advertiser.approve');
	Route::get('/reject-advertiser/{id}', 'AdvertiserController@rejected')->name('advertiser.reject');	
	Route::get('/advertisers', 'AdvertiserController@advertiserslist')->name('advertisers');
	Route::get('/advertiser-detail/{id}', 'AdvertiserController@show')->name('advertiser.show');
	Route::get('/advertiser/edit/{id}', 'AdvertiserController@edit')->name('advertiser.edit');	
	Route::post('/advertiser/update/{id}', 'AdvertiserController@update')->name('advertiser.update');	
	Route::get('/advertiser/delete/{id}', 'AdvertiserController@delete')->name('advertiser.delete');	
	Route::get('/advertiser/block/{id}', 'AdvertiserController@block')->name('advertiser.block');	
	Route::get('/advertiser/unblock/{id}', 'AdvertiserController@unblock')->name('advertiser.unblock');	


	/* User Accounts */
	Route::get('/accounts', 'UserController@accountslist')->name('admin.accountslist');
	Route::get('/accounts-create', 'UserController@createaccount')->name('createaccount');
	Route::post('/accounts-create/store', 'UserController@storeaccount')->name('storeaccount');
	Route::get('/account/edit/{id}', 'UserController@accountedit')->name('account.edit');
	Route::post('/account/update/{id}', 'UserController@accountupdate')->name('account.update');
	Route::post('/account/delete/{id}', 'UserController@accountdelete')->name('account.delete');
	Route::get('/roles', 'ManagerController@index')->name('admin.roleslist');
	Route::get('/roles-create', 'ManagerController@createmanagerrole')->name('createmanagerrole');
	Route::post('/roles-create/store', 'ManagerController@storemanagerrole')->name('storemanagerrole');
	Route::post('/manager-role-detail', 'ManagerController@getmanagerrole')->name('getmanagerrole');


	/* Reports */
	Route::get('/advertisers-reports', 'ReportsController@advertiserreport')->name('advertiserreport');
	Route::post('/advertisers-reports-generate', 'ReportsController@advertiserreportgenerate')->name('advertiserreportgenerate');
	Route::get('/affiliate-reports', 'ReportsController@affiliatereport')->name('affiliatereport');
	Route::post('/affiliate-reports-generate', 'ReportsController@affiliatereportgenerate')->name('affiliatereportgenerate');
	Route::get('/operation-report', 'ReportsController@operationreport')->name('operationreport');
	Route::get('/general-report', 'ReportsController@generalreport')->name('generalreport');
	Route::post('/general-report-generate', 'ReportsController@generalreportgenerate')->name('generalreportgenerate');
	Route::get('/conversion-report', 'ReportsController@conversionreport')->name('conversionreport');
	Route::post('/conversion-reports-generate', 'ReportsController@conversionreportgenerate')->name('conversionreportgenerate');
	Route::get('/conversion-status-report', 'ReportsController@conversionstatusreport')->name('conversionstatusreport');
	Route::post('/conversion-status-report-generate', 'ReportsController@conversionstatusreportgenerate')->name('conversionstatusreportgenerate');
	Route::get('/email-templates', 'TemplatesController@index')->name('emailtemplates');
	Route::post('/email-templates/store', 'TemplatesController@affiliatestore')->name('affiliatestore');
	Route::post('/email-templates/update', 'TemplatesController@affiliateupdate')->name('affiliateupdate');
});
Route::get('/tracking/{aid}/{oid}', 'ClicksController@tracking')->name('tracking');
Route::get('/post', 'SignupController@postback')->name('posttracking');

Route::get('/', function () { return view('landing.index'); });
Route::get('/pricing', function () { return view('landing.pricing'); });
Route::get('/features', function () { return view('landing.features'); });
Route::get('/customer', function () { return view('landing.customer'); });
Route::get('/about', function () { return view('landing.about'); });
Route::get('/signup', function () { return view('landing.signup'); });
Route::get('/thankyou', function () { return view('landing.thankyou'); });
Route::post('/adminregister', 'AdminController@adminregister')->name('adminregister');
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



Route::get('/affiliate-payout-tiers', function () { return view('affiliate-payout-tiers'); });
Route::get('/advertisers-invoices', function () { return view('advertisers-invoices'); });

Route::get('/advertisers-invoice-create', function () { return view('advertisers-invoice-create'); });

Route::get('/teams', function () { return view('teams'); });
Route::get('/teams-create', function () { return view('teams-create'); });
Route::get('/test-conversion-report', function () { return view('test-conversion-report'); });
Route::get('/server-log', function () { return view('server-log'); });
Route::get('/activity-log', function () { return view('activity-log'); });
Route::get('/customization', function () { return view('customization'); });
Route::get('/mail-box', function () { return view('mail-box'); });
Route::get('/unsubscribe-list', function () { return view('unsubscribe-list'); });
Route::get('/puller-sources', function () { return view('puller-sources'); });
Route::get('/puller-compaigns', function () { return view('puller-compaigns'); });
Route::get('/source-offers', function () { return view('source-offers'); });
Route::get('/smart-alert', function () { return view('smart-alert'); });
Route::get('/smart-link', function () { return view('smart-link'); });
Route::get('/integration', function () { return view('integration'); });
Route::get('/compaigns', function () { return view('compaigns'); });
//Route::get('/affiliate-detail-page', function () { return view('affiliate-detail-page'); });
Route::get('/log-detail', function () { return view('log-detail'); });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');



// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
