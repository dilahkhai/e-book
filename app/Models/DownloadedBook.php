<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DownloadedBook extends Model
{
    use HasFactory;

    protected $table = 'downloaded_books';

    protected $fillable = [
        'books_id', 'agents_id', 'code_id', 'cust_name', 'cust_org', 'cust_email', 'downloaded_date'
    ];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }

    public function code()
    {
        return $this->belongsTo(BookCode::class);
    }
}
