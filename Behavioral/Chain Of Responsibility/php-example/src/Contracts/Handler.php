<?php

namespace Behavioral\COR\Contracts;

/**
 * Declares method for building the chain of handlers.
 * Interface Handler
 */
interface Handler
{
    /**
     * Set the next handler for each handler to build the chain of responsibility
     *
     * @param Handler $handler
     * @return Handler
     */
    public function setNext(Handler $handler): Handler;

    /**
     * This function will have the logic to implement each handler logic
     *
     * @param $request
     * @return string|null
     */
    public function handle($request): ?string;
}