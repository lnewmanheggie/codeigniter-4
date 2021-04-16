<?php


namespace App\Models;


class CommonModel extends \CodeIgniter\Model {

  protected $table = 'common';

  protected $useAutoIncrement = TRUE;

  protected $returnType = 'App\Entities\Common';

  protected $useSoftDeletes = TRUE;

  protected $allowedFields = [
    'category_id',
    'subcategory_id',
    'name',
    'genus',
    'description',
    'other_names',
    'sunlight',
  ];

  protected $useTimestamps = true;
  protected $createdField = 'rec_created';
  protected $updatedField = 'rec_modified';
  protected $deletedField = 'rec_deleted';

}