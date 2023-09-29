<?php

namespace App\Domain\Repositories;

use App\Domain\Entities\User;

/**
 * Repository Interface User
 */
interface IUserRepository extends IBaseRepository {
  /**
   * ユーザー新規登録
   * @param array $attributes
   * @return User|null
   */
  public function create(array $attributes): ?User;
}
