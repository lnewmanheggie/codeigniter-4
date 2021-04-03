<?php


namespace App\Models;


use CodeIgniter\Model;

class UserModel extends Model {
  protected $table         = 'users';
  protected $returnType    = 'App\Entities\User';
  protected $useTimestamps = true;

  /**
   * @var string[]
   */
  protected $allowedFields = [
    'ip_address',
    'username',
    'password',
    'salt',
    'email',
    'activation_code',
    'forgotten_password_code',
    'forgotten_password_time',
    'remember_code',
    'created_at',
    'last_login',
    'active',
    'first_name',
    'last_name',
  ];

}