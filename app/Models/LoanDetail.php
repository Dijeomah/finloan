<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LoanDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'personal_detail_id' ,
        'loan_amount' ,
        'monthly_income' ,
        'loan_purpose' ,
        'loan_period' ,
    ];

    public function personal_data(): BelongsTo
    {
        return $this->belongsTo(PersonalDetail::class, 'id');
    }
}
