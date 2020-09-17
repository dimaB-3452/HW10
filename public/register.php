<?php


require_once '../vendor/autoload.php';

require_once '../config/eloquent.php';
require_once '../config/blade.php';

use Illuminate\Database\Eloquent\Model;

echo $blade->make("register")->render();