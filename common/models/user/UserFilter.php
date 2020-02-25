<?php
namespace common\models\user;

use devskyfly\yiiModuleAdminPanel\models\contentPanel\FilterInterface;
use devskyfly\yiiModuleAdminPanel\models\contentPanel\FilterTrait;

/**
 * 
 * @author devskyfly
 */
class UserFilter extends CustomUser implements FilterInterface
{
    use FilterTrait;
    
    public function rules()
    {
        return [
            [["active", "username", "status", "created_at", "updated_at"], "string"]
        ];
    }
}

