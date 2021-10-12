<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoteCategory extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name'  
    ];


    public function personal(){
        
        return $this->hasMany(Personal::class, 'note_category_id');
    }
    
    public function reminder(){
        
        return $this->hasMany(Personal::class, 'note_category_id');
    }
    
    public function todo(){
        
        return $this->hasMany(Personal::class, 'note_category_id');
    }
}