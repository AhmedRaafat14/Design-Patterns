<?php


namespace Behavioral\COR\Handlers;


use Behavioral\COR\Entity\Person;

class PeopleHandler extends AbstractHandler
{
    /**
     * {@inheritDoc}
     */
    public function handle($request): ?string
    {
        if ($request instanceof Person) {
            return "People Handler: This Person <{$request->getName()}> will be handled by me.";
        }

        return parent::handle($request);
    }
}