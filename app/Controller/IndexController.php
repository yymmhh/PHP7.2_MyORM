<?php
/**
 * Created by PhpStorm.
 * User: 031
 * Date: 2018/7/4
 * Time: 16:30
 */

namespace app\Controller;

use app\Model\Post;
use app\Model\User;
use app\Model\User_Info;
use app\Model\Zan;
use wlphp\DB\Test;

class IndexController
{

    public function __construct()
    {
//        echo __DIR__;

    }


    public function find()
    {
//        $zans= Zan::all()->hasMany(User::class,["id","user_id"]);
        $post = User::all()->HasMany(User_Info::class, ['id', 'user_id'])->get();
//        $post=User::all()->get();
//
        dd($post);

    }
}