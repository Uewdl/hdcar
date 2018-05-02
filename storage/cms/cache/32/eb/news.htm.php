<?php 
class Cms5ae74b497c047242423613_1310b50ee04e84d300c5441df32f7fc4Class extends \Cms\Classes\PageCode
{
public function onEnd()
{
    // Optional - set the page title to the post title
    if (isset($this->post))
        $this->page->title = $this->post->title;
}
}
