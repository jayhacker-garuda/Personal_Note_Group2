<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'note_category_id','user_id', 'todo', 'todo_date'
    ];


    public function noteCategory()
    {
        return $this->belongsTo(NoteCategory::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}