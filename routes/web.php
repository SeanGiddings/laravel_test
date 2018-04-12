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

Route::get('/', function () {
    $numbers = range(0, 100, 3);
    for ($i = 0; $i < count($numbers); $i++) {
        if ($numbers[$i] % 7 == 0 && $numbers[$i] != 0) {
            echo 'Sevens are lucky, this number has ' . ($numbers[$i] / 7) . '<br>';
        } elseif ($numbers[$i] % 10 == 0 && $numbers[$i] != 0) {
            echo $numbers[$i] . ' is a round number <br>';
        }

        if ($numbers[$i] == reset($numbers)) {
            echo 'First number <br>';
        } elseif ($numbers[$i] == end($numbers)) {
            echo 'Last number';
        }
    }
});

/**
 * Healthcheck to ensure the application is healthy.  When deployed this endpoint will determine healthy nodes
 * where the application can live.  In the event of network connectivity failure with any external dependencies,
 * this healthcheck should fail.
 */
Route::get('/healthcheck/{token}', function ($token) {
    if ($token == env('HEALTHCHECK_TOKEN')) {
        $connection = DB::connection();
        $connection->disconnect();

        return response('');
    }

    throw new \Exception('Invalid healthcheck token');
});
