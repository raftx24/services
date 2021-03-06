<?php

namespace LaravelEnso\Services\app\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Services\app\Models\Service;

class Destroy extends Controller
{
    public function __invoke(Service $service)
    {
        $service->delete();

        return [
            'message' => __('The service was successfully deleted'),
            'redirect' => 'services.index',
        ];
    }
}
