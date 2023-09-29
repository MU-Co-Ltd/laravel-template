<?php

namespace App\Domain\Repositories;

use App\Domain\Entities\User;

/**
 * Repository Class User
 */
class UserRepository extends BaseRepository implements IUserRepository {
  public function __construct(User $user) {
    parent::__construct($user);
  }

  /**
   * ユーザー新規登録
   * @param array $attributes
   * @return User|null
   */
  public function create(array $attributes): ?User {
    try {
      $user = $this->model->create($attributes);
      return $user;
    } catch (\Exception $e) {
      return null;
    }
  }
}
