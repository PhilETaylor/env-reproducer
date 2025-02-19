<?php

namespace App\Controller;

use Symfony\Component\Routing\Attribute\Route;

class TestController
{
    #[Route('/')]
    public function number()
    {
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        echo '<pre>';
        echo '<h1>variables_order = '.ini_get('variables_order').'</h1>';
        var_dump($_ENV);

        phpinfo();
        die;
    }
}
