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

Route::get('/test', function () {
    return view('kId5');
});

Route::get('/', function () {
    return view('home');
});

/*REGISTER*/
Route::get('/register', function () {
    return view('registerAs'); });
Route::get('/register-as-kontributor', function () {
    return view('registerKontributor'); });
Route::get('/register-as-administrator', function () {
    return view('registerAdministrator'); });

/*LOGIN*/
Route::get('/login', function () {
    return view('loginAs'); });
Route::get('/login-as-kontributor', function () {
    return view('loginKontributor'); });
Route::get('/login-as-administrator', function () {
    return view('loginAdministrator'); });

/*ADMINISTRATOR*/
Route::get('/administrator', 'administratorController@index');
Route::get('/loginAdministrator', 'administratorController@loginAdministrator');
Route::post('/loginAdministratorPost', 'administratorController@loginAdministratorPost');
Route::get('/registerAdministrator', 'administratorController@registerAdministrator');
Route::post('/registerAdministratorPost', 'administratorController@registerAdministratorPost');
Route::get('/logoutAdministrator', 'administratorController@logoutAdministrator');

Route::get('/administrator', function () {
    return view('administrator'); });

Route::get('daftar-konten', 'kontenController@index');

Route::resource('konten','kontenController' );

/*KONTRIBUTOR*/
Route::get('/kontributor', 'kontributorController@index');
Route::get('/loginKontributor', 'kontributorController@loginKontributor');
Route::post('/loginKontributorPost', 'kontributorController@loginKontributorPost');
Route::get('/registerKontributor', 'kontributorController@registerKontributor');
Route::post('/registerKontributorPost', 'kontributorController@registerKontributorPost');
Route::get('/logoutKontributor', 'kontributorController@logoutKontributor');

Route::get('/kontributor', function () {
    return view('kontributor'); });
Route::get('/tambah-konten', function () {
    return view('kontributorKonten'); });
Route::get('/tambah-konten-post', function () {
    return view('kontributorKontenSukses'); });

Route::post('/kontenPost', 'kontenController@kontenPost');

/*SIAGA BENCANA*/
Route::get('/gempa', function () {
    return view('sbGempa'); });
Route::get('/tsunami', function () {
    return view('sbTsunami'); });
Route::get('/gunung-berapi', function () {
    return view('sbGunung'); });
Route::get('/kebakaran-hutan', function () {
    return view('sbKebakaran'); });
Route::get('/angin-topan', function () {
    return view('sbAngin'); });
Route::get('/longsor', function () {
    return view('sbLongsor'); });

/*KONTEN*/
Route::get('/konten-selengkapnya', function() {
	return view('kSelengkapnya'); });
Route::get('/sering-dilanda-longsor', function () {
    return view('kId3'); });
Route::get('/angin-puting-beliung', function () {
    return view('kId2'); });
Route::get('/sejumlah-daerah-di-Sumbar', function () {
    return view('kId4'); });

if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
// Ignores notices and reports all other kinds... and warnings
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
// error_reporting(E_ALL ^ E_WARNING); // Maybe this is enough
}