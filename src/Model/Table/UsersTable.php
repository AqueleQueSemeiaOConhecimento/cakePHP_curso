<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('users'); // Nome da tabela no banco de dados
        $this->setDisplayField('firstName'); // Campo a ser exibido em listas e relatórios
        $this->setPrimaryKey('id'); // Nome da coluna da chave primária
        
        // Configura associações aqui, se houver
        // Exemplo: $this->belongsTo('Roles');
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create'); // Permite que o campo 'id' seja vazio na criação

        $validator
            ->scalar('firstName')
            ->maxLength('firstName', 100)
            ->requirePresence('firstName', 'create')
            ->notEmptyString('firstName');

        $validator
            ->scalar('lastName')
            ->maxLength('lastName', 100)
            ->requirePresence('lastName', 'create')
            ->notEmptyString('lastName');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email')
            ->add('email', 'unique', [
                'rule' => 'validateUnique',
                'provider' => 'table',
                'message' => 'This email is already in use.'
            ]);

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->requirePresence('password', 'create')
            ->notEmptyString('password');

        $validator
            ->boolean('status')
            ->requirePresence('status', 'create')
            ->notEmptyString('status');

        return $validator;
    }
}
