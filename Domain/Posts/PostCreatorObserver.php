<?php namespace Domain\Posts;

use Domain\Core\ObserverTrait;

trait PostCreatorObserver
{
    use ObserverTrait;
    abstract public function onPostCreateFailure($errors);
    abstract public function onPostCreateSuccess($post);
}
