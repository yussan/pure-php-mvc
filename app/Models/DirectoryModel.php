<?php namespace app\Models;

class DirectoryModel 
{
    public function list()
    {
        return [
            [
                'id' => 1,
                'name' => 'new england'
            ],
            [
                'id' => 2,
                'name' => 'new jersey'
            ],
        ];
    }
}