<?php


Route::group(['prefix' => config('backpack.base.route_prefix', 'admin'), 'middleware' => ['auth'], 'news' => 'Admin'], function () {
    // Backpack\NewsCRUD
    CRUD::resource('article', 'admin\ArticleCrudController');
    CRUD::resource('category', 'admin\CategoryCrudController');
    CRUD::resource('tag', 'Admin\TagCrudController');
});

