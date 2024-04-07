<?php

namespace App\Repositories;

use App\Models\photo_details;
use App\Repositories\BaseRepository;

class photo_detailsRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'gps_location',
        'status',
        'descripcion'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return photo_details::class;
    }
}
