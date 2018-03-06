<?php namespace app\Controllers;

use app\Models\DirectoryModel as Directory;
use app\Modules\View;

class DirectoriesController {
    
	public function index(){
        $directory = new Directory();
        $list = $directory->list();
        $data = [
            'list' => $list
        ];
        return View::display('DirectoryList', $data);
    }
    
    /**
     * access using sample path /directories/detail/12
     * @param $params array
     */
    public function detail($params){
		return '<h1>Directories Detail of id : '.$params[0].'</h1>';
	}
	
}