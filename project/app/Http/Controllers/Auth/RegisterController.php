<?php

namespace App\Http\Controllers\Auth;

use App\ApplicationServices\UserApplicationService;
use App\Http\Controllers\Controller;

/**
 * Controller Class Register
 */
class RegisterController extends Controller {
  public function __construct(
    private UserApplicationService $userApplicationService
  ) {}

  /**
   * ユーザー登録
   * @todo POSTで値を受け取って、ユーザー登録処理を実行する
   */
  public function register() {
    $params = [
      'name' => 'test',
      'email' => 'user@example.com',
      'password' => '123456789abc',
    ];
    $user = $this->userApplicationService->registerUser($params);
    dd($user);
  }
}
