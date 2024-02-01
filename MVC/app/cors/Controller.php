<?php

class controller
{
    public function view($name)
    {
        $viewsDirectory = __DIR__ . '/../../views/';
        $filename = $viewsDirectory . $name . '.view.php';

        if (file_exists($filename)) {
            require $filename;
        } else {
            $filename = $viewsDirectory . '404.view.php';
            require $filename;
        }
    }
}
