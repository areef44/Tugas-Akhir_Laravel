<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Police extends Model
{
    use HasFactory;

    protected $table = 'polices';

    protected $guarded  = ['id'];

    public function sectors()
    {
        return $this->belongsTo(Sector::class, 'id_sector');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function (Police $pengguna) {
            $pengguna->password = Hash::make($pengguna->password);
        });

        static::updating(function (Police $pengguna) {
            if ($pengguna->isDirty(["password"])) {
                $pengguna->password = Hash::make($pengguna->password);
            }
        });
    }

    public function report()
    {
        return $this->hasOne('use App\Models\Report', 'id_user');
    }
}
