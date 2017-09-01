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
    
    public function detail(){
		return '<h1>Directories Detail</h1>';
	}
	
}