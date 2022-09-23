<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/detail_produk', 'Home::detail_produk');
$routes->get('/login_page', 'Home::login');
$routes->get('', 'Home::login');
$routes->get('/detail_produk', 'Home::detail_produk');
$routes->match(['get', 'post'], 'login', 'UserController::login', ["filter" => "noauth"]);
// Owner routes
$routes->group("owner", ["filter" => "auth"], function ($routes) {
    //VIEW INDEX
    $routes->get("/", "OwnerController::index");
    $routes->get("dashboards/", "OwnerController::index");
    $routes->get("informasi_akun/", "OwnerController::profil_setting");
    $routes->get("tambah_users/", "OwnerController::tambah_users");
    $routes->get("data_users/", "Owner/Data_users::index");
    $routes->get("data_kategori/", "Owner/Data_Kategori::index");
    $routes->get("data_promosi/", "Owner/Data_Promosi::index");
    $routes->get("data_produk/", "Owner/Data_Produk::index");
    $routes->get("transaksi_penjualan/", "Owner/Transaksi_Penjualan::index");
    $routes->get("data_peramalan/", "Owner/Data_Peramalan::index");
    $routes->get("mulai_peramalan/", "Owner/Mulai_Peramalan::index");
    $routes->get("data_supplier/", "Owner/Data_Supplier::index");
    $routes->get("data_investor/", "Owner/Data_Investor::index");
    $routes->get("produk_masuk/", "Owner/Produk_Masuk::index");
    // VIEW TAMBAH
    $routes->get("tambah_users/", "OwnerController::index");
    $routes->get("data_kategori/tambah_kategori/", "Owner/Data_Kategori::tambah_kategori");
    $routes->get("data_promosi/tambah_promosi/", "Owner/Data_Promosi::tambah_promosi");
    $routes->get("data_produk/tambah_produk/", "Owner/Data_Produk::tambah_produk");
    $routes->get("data_peramalan/tambah_peramalan/", "Owner/Data_Peramalan::tambah_peramalan");
    $routes->get("data_supplier/tambah_supplier/", "Owner/Data_Supplier::tambah_supplier");
    $routes->get("data_investor/tambah_investor/", "Owner/Data_Investor::tambah_investor");
    $routes->get("produk_masuk/tambah_produk_masuk/", "Owner/Produk_Masuk::tambah");
    // VIEW EDIT
    $routes->get("data_promosi/edit_promosi/", "Owner/Data_Promosi::edit_promosi");
    $routes->get("data_produk/edit_produk/", "Owner/Data_Produk::edit_produk");
    $routes->get("data_peramalan/edit_peramalan/", "Owner/Data_Peramalan::edit_peramalan");
    $routes->get("data_supplier/edit_supplier/", "Owner/Data_Supplier::edit_supplier");
    $routes->get("data_investor/edit_investor/", "Owner/Data_Investor::edit_investor");

    // EXCEL
    $routes->get("data_investor/edit_investor/", "Owner/Data_Investor::edit_investor");
});
// Karyawan routes
$routes->group("karyawan", ["filter" => "auth"], function ($routes) {
    $routes->get("/", "KaryawanController::index");
    $routes->get("informasi_akun/", "KaryawanController::profil_setting");
    $routes->get("data_kategori/", "Karyawan/Data_Kategori::index");
    $routes->get("data_promosi/", "Karyawan/Data_Promosi::index");
    $routes->get("produk_masuk/", "Karyawan/Produk_Masuk::index");

    // VIEW TAMBAH
    $routes->get("produk_masuk/tambah_produk_masuk/", "Karyawan/Produk_Masuk::tambah");
});
$routes->get('logout', 'UserController::logout');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
