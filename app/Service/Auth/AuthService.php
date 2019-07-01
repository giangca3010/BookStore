<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 6/28/19
 * Time: 2:16 PM
 */

namespace App\Service\Auth;


use App\Common\Comment;
use App\Common\User;

class AuthService implements AuthServiceInterface
{

    public function login(User $user)
    {
        dd(100);
        // TODO: Implement login() method.
    }

    public function checkPermissionRemoveComment(User $user, Comment $comment)
    {
        dd(1222);
        // TODO: Implement checkPermissionComment() method.
    }
}