<?php

return array(

	'product/([0-9]+)' 					=> 	'product/view/$1',			// actionView в ProductController

	'catalog' 							=> 	'catalog/index',			// actionIndex в CatalogController

	'category/([0-9]+)/page-([0-9]+)' 	=> 	'catalog/category/$1/$2',	// actionCategory в CatalogController
	'category/([0-9]+)'					=> 	'catalog/category/$1',		// actionCategory в CatalogController

	'cart/checkout' 					=>  'cart/checkout', 			// actionCheckOut в CartController
	'cart/add/([0-9]+)'					=>	'cart/add/$1',				// actionAdd в CartController
	'cart/delete/([0-9]+)' 				=>  'cart/delete/$1', 			// actionDelete в CartController   
	'cart/addAjax/([0-9]+)'				=>	'cart/addAjax/$1',			// actionAdd в CartController
	'cart'								=>	'cart/index',				// actionIndex в CartController

	'user/register' 					=>	'user/register',
	'user/login'						=>	'user/login',
	'user/logout' 						=>  'user/logout',

	'cabinet/edit'						=>	'cabinet/edit',	
	'cabinet' 							=>	'cabinet/index',

	'admin/product/create'				=>	'adminProduct/create',
	'admin/product/update/([0-9]+)'		=>	'adminProduct/update/$1',
	'admin/product/delete/([0-9]+)'		=>	'adminProduct/delete/$1',
	'admin/product'						=>	'adminProduct/index',

	'admin/category/create'				=>	'adminCategory/create',
	'admin/category/update/([0-9]+)'	=>	'adminCategory/update/$1',
	'admin/category/delete/([0-9]+)'	=>	'adminCategory/delete/$1',
	'admin/category'					=>	'adminCategory/index',

	'admin/order/view/([0-9]+)'			=>	'adminOrder/view/$1',
	'admin/order/update/([0-9]+)'		=>	'adminOrder/update/$1',
	'admin/order/delete/([0-9]+)'		=>	'adminOrder/delete/$1',
	'admin/order'						=>	'adminOrder/index',

	'admin'								=>	'admin/index',

	'contacts'							=>	'site/contact',
	'about'								=>	'site/about',

	'' 									=> 	'site/index',				// actionIndex в SiteController
);