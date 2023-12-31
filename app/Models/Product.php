<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function scopeFilter($query)
    {
        if (request('search')) {
            $query->where('nama_product', 'like', '%' . request('search') . '%');
            }
    }
}
