<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class BaseRepository
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function find(int $id)
    {
        return $this->model->findOrFail($id)->toArray();
    }

    public function update(int $id, array $attributes)
    {
        return $this->model->findOrFail($id)->update($attributes);
    }

    public function delete(int $id)
    {
        return $this->model->findOrFail($id)->delete();
    }
}
