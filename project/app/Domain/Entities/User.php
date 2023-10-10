<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * Entity Class User
 */
class User extends Authenticatable {
  use Notifiable, HasFactory;

  protected $fillable = [
    'name',
    'email',
    'email_verified_at',
    'password',
  ];

  protected $hidden = [
    'password',
    'remember_token',
  ];
}
