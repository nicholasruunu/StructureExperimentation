<?php namespace Domain\Posts;

class PostCreator
{
    use PostCreatorObserver;

    private $posts;

    public function __construct(PostRepository $posts)
    {
        $this->posts = $posts;
    }

    public function create(array $data)
    {
        $post = $this->posts->create($data);
        if ( ! $this->posts->save($post)) {
            return $this->onPostCreateFailure($post->getErrors());
        }
        return $this->onPostCreateSuccess($post);
    }

    private function onPostCreateFailure($errors)
    {
        return $this->getObserver()->onPostCreateFailure($errors);
    }

    private function onPostCreateSuccess($post)
    {
        return $this->getObserver()->onPostCreateSuccess($post);
    }
}
