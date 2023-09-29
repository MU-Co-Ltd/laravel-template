<?php

namespace App\Domain\Repositories;

use Illuminate\Database\Eloquent\Model;

/**
 * Repository Base  
 * Repository層 共通クラス
 */
class BaseRepository implements IBaseRepository {
  /**
   * 各Repositoryで使用するModel
   * @var Model
   */
  protected $model;

  public function __construct($model) {
    $this->model = $model;
  }
}
