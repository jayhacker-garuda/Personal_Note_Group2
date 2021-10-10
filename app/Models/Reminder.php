<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'note_category_id', 'user_id', 'reminder_date', 'remind_about'
    ];

    public function noteCategory()
    {
        return $this->hasMany(NoteCategory::class);
    }
}