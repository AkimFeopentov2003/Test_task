<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankAccount extends Model
{
    use HasFactory;

    protected $fillable = ['account_number', 'bank_name', 'balance'];

    public function owner() {
        return $this->morphTo();
    }

    public function deposit(float $amount): void {
        $this->increment('balance', $amount);
    }

    public function withdraw(float $amount): bool {
        if ($this->balance >= $amount) {
            $this->decrement('balance', $amount);
            return true;
        }
        return false;
    }

}
