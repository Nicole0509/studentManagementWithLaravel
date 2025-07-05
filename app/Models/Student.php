<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'student';

    protected $hidden = [
        'name'
    ];

    // apparently returning is optional both scope functions are working correctly

    public function scopeMale($query){
        return $query->where('gender','M')
        ->where('age', 25)
        ;
    }

    public function scopeFemale($query, $age = 25){
        $query->where('gender','F')
        ->where('age', $age)
        ;
    }
}
