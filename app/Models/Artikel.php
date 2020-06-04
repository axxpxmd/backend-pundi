<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Models
use App\User;

class Artikel extends Model
{
    protected $table    = 'artikel';
    protected $fillable = ['id', 'judul', 'kategori_id', 'sub_kategori_id', 'penulis_id', 'gambar', 'isi', 'tag', 'artikel_view', 'status', 'created_at', 'updated_at', 'created_by', 'updated_by'];

    public function user()
    {
        return $this->belongsTo(User::class, 'penulis_id');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
}
