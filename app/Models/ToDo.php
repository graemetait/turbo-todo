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

    protected function brodcastDefaultStreamables(bool $inserting = false)
    {
        if ($inserting) {
            return [
                new Channel('to_dos')
            ];
        }

        return [
            new Channel('App.Models.ToDo.' . $this->id)
        ];
    }
}
