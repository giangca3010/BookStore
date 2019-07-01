<?php
namespace App\Http\Controllers\Home;

use App\Common\Comment;
use App\Common\User;
use App\Http\Controllers\Controller;
use App\Providers\AuthBaseServiceProvider;
use App\Service\Auth\AuthService;
use App\Service\Auth\AuthServiceInterface;
use App\Service\AuthSaf\AuthSafInterface;

class HomeController extends Controller
{

    private $authService;

    public function index(AuthSafInterface $authSaf)
    {
        $user = new User();
        $user->setUsername('tienvm')
             ->setName('aa')
        ;

        $comment = new Comment();
        $isPermissionDeleteComment = $authSaf->checkPermissionDeleteComment($user, $comment);
        dd($isPermissionDeleteComment);

        dd(1);
    }

}