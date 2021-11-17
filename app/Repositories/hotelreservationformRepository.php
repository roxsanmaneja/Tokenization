<?php

namespace App\Repositories;

use App\Models\hotelreservationform;
use App\Repositories\BaseRepository;

/**
 * Class hotelreservationformRepository
 * @package App\Repositories
 * @version October 26, 2021, 7:03 pm UTC
*/

class hotelreservationformRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fullname',
        'address',
        'Telephone',
        'Email',
        'Roomtype'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return hotelreservationform::class;
    }
}
