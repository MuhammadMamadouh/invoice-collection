<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;

    public $fillable = ['title', 'description'];

    public function scoreCriterias()
    {
        return $this->hasMany(ScoreCriteria::class, 'score_id');
    }
}
