<?php namespace app\Modules;

class View 
{
    public static function display($view, $data = [])
    {
        $view = __DIR__ . '/../Views/'.$view.'.php';
        //http://php.net/extract
        extract($data);

        //rendering view using output bufering
        //
        ob_start();
        include $view;
        return ob_get_clean();
    }
}