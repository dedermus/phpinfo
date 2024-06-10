<?php

use OpenAdminCore\PHPInfo\Http\Controllers\PHPInfoController;

Route::get('phpinfo', PHPInfoController::class.'@index');
