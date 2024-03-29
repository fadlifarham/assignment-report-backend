<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssignmentReport extends Model
{
    protected $table = 'assignment_report';

    protected $fillable = [
        'assignment_id', 'assignment_type', 'time_record_id', 'customer_info_id', 'sppd_status',
        'day_number', 'brief_work', 'bai', 'tnc', 'photos', 'other', 'result'
    ];

    public function assignment() {
        return $this->belongsTo(Assignment::class);
    }

    public function time_record() {
        return $this->belongsTo(TimeRecord::class);
    }
}
