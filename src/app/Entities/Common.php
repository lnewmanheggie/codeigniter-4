<?php


namespace App\Entities;


class Common extends \CodeIgniter\Entity {
  /**
   * @param string $format
   *
   * @return string
   * @throws \Exception
   */
  public function getCreatedAt(string $format = 'Y-m-d H:i:s'): string {
    // Convert to CodeIgniter\I18n\Time object
    $this->attributes['rec_created'] = $this->mutateDate($this->attributes['rec_created']);

    $timezone = $this->timezone ?? app_timezone();

    $this->attributes['rec_created']->setTimezone($timezone);

    return $this->attributes['rec_created']->format($format);
  }
}