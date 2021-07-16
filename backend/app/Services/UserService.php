<?php

namespace App\Services\User;

use App\Models\User;

class UserService
{
    /**  @var App\Models\User user */
    private $user = null;

    /**
     * Constructor
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * ユーザー一覧取得
     * @param int $clientId クライアントID
     */
    public function getList(int $clientId)
    {
        // $users = $this->user->get()->toArray();
        // return $users;
        echo 'test';
    }
}
