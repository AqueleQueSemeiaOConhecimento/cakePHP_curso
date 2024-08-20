<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\Datasource\ConnectionManager;
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
            views ficam em templates/NomeController/nomeFuncao
            layout fica em templates/layout/nomeLayout
        */

        $usersTable = TableRegistry::getTableLocator()->get('Users');
        $users = $usersTable->find()->all();
        $name = 'Alexandre';
        $age = 41;

        // mandando as variaveis pra view Home/index
        $this->set(compact('users', 'name', 'age'));

    }
}
