<?php
/**
 * Created by PhpStorm.
 * User: emerson
 * Date: 30/11/15
 * Time: 21:05
 */

namespace App\Http\Controllers;


class UsersController extends Controller{

    Public function getIndex()
    {

        $result=\DB::table('users')->get();
        dd($result);
        return $result;
    }

}