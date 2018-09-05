<?php

Route::get('/faq', function () {
    return Redirect::to('/vos-questions');
});

Route::get('/voxpop', function () {
    return Redirect::to('/vos-questions/videos');
});

Route::get('/cycle', function () {
    return Redirect::to('/parcours-arbre');
});

Route::post('/newsletter/submit', 'Cifq\Newsletter\Controllers\NewsletterController@submit');
