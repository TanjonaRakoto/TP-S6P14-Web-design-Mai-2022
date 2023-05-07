<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';
    protected $primaryKey = 'id_news';
    public $timestamps = false;

    protected $fillable = [
        'id_news',
        'title_news',
        'summary_news',
        'date_news',
        'contains_news',
        'image_news'
    ];
}
