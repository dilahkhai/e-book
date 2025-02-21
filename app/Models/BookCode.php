<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class BookCode extends Model
{
    use HasFactory;

    protected $table = 'book_codes';

    protected $fillable = [
        'books_id', 'agent_id', 'code'
    ];

    public function book()
    {
        return $this->belongsTo(Book::class, 'books_id');
    }

    public function agent()
    {
        return $this->belongsTo(Agent::class, 'agent_id');
    }
}
