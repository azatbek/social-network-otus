<?php
namespace App\Repositories;

use App\Entity\User;
use Illuminate\Support\Facades\DB;

class UserRepository
{
    public function create(User $user): bool
    {
        return DB::insert(
            'INSERT INTO users(`name`, `surname`, `email`, `sex`, `password`, `city`, `birthdate`)'
            . 'VALUES (?, ?, ?, ?, ?, ?, ?)',
            [$user->getName(), $user->getSurname(), $user->getEmail(), $user->getSex(), $user->getPassword(), $user->getCity(), $user->getBirthdate()]
        );
    }
}

