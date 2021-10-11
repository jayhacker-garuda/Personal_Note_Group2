<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'note_category_id', 'user_id', 'title', 'description',
    ];


    public function noteCategory()
    {
        return $this->hasMany(NoteCategory::class);
    }
}