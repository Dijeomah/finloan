<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;

    class OtherDetail extends Model
    {
        use HasFactory;

        protected $fillable = [
            'personal_detail_id',
            'property_address',
            'employment_status'
        ];

        public function personal_data(): BelongsTo
        {
            return $this->belongsTo(PersonalDetail::class, 'id');
        }
    }
