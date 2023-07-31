<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FreightAnnouncement extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'freight_announcement';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fk_shipper_id',
        'origin',
        'destination',
        'limit_date',
        'weight',
        'volume',
        'description',
    ];

    /**
     * Get the shipper for freight announcement.
     */
    public function Shipper()
    {
        return $this->belongsTo(Shipper::class, 'fk_shipper_id');
    }
}

