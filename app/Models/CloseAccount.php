<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CloseAccount extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'branch_id',
        'count_2000',
        'count_500',
        'count_200',
        'count_100',
        'count_50',
        'count_20',
        'count_10',
        'count_5',
        'count_2',
        'count_1',
        'soft_delete'
    ];

    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_id');
    }
}
