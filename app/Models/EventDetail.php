<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'e_name',
        'e_type',
        'organizer',
        'role',
        'open_reg',
        'close_reg',
        'report_deadline',
        'e_desc',
        'notes',
        'cb_type',
    ];

    protected $primaryKey = 'event_id';
    public $incrementing = true;
    protected $keyType = 'int';

    public function progressDetails()
    {
        return $this->hasMany(ProgressDetail::class, 'cb_type', 'event_id');
    }
}
