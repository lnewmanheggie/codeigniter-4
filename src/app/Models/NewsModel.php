<?php


namespace App\Models;


class NewsModel extends \CodeIgniter\Model {
  protected $table = 'news';

  protected $allowedFields = ['title', 'slug', 'body'];

  public function getNews($slug = FALSE){
    if($slug=== FALSE){
      return $this->findAll();
    }
    return $this->asArray()
      ->where(['slug'=>$slug])
      ->first();
  }
}