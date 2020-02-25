<?php
namespace common\models\news;

use devskyfly\yiiModuleAdminPanel\models\contentPanel\FilterInterface;
use devskyfly\yiiModuleAdminPanel\models\contentPanel\FilterTrait;

class NewsFilter extends News implements FilterInterface
{
    use FilterTrait;
    
    public function rules()
    {
        return [[["active", "name"],"string"]];
    }

}