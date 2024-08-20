<?php
declare(strict_types=1);

namespace App\Controller;

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

        $name = 'Alexandre';
        $age = 41;

        // mandando as variaveis pra view Home/index
        $this->set(compact('name', 'age'));

    }
}
