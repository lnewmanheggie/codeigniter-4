<?php


namespace App\Entities;


use CodeIgniter\Entity;
use CodeIgniter\I18n\Time;

/**
 * Class User
 *
 * @package App\Entities
 */
class User extends Entity {

  /**
   * @var string
   */
  protected $table = 'users';

  protected $attributes = [
    'id' => NULL,
    'name' => NULL,        // Represents a username
    'email' => NULL,
    'password' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ];

  protected $dates = ['created_at', 'updated_at', 'deleted_at'];




  /**
   * @var string
   */
  protected $returnType = 'App\Entities\User';

  /**
   * @var bool
   */
  protected $useTimestamps = TRUE;

  protected $userModel = 'App\Model\UserModel';

  /**
   * @param string $pass
   *
   * @return $this
   */
  public function setPassword(string $pass): User {
    $this->attributes['password'] = password_hash($pass, PASSWORD_BCRYPT);

    return $this;
  }


  /**
   * @param string $dateString
   *
   * @return $this
   * @throws \Exception
   */
  public function setCreatedAt(string $dateString): User {
    $this->attributes['created_at'] = new Time($dateString, 'UTC');

    return $this;
  }

  /**
   * @param string $format
   *
   * @return string
   * @throws \Exception
   */
  public function getCreatedAt(string $format = 'Y-m-d H:i:s'): string {
    // Convert to CodeIgniter\I18n\Time object
    $this->attributes['created_at'] = $this->mutateDate($this->attributes['created_at']);

    $timezone = $this->timezone ?? app_timezone();

    $this->attributes['created_at']->setTimezone($timezone);

    return $this->attributes['created_at']->format($format);
  }

}