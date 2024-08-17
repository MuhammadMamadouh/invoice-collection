<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScoreCriteria extends Model
{
    use HasFactory;

    public $fillable = ['title', 'description', 'weight' , 'answer', 'score_id'];

    public function score()
    {
        return $this->belongsTo(Score::class, 'score_id');
    }
}
