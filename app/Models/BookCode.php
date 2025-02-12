<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookCode extends Model
{
    use HasFactory;

    protected $table = 'book_codes';

    protected $fillable = [
        'books_id', 'agent_id', 'code'
    ];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function Agent()
    {
        return $this->belongsTo(Agent::class);
    }
}
