<?php 
namespace common\models\user;

use yii\helpers\ArrayHelper;
use devskyfly\yiiModuleAdminPanel\models\contentPanel\AbstractItemExtension;

class UserInfo extends AbstractItemExtension
{
    protected static function itemCls()
    {
        return CustomUser::class;
    }

    public function rules()
    {
        $rules = parent::rules();
        $new = [
            [["name"], "string"]
        ];
        
        return ArrayHelper::merge($rules, $new);
    }
}