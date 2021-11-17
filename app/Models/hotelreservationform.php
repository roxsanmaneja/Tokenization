<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class hotelreservationform
 * @package App\Models
 * @version October 26, 2021, 7:03 pm UTC
 *
 * @property string $fullname
 * @property string $address
 * @property integer $Telephone
 * @property string $Email
 * @property string $Roomtype
 */
class hotelreservationform extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'hotelreservationform';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'fullname',
        'address',
        'TelephoneNo',
        'Email',
        'Accompanyingperson/s',
        'Roomtype'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fullname' => 'string',
        'address' => 'string',
        'TelephoneNo' => 'integer',
        'Email' => 'string',
        'Accompanyingperson/s' => 'string',
        'Roomtype' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'fullname' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'TelephoneNo' => 'nullable|integer',
        'Email' => 'nullable|string|max:255',
        'Roomtype' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
