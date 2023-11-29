<?php

namespace App\Models;

use Illuminate\Broadcasting\Channel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tonysm\TurboLaravel\Models\Broadcasts;

class ToDo extends Model
{
    use HasFactory;
    use Broadcasts;

    protected $broadcasts = true;

    public $fillable = ['description'];

    public function broadcastsTo()
    {
        return new Channel('general');
    }
}
