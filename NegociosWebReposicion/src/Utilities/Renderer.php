<?php
namespace App\Utilities;
class Renderer {
    public static function render($template, $data = []) {
        extract($data);
        include $template;
    }
}
?>