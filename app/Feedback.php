<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    const FEEDBACK_IMG_STORAGE = 'feedback-img';

    public $timestamps = true;
    public $table = 'feedbacks';

    protected $fillable = [
        'user_id', 'body', 'stars',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getFilePathFeedbackAttribute()
    {
        return 'storage/' . self::FEEDBACK_IMG_STORAGE . '/' . $this->file;
    }
}
