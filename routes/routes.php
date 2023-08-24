<?php
/**
 * Webhooks related routes to registered with laravel application
 *
 * @author Fahad Ali <fahad@llarasoft.io>
 */

Route::group([
    'namespace' => 'Larasoft\TallBobSms\Controllers'
], function () {
    Route::post('/vidcorp/webhooks', 'VidCorpSmsController@webhook');
});
