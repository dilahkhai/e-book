<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';

    protected $fillable = [
        'title', 'file', 'image'
    ];

    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }

    public function code()
    {
        return $this->belongsTo(BookCode::class);
    }

    public function downloadedBook()
    {
        return $this->belongsTo(DownloadedBook::class);
    }
}
