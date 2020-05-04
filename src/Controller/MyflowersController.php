<?php

declare(strict_types=1);

namespace App\Controller;

use CAKE\ORM\TableRegistry;

class MyflowersController extends AppController
{
    public function show()
    {

        $fiori = TableRegistry::getTableLocator()->get("Flowers");

        $query = $fiori->find("all", [

            "contain" => [
                "Occasions"
            ]

        ]);
        /*
        echo "<pre>";
        foreach ($query as $fiore) {
        var_dump($fiore);
        }
        */

        $this->set("fiorellini", $query);

        //echo "qualcosa"; prova
    }
}
