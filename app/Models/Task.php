<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters): void
    {
        $query->when($filters['search'] ?? false,
            fn($query, $search) => $query->where(
                fn($query) => $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('description', 'like', '%' . $search . '%')
            )
        );
        $query->when($filters['status'] ?? false, //todo : this part of your query looks to be unnecessary or even wrong since you have only 2 types of statuses
            fn($query, $status) => $query->where(
                fn($query) => $query->where('status', 'like', $status)
            )
        );
    }

    public function user() // todo: you should provide return type to all of your methods.
    {
        return $this->belongsTo(User::class); // todo : you haven't used this method, se remove it.
    }
}
