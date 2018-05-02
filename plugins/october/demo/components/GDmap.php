<?php namespace October\Demo\Components;

use Cms\Classes\ComponentBase;
use ApplicationException;

class GDmap extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => '高德地图',
            'description' => '高德地图'
        ];
    }

    public function defineProperties()
    {
        return [
            'lng' => [
                'description'       => '在这拾取坐标:http://lbs.amap.com/console/show/picker',
                'title'             => '经度',
                'default'           => 113.360288,
                'type'              => 'string'
            ],
            'lat' =>[
                'description'=>'',
                'title' => '纬度',
                'default'=>22.915366,
                'type'=>'string'
            ],
            'width'=>[
                'description'=>'设置地图宽度',
                'title'=>'地图宽度',
                'default'=>'100%',
                'type'=>'string'
            ],
            'height'=>[
                'description'=>'设置地图高度',
                'title'=>'地图高度',
                'default'=>'400px',
                'type'=>'string'
            ],
			'id'=>[
				'description'=>'地图唯一标识',
                'title'=>'地图ID',
                'default'=>'GDmap-1',
                'type'=>'string'
			]
        ];
    }

    public function onRun(){
        $this->addJs('http://webapi.amap.com/maps?v=1.3&key=8325164e247e15eea68b59e89200988b');
    }

}
