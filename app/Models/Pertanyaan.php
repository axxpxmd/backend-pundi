<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;


class Pertanyaan extends Model
{
    protected $table = 'pertanyaan';
    protected $fillable = ['id', 'confirm_id', 'nama', 'email', 'pertanyaan', 'status', 'created_at', 'created_by', 'updated_at', 'updated_by'];

    public function confirm_by()
    {
        return $this->belongsTo(User::class, 'confirm_id');
    }
}
