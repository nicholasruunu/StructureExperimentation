<?php namespace Domain\Core;

use Domain\Core\Exceptions\ObserverNotSetException;

trait ObserverTrait
{
    private $observer;

    public function getObserver()
    {
        if ( ! isset($this->observer)) {
            throw new ObserverNotSetException;
        }
        return $this->observer;
    }

    public function setObserver($observer)
    {
        $this->observer = $observer;
        return $this;
    }
}
