<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 6/28/19
 * Time: 3:18 PM
 */

namespace App\Service\AuthSaf;

use App\Common\Comment;
use App\Common\User;

class AuthSafV2Service implements AuthSafInterface
{

    public function checkPermissionDeleteComment(User $user, Comment $comment)
    {
        return false;
        // TODO: Implement checkPermissionDeleteComment() method.
    }

    public function checkUserAddComment(User $user, Comment $comment)
    {
        // TODO: Implement checkUserAddComment() method.
    }
}