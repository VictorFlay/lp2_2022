<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cliente/novo', function () {
    echo 'Minha primeira rota';
});

Route::get('/vendas', function () {
    return view('vendas');
});

Route::get('/validator', function () {
    return view('mdb.validator');
});

Route::get('/logo', function () {
    return view('mdb.mdb-logo');
});


