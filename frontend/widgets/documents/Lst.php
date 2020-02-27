<?php
namespace frontend\widgets\documents;

use DateTime;
use common\models\document\Document;
use common\models\news\Section;
use yii\base\Widget;
use yii\helpers\Url;

class Lst extends Widget
{
    public $section;
    public $list = [];
    public function init()
    {
        $items = Document::find()->where(['_section__id' => $this->section, 'active' => 'Y'])->all();
        foreach ($items as $item) {
            $this->list[] = [
                'date' => (new DateTime($item->create_date_time))->format('Y-m-d'),
                'name' => $item->name, 
                'url' => Url::toRoute(['/download/index', 'guid' => $item->extensions['file']['guid']])
            ];
        }
    }

    public function run()
    {
        $list = $this->list;
        $label = (Section::getById($this->section))->name;
        return $this->render('list', compact("list", "label"));
    }
}