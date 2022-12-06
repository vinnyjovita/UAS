<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class formProduct extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'form_products';

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
    protected $fillable = ['Userid', 'Kategori', 'Isi', 'Ukuran', 'Expired', 'Berat', 'Deskripsi', 'Nama', 'Foto', 'Created_at', 'Created_by', 'Stock', 'Harga'];

    
}
