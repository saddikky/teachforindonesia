<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgressDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'nim',
        'cb_type',
        'status',
        'leader_nim',
        'lecturer_code',
        'lecturer',
        'project_name',
        'project_location',
        'category',
        'scale',
        'report',
        'video',
        'report_link',
        'video_link',
    ];

    public function eventDetail()
    {
        return $this->belongsTo(EventDetail::class, 'cb_type', 'event_id'); // Adjust as necessary
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'nim', 'nim'); // Foreign key 'user_id' in progress_details, primary key 'id' in users table
    }

}
