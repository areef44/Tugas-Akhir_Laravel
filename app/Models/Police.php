<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Police extends Model
{
    use HasFactory;

    protected $table = 'polices';

    protected $guarded  = ['id'];

    public function sectors()
    {
        return $this->belongsTo(Sector::class, 'id_sector');
    }
}
