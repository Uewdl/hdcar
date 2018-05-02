<?php 
class Cms5ae86e87d1a10311448011_35b02ca4173c6f2111c02f523f2d5067Class extends \Cms\Classes\LayoutCode
{
public function onEnd(){
    //$this['active'] = substr($this->post->url,1);    
    $this['banner'] = $this['banner'] ? '/storage/app/media/'.$this['banner'] : '';
}
}
