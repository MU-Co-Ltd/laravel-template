<?php

namespace App\Domain\Services;

use App\Domain\Repositories\IUserRepository;

/**
 * Service Class Auth
 */
class AuthService extends BaseService {
  public function __construct(private IUserRepository $userRepository) {}
}
