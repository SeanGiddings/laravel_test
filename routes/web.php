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
  foreach ($numbers as $number) {
    switch ($number) {
      case 3:
        echo "Three <br>";
        break;
      case 9:
        echo str_repeat("Nine <br>", 3);
        break;
      case 15:
        echo str_repeat("Fifteen <br>", 5);
        break;
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
