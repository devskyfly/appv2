<?php
namespace common\models\offer;

use devskyfly\yiiModuleAdminPanel\models\contentPanel\FilterInterface;
use devskyfly\yiiModuleAdminPanel\models\contentPanel\FilterTrait;

class OfferFilter extends Offer implements FilterInterface
{
    use FilterTrait;
    
    public function rules()
    {
        return [[["active"],"string"]];
    }

}