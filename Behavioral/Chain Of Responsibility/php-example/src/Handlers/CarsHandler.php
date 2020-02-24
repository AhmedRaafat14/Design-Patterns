<?php


namespace Behavioral\COR\Handlers;


use Behavioral\COR\Entity\Car;

class CarsHandler extends AbstractHandler
{
    /**
     * {@inheritDoc}
     */
    public function handle($request): ?string
    {
        if ($request instanceof Car) {
            return "Cars Handler: This Car <{$request->getModel()}> will be handled by me.";
        }

        return parent::handle($request);
    }
}