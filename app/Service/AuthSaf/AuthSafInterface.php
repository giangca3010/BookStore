<?php
namespace App\Service\AuthSaf;

use App\Common\Comment;
use App\Common\User;

interface AuthSafInterface
{
    public function checkPermissionDeleteComment(User $user, Comment $comment);
    public function checkUserAddComment(User $user, Comment $comment);
}