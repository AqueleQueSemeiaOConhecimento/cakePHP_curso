<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\ORM\TableRegistry;

/**
 * Home Controller
 *
 */
class HomeController extends AppController
{
    public function index()
    {  /* 
            como renderizar uma view?
            views ficam em templates/NomeController/index
            layout fica em templates/layout/nomeLayout
        */

        $usersTable = TableRegistry::getTableLocator()->get('Users');
        $postsTable = TableRegistry::getTableLocator()->get('Posts');
        $rolesTable = TableRegistry::getTableLocator()->get('Roles');
        $roles = $rolesTable->find()->contain(['Abilities']);
        //$users = $usersTable->find()->all();

        // pegar os posts que contain relacionamento com Users
        // relacionamento belongTo
        $posts = $postsTable->find()->contain(['Users']);
        $users = $usersTable->find('all', ['limit' => 5, 'order' => 'id desc'])->where(['id >' => 5]);

        // relacionamento hasMany
        $users2 = $usersTable->find()->contain(['Posts']);


        // COMO FAZER O CADASTRO DE UM DADO NA TABELA COM ENTITY
        // Se eu passar o id vira um update
        // $userEntity = $usersTable->newEmptyEntity();
        // $userEntity->id = 21;
        // $userEntity->firstName = 'Matheus Empregado receba';
        // $userEntity->lastName = 'Araujo de Melo';
        // $userEntity->email = 'email@email';
        // $userEntity->password = password_hash('123', PASSWORD_DEFAULT);

        // $saved = $usersTable->save($userEntity);

 
        $name = 'Alexandre';
        $age = 41;

        // mandando as variaveis pra view Home/index
        $this->set(compact('posts', 'users2' ,'name', 'age', 'roles'));

    }
}
