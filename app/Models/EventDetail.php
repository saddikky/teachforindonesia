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

<<<<<<< HEAD
    protected $primaryKey = 'event_id';
    public $incrementing = true;
    protected $keyType = 'int';

=======
>>>>>>> fc48673907dbea020c02c8d0370ee6d0d7cebc9e
    public function progressDetails()
    {
        return $this->hasMany(ProgressDetail::class, 'cb_type', 'event_id');
    }
}
