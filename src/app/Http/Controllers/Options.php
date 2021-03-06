<?php

namespace LaravelEnso\Services\app\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Select\app\Traits\OptionsBuilder;
use LaravelEnso\Services\app\Models\Service;

class Options extends Controller
{
    use OptionsBuilder;

    protected $model = Service::class;
}
