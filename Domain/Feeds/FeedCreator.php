<?php namespace Domain\Feeds;

class FeedCreator extends Observer implements PostCreatorObserver
{
    public function __construct(EventRepository $event)
    {
        $this->event = $event;
    }

    public function onPostCreateFailure($data)
    {
        return $this->observer->onPostCreateFailure($data);
    }

    public function onPostCreateSuccess($event)
    {
        $feed = $this->event->create($data);

        if ( ! $this->event->save($post)) {
            return $this->observer->onPostCreateFailure($event->getErrors());
        }
        return $this->observer->onPostCreateFailure($event->getErrors());
    }
}
