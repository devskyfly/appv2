<?php
namespace common\models\document;

class DocumentFilter extends Document
{
    use FilterTrait;
    
    public function rules()
    {
        return [[["data","active", "name"],"string"]];
    }

}