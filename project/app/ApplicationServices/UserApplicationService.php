<?php

namespace App\ApplicationServices;

use App\Domain\Repositories\IUserRepository;
use Illuminate\Support\Facades\Hash;

/**
 * Application Service Class User
 */
class UserApplicationService extends BaseApplicationService {
  public function __construct(
    private IUserRepository $userRepository
  ) {
    parent::__construct();
  }

  /**
   * ユーザー新規登録
   * @param array $params
   * @return \App\Domain\Entities\User|null
   */
  public function registerUser(array $params) {
    // $paramsからuser作成に必要な値を取り出す
    $userAttributes = [
      'name' => $params['name'],
      'email' => $params['email'],
      'password' => Hash::make($params['password']),
    ];
    $user = $this->userRepository->create($userAttributes);
    return $user;
  }
}
