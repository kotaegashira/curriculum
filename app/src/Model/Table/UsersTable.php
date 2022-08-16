<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{
    public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('username', 'このフィールドに入力してください。')
            ->add('password', [
                'length' => [
                    'rule' => ['minLength', 8],
                    'message' => 'パスワードは 8 文字以上必要です。'
                ]
            ]);
    }
}