<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address', 'phone', 'client_code'];

    public function bankAccounts() {
        return $this->morphMany(BankAccount::class, 'owner');
    }

    public function getBalance() {
        return $this->bankAccounts()->sum('balance');
    }

    public function getBankAccounts(){
        return $this->bankAccounts()->get();
    }
}
