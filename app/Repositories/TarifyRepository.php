<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Models\Tarify;
use App\Models\Type;

class TarifyRepository extends BaseRepository
{
    public function __construct(Tarify $tarify)
    {
        parent::__construct($tarify);
    }

    public function create(float $rate, Type $type)
    {
        $this->model->rate =  $rate;
        $this->model->type_id = $type;

        $this->model->save();

        return $this->model;
    }
}
