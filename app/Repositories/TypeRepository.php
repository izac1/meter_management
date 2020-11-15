<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Models\Type;

class TypeRepository extends BaseRepository
{
    public function __construct(Type $type)
    {
        parent::__construct($type);
    }

    public function create(array $attributes)
    {
        $result =  $this->model->create($attributes);

        return $result;
    }
}
