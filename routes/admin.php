<?php

Route::group(['namespace' => 'Auth', 'prefix' => 'scott.royce'], function () {

    Route::get('/', [
        'uses' => 'LoginController@showLoginForm',
        'as' => 'show.login.form'
    ]);

    Route::post('login', [
        'uses' => 'LoginController@login',
        'as' => 'login'
    ]);

    Route::post('logout', [
        'uses' => 'LoginController@logout',
        'as' => 'logout'
    ]);

    Route::get('password/email', [
        'uses' => 'ForgotPasswordController@showLinkRequestForm',
        'as' => 'password.email'
    ]);

    Route::post('password/email', [
        'uses' => 'ForgotPasswordController@sendResetLinkEmail',
        'as' => ''
    ]);

    Route::get('password/reset/{token}', [
        'uses' => 'ResetPasswordController@showResetForm',
        'as' => 'password.request'
    ]);

    Route::post('password/reset', [
        'uses' => 'ResetPasswordController@reset',
        'as' => 'password.reset'
    ]);

});

Route::group(['namespace' => 'Pages\Admins', 'prefix' => 'scott.royce', 'middleware' => 'auth'], function () {

    Route::get('dashboard', [
        'uses' => 'AdminController@index',
        'as' => 'admin.dashboard'
    ]);

    Route::group(['prefix' => 'account'], function () {

        Route::get('profile', [
            'uses' => 'AdminController@editProfile',
            'as' => 'admin.edit.profile'
        ]);

        Route::put('profile/update', [
            'uses' => 'AdminController@updateProfile',
            'as' => 'admin.update.profile'
        ]);

        Route::get('settings', [
            'uses' => 'AdminController@accountSettings',
            'as' => 'admin.settings'
        ]);

        Route::put('settings/update', [
            'uses' => 'AdminController@updateAccount',
            'as' => 'admin.update.account'
        ]);

    });

    Route::group(['prefix' => 'inbox', 'middleware' => 'root'], function () {

        Route::get('/', [
            'uses' => 'AdminController@showInbox',
            'as' => 'admin.inbox'
        ]);

        Route::post('compose', [
            'uses' => 'AdminController@composeInbox',
            'as' => 'admin.compose.inbox'
        ]);

        Route::get('{id}/delete', [
            'uses' => 'AdminController@deleteInbox',
            'as' => 'admin.delete.inbox'
        ]);

    });

    Route::group(['namespace' => 'DataMaster', 'prefix' => 'tables'], function () {

        Route::group(['prefix' => 'admin-accounts', 'middleware' => 'admin'], function () {

            Route::get('/', [
                'uses' => 'AccountsController@showAdminsTable',
                'as' => 'table.admins'
            ]);

            Route::post('create', [
                'uses' => 'AccountsController@createAdmins',
                'as' => 'create.admins'
            ]);

            Route::put('profile/update', [
                'uses' => 'AccountsController@updateProfileAdmins',
                'as' => 'update.profile.admins'
            ]);

            Route::put('account/update', [
                'uses' => 'AccountsController@updateAccountAdmins',
                'as' => 'update.account.admins'
            ]);

            Route::get('{id}/delete', [
                'uses' => 'AccountsController@deleteAdmins',
                'as' => 'delete.admins'
            ]);

            Route::post('deletes', [
                'uses' => 'AccountsController@massDeleteAdmins',
                'as' => 'massDelete.admins'
            ]);

        });

        Route::group(['prefix' => 'galleries', 'middleware' => 'root'], function () {

            Route::get('/', [
                'uses' => 'GalleriesController@showGalleriesTable',
                'as' => 'table.galleries'
            ]);

            Route::post('create', [
                'uses' => 'GalleriesController@createGalleries',
                'as' => 'create.galleries'
            ]);

            Route::put('update', [
                'uses' => 'GalleriesController@updateGalleries',
                'as' => 'update.galleries'
            ]);

            Route::get('{id}/delete', [
                'uses' => 'GalleriesController@deleteGalleries',
                'as' => 'delete.galleries'
            ]);

            Route::post('deletes', [
                'uses' => 'GalleriesController@massDeleteGalleries',
                'as' => 'massDelete.galleries'
            ]);

        });

        Route::group(['prefix' => 'installers', 'middleware' => 'root'], function () {

            Route::get('/', [
                'uses' => 'InstallersController@showInstallersTable',
                'as' => 'table.installers'
            ]);

            Route::post('create', [
                'uses' => 'InstallersController@createInstallers',
                'as' => 'create.installers'
            ]);

            Route::put('update', [
                'uses' => 'InstallersController@updateInstallers',
                'as' => 'update.installers'
            ]);

            Route::get('{id}/delete', [
                'uses' => 'InstallersController@deleteInstallers',
                'as' => 'delete.installers'
            ]);

            Route::post('deletes', [
                'uses' => 'InstallersController@massDeleteInstallers',
                'as' => 'massDelete.installers'
            ]);

        });

        Route::group(['prefix' => 'blog', 'middleware' => 'admin'], function () {

            Route::group(['prefix' => 'categories'], function () {

                Route::get('/', [
                    'uses' => 'BlogController@showBlogCategoriesTable',
                    'as' => 'table.blog.categories'
                ]);

                Route::post('create', [
                    'uses' => 'BlogController@createBlogCategories',
                    'as' => 'create.blog.categories'
                ]);

                Route::put('update', [
                    'uses' => 'BlogController@updateBlogCategories',
                    'as' => 'update.blog.categories'
                ]);

                Route::get('{id}/delete', [
                    'uses' => 'BlogController@deleteBlogCategories',
                    'as' => 'delete.blog.categories'
                ]);

                Route::post('deletes', [
                    'uses' => 'BlogController@massDeleteBlogCategories',
                    'as' => 'massDelete.blog.categories'
                ]);

            });

            Route::group(['prefix' => 'posts'], function () {

                Route::get('/', [
                    'uses' => 'BlogController@showBlogPostsTable',
                    'as' => 'table.blog.posts'
                ]);

                Route::post('create', [
                    'uses' => 'BlogController@createBlogPosts',
                    'as' => 'create.blog.posts'
                ]);

                Route::get('edit/{id}', [
                    'uses' => 'BlogController@editBlogPosts',
                    'as' => 'edit.blog.posts'
                ]);

                Route::get('galleries', [
                    'uses' => 'BlogController@getBlogGalleries',
                    'as' => 'get.blog.galleries'
                ]);

                Route::put('update', [
                    'uses' => 'BlogController@updateBlogPosts',
                    'as' => 'update.blog.posts'
                ]);

                Route::get('{id}/delete', [
                    'uses' => 'BlogController@deleteBlogPosts',
                    'as' => 'delete.blog.posts'
                ]);

                Route::post('deletes', [
                    'uses' => 'BlogController@massDeleteBlogPosts',
                    'as' => 'massDelete.blog.posts'
                ]);

                Route::group(['prefix' => '{blog_id}/galleries'], function () {

                    Route::get('/', [
                        'uses' => 'BlogController@showBlogGalleriesTable',
                        'as' => 'table.blog.galleries'
                    ]);

                    Route::put('update', [
                        'uses' => 'BlogController@updateBlogGalleries',
                        'as' => 'update.blog.galleries'
                    ]);

                    Route::get('{id}/delete', [
                        'uses' => 'BlogController@deleteBlogGalleries',
                        'as' => 'delete.blog.galleries'
                    ]);

                    Route::post('deletes', [
                        'uses' => 'BlogController@massDeleteBlogGalleries',
                        'as' => 'massDelete.blog.galleries'
                    ]);

                });

            });

        });

    });

});
