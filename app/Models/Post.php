<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use App\Traits\HasUuid;

class Post extends Model
{
    use HasFactory;
    use HasUuid;
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'user_id',
        'text',
        'image_link',
        'like_count'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
