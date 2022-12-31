<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Member extends Model
{
    use HasFactory;

    protected $table = 'members';

    protected $guarded  = ['id'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function (Member $pengguna) {
            $pengguna->password = Hash::make($pengguna->password);
        });

        static::updating(function (Member $pengguna) {
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
