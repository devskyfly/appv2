<?php
namespace frontend\widgets;

use yii\bootstrap\Widget;

class InfoList extends Widget
{
    public $title = "";
    public $route = "";
    public $list = "";

    public function run()
    {
        return $this->render('info-list',['title'=>$this->title, 'list'=>$this->list, 'route'=>$this->route]);
    }
}