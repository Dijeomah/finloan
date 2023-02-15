<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\HasOne;

    class PersonalDetail extends Model
    {
        use HasFactory;

        protected $fillable = [
            'name',
            'email',
            'phone_number',
            'marital_status',
            'birth_date',
            'tax_id',
        ];

        public function loan_data(): HasOne
        {
            return $this->hasOne(LoanDetail::class, 'personal_detail_id');
        }

        public function other_data(): HasOne
        {
            return $this->hasOne(OtherDetail::class, 'personal_detail_id');
        }


    }
