<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class formCart extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'form_carts';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Userid', 'Product_id', 'Qty', 'Desc'];

    
}
