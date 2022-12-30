<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $table = 'reports';

    protected $guarded  = ['id'];
    protected $primaryKey = 'id';


    public function categories()
    {
        return $this->belongsTo(Category::class, 'id_category');
    }
    public function members()
    {
        return $this->belongsTo(Member::class, 'id_user');
    }
    public function polices()
    {
        return $this->belongsTo(Police::class, 'id_police');
    }
}
