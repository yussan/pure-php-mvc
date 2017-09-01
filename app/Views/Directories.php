<?php namespace app\Models;

class DirectoriesModel
{
    public function list()
    {
        return [
            [
                id => 1,
                name => 'New England'
            ],
            [
                id => 2,
                name => 'New Jersey'
            ]
        ]
    }
}