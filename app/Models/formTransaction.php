<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class formTransaction extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'form_transactions';

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
    protected $fillable = ['Userid', 'Transactionnumber', 'Total_berat', 'Phone', 'No_resi', 'Kurir', 'Kota', 'Ongkir', 'Total', 'Bukti_transaksi', 'Status', 'Date', 'Address'];

    
}
