<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\ORM\TableRegistry;

/**
 * About Controller
 *
 */
class AboutController extends AppController
{
    public function index() {
        // Paginação
        $tableUsers = TableRegistry::getTableLocator()->get("Users");
        $query = $tableUsers->find()->contain(['Posts']);
// nao esqueça do helpPaginator em AppView
        $users = $this->paginate($query, [
            'limit' => 15,
        ]);


        $this->set(compact('users'));

    }
}
