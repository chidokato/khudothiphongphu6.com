<?php

Route::get('admin_login','usercontroller@getlogin');
Route::post('admin/login','usercontroller@postlogin');
Route::get('admin/logout','usercontroller@getlogout');

Route::group(['prefix'=>'admin','middleware'=>'adminlogin'],function(){

	Route::get('dashboard','c_dashboard@dashboard');

	Route::group(['prefix'=>'user'],function(){
		Route::get('list','usercontroller@getlist')->middleware('can:superadmin');
		Route::get('edit/{id}','usercontroller@getedit')->middleware('can:superadmin');
		Route::post('edit/{id}','usercontroller@postedit');
		Route::get('add','usercontroller@getadd')->middleware('can:superadmin');
		Route::post('add','usercontroller@postadd');
		Route::get('delete/{id}','usercontroller@getdelete')->middleware('can:superadmin');
	});
	Route::group(['prefix'=>'profile'],function(){
		Route::get('list','c_profile@getlist');
		Route::get('update/{id}','ajaxcontroller@updateprofile');
		Route::post('edit/{id}','c_profile@postedit');
	});
	Route::group(['prefix'=>'category'],function(){
		Route::get('list','c_category@getlist');
		Route::get('add','c_category@getadd');
		Route::post('add','c_category@postadd');
		Route::get('edit/{id}','c_category@getedit');
		Route::post('edit/{id}','c_category@postedit');
		Route::get('delete/{id}','c_category@getdelete');
	});
	Route::group(['prefix'=>'home'],function(){
		Route::get('list','c_home@getlist');
		Route::get('add','c_home@getadd');
		Route::get('edit/{id}','c_home@getedit');
		Route::post('edit/{id}','c_home@postedit');
		Route::get('delete/{id}','c_home@getdelete');
	});
	Route::group(['prefix'=>'news'],function(){
		Route::get('list','c_news@getlist');
		Route::get('add','c_news@getadd');
		Route::post('add','c_news@postadd');
		Route::get('edit/{id}','c_news@getedit');
		Route::post('edit/{id}','c_news@postedit');
		Route::get('delete/{id}','c_news@getdelete');
	});
	Route::group(['prefix'=>'themes'],function(){
		Route::get('list','c_themes@getlist');
		Route::get('add','c_themes@getadd');
		Route::post('add','c_themes@postadd');
		Route::get('edit/{id}','c_themes@getedit');
		Route::post('edit/{id}','c_themes@postedit');
		Route::get('delete/{id}','c_themes@getdelete');
	});
	Route::group(['prefix'=>'setting'],function(){
		Route::get('list','c_setting@getlist');
		Route::post('edit/{id}','c_setting@postedit');
	});
	Route::group(['prefix'=>'section'],function(){
		Route::get('list/{hid}','c_section@getlist');
		Route::post('add','c_section@postadd');
		Route::get('edit/{hid}/{id}','c_section@getedit');
		Route::post('edit/{id}','c_section@postedit');
		Route::get('delete/{hid}/{id}','c_section@getdelete');
		
	});
	Route::group(['prefix'=>'ajax'],function(){
		Route::get('sort_by/{id}','c_ajax@sortby');
		Route::get('updateview/{id}','c_ajax@updateview');
		Route::get('updatestatus/{id}','c_ajax@updatestatus');
		Route::get('addimg/{id}','c_ajax@addimg');
		Route::get('delimg/{id}','c_ajax@delimg');
		Route::get('changeproduct/{id}','c_ajax@changeproduct');
		Route::get('productstatus/{id}','c_ajax@productstatus');
		Route::get('producthot/{id}','c_ajax@producthot');
		Route::get('location/{id}','c_ajax@getlocation');
		Route::get('delproductimages/{id}','c_ajax@delproductimages');
		Route::get('newstatus/{id}','c_ajax@newstatus');
		Route::get('newhot/{id}','c_ajax@newhot');
		Route::get('homeimages/{id}','c_ajax@homeimages');
	});

	
});

Route::get('/','c_frontend@home');
Route::get('sitemap.xml','c_frontend@sitemap');
Route::get('lien-he','c_frontend@contact');
// Route::get('{curl}','c_frontend@category');
// Route::get('{curl}/{purl}.html','c_frontend@singleproduct');
Route::get('{nurl}.html','c_frontend@singlenews');
// Route::get('location/{city}/{dis}','c_frontend@district');
// Route::get('location/{city}','fontendcontroller@city');
Route::POST('dang-ky','c_frontend@dangky');
// Route::POST('tim-kiem','fontendcontroller@search');