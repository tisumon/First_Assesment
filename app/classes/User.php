<?php


namespace App\classes;


class User
{
    public function getAllUser()
    {
        return [
            0   =>  [
                'id'    =>1,
                'name'  =>'Tareq Khan',
                'email' =>'admin@gmail.com',
                'password'  => '123456'
            ],
            1   =>  [
                'id'    =>2,
                'name'  =>'Rahat Khan',
                'email' =>'rahat@gmail.com',
                'password'  => '111222'
            ],
            2   =>  [
                'id'    =>3,
                'name'  =>'Shabuddin Khan',
                'email' =>'shabuddin@gmail.com',
                'password'  => '123456'
            ],
        ];
    }

}