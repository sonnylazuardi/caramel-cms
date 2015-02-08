<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Markdown;

class Post extends Model {

    public $fillable = [
        'title',
        'slug',
        'html',
        'description',
    ];

	public function getTimestampAttribute()
    {
        return \Carbon\Carbon::createFromTimeStamp(strtotime($this->created_at))->diffForHumans();
    }

    public function scopeNewestFirst($query)
    {
        return $query->orderBy('created_at', 'DESC');
    }

    public function getContentAttribute()
    {
        return Markdown::parse($this->html);
    }

}
