<?php
namespace common\models\order;

use devskyfly\yiiModuleAdminPanel\models\contentPanel\FilterInterface;
use devskyfly\yiiModuleAdminPanel\models\contentPanel\FilterTrait;

class OrderFilter extends Order implements FilterInterface
{
    use FilterTrait;
    
    public function rules()
    {
        return [[["active"],"string"]];
    }

}