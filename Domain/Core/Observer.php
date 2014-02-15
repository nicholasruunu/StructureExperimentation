<?php namespace Domain\Core;

abstract class Observer
{
    private $observer;

    public function setObserver(Observer $observer) {
        $this->observer = $observer;
    }
}
