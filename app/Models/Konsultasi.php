<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Konsultasi extends Model
{
    protected $table = 'konsultasi';
    protected $fillable = ['id', 'nama', 'email', 'confirm_id', 'konsultasi', 'status', 'created_at', 'created_by', 'updated_at', 'updated_by'];

    public function confirm_by()
    {
        return $this->belongsTo(User::class, 'confirm_id');
    }
}
