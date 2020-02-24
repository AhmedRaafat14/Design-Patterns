<?php

namespace Behavioral\COR\Handlers;

use Behavioral\COR\Contracts\Handler;

abstract class AbstractHandler implements Handler
{
    /** @var Handler $nextHandler */
    private Handler $nextHandler;

    /**
     * {@inheritDoc}
     */
    public function setNext(Handler $handler): Handler
    {
        $this->nextHandler = $handler;

        return $handler;
    }

    /**
     * {@inheritDoc}
     */
    public function handle($request): ?string
    {
        if (isset($this->nextHandler)) {
            return $this->nextHandler->handle($request);
        }

        return null;
    }
}