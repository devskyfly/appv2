<?php
namespace frontend\widgets\infoList;

use DateTime;
use yii\bootstrap\Widget;
use yii\helpers\Url;

class InfoList extends Widget
{
    public $entityCls;
    public $sectionId;
    public $title = "";
    public $list = [];
    public $limit = 5;
    public $template = 'preview';

    public function init()
    {
        parent::init();
        $cls = $this->entityCls;
        $condition = ['active' => 'Y'];
        if (!empty($this->sectionId)) { 
            $condition['_section__id'] = $this->sectionId;
        }
        $query = $cls::find()
        ->where($condition);

        $items = $query->all();

        foreach ($items as $item) {
            $dateTime = new DateTime($item->create_date_time);
            $format = "Y-m-d";
            $this->list[] = [
                "date" => $dateTime->format($format), 
                "name" => $item->name, 
                "route" => Url::toRoute(['download', 
                'guid' => $item->extensions['file']->guid])
            ];
        }
    }

    public function run()
    {
        return $this->render('info-list',[
            'title'=>$this->title, 
            'list'=>$this->list, 
        ]);
    }
}