<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamLists extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'title', 'link_yt', 'link_twitter', 'link_ig', 'deskripsi'];
}
