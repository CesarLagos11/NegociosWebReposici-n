<?php
namespace App\Controllers;
class PublicController implements IController {
    public function handleRequest() {
        echo 'Public Page';
    }
}
?>