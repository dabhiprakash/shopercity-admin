<?php
namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    public function all()
    {
        return User::latest()->paginate(10);
    }

    public function find($id)
    {
        return User::findOrFail($id);
    }
}
