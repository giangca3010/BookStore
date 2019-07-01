<?php
namespace App\Service\Auth;

use App\Common\Comment;
use App\Common\User;

interface AuthServiceInterface
{
    public function login(User $user);

    public function checkPermissionRemoveComment(User $user, Comment $comment);
}