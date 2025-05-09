<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['name', 'email'];

    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function expenses()
    {
        return $this->hasManyThrough(Expense::class, User::class);
    }
}


