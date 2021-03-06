<?php

namespace LaravelEnso\Services\app\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Services\app\Forms\Builders\ServiceForm;
use LaravelEnso\Services\app\Models\Service;

class Edit extends Controller
{
    public function __invoke(Service $service, ServiceForm $form)
    {
        return ['form' => $form->edit($service)];
    }
}
