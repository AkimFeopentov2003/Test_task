<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address', 'phone', 'supplier_code'];

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
