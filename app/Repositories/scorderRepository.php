<?php

namespace App\Repositories;

use App\Models\scorder;
use App\Repositories\BaseRepository;

/**
 * Class scorderRepository
 * @package App\Repositories
 * @version March 16, 2026, 4:04 pm UTC
*/

class scorderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'orderdate',
        'deliverystreet',
        'deliverycity',
        'deliverycounty',
        'ordertotal'
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
        return scorder::class;
    }
}
