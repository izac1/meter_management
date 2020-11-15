<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Models\Pokazanie;

class PokazanieRepository extends BaseRepository
{
    public function __construct(Pokazanie $pokazanie)
    {
        parent::__construct($pokazanie);
    }
}
