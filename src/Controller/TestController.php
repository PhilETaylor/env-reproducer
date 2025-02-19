<?php
namespace App\Controller;

use Symfony\Component\Routing\Attribute\Route;

class TestController
{
    #[Route('/')]
    public function number()
    {
        error_reporting(E_ALL);
        ini_set('display_errors',1);
        echo '<pre>';
var_dump($_ENV);
die;
    }
}
