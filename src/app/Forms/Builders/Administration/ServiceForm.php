<?php

namespace LaravelEnso\Services\app\Forms\Builders\Administration;

use LaravelEnso\Services\app\Service;
use LaravelEnso\Forms\app\Services\Form;

class ServiceForm
{
    private const TemplatePath = __DIR__.'/../../Templates/Administration/service.json';

    private $form;

    public function __construct()
    {
        $this->form = new Form(self::TemplatePath);
    }

    public function create()
    {
        return $this->form->create();
    }

    public function edit(Service $service)
    {
        return $this->form->edit($service);
    }
}