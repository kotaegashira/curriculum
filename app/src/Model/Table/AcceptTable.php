<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class AcceptTable extends Table
{
    public function initialize(array $config)
    {
        $this->belongsTo('Product'); // 追加
        $this->belongsTo('Customer');
    }
}