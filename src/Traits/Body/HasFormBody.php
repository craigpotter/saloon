<?php

namespace Sammyjo20\Saloon\Traits\Body;

use Sammyjo20\Saloon\Repositories\Body\FormBodyRepository;

trait HasFormBody
{
    /**
     * Body Repository
     *
     * @var FormBodyRepository
     */
    protected FormBodyRepository $body;

    /**
     * Retrieve the data repository
     *
     * @return FormBodyRepository
     */
    public function body(): FormBodyRepository
    {
        return $this->data ??= new FormBodyRepository($this->defaultBody());
    }

    /**
     * Default body
     *
     * @return array
     */
    protected function defaultBody(): array
    {
        return [];
    }
}