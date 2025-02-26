@extends('layouts.app')
@section('content')
    <h2>Пример классов если бы реализовывал без фраймворка</h2>
    <pre>
    class BankAccount {
        protected string $accountNumber;
        protected string $bankName;
        protected float $balance;

        public function __construct(string $accountNumber, string $bankName, float $balance = 0.0) {
            $this->accountNumber = $accountNumber;
            $this->bankName = $bankName;
            $this->balance = $balance;
        }

        public function deposit(float $amount): void {
            if ($amount > 0) {
                $this->balance += $amount;
            }
        }

        public function withdraw(float $amount): bool {
            if ($amount > 0 && $amount <= $this->balance) {
                $this->balance -= $amount;
                return true;
            }
            return false;
        }

        public function getBalance(): float {
            return $this->balance;
        }
    }

class Supplier {
    private string $name;
    private string $address;
    private string $phone;
    private string $supplierCode;
    private array $bankAccounts = [];

    public function __construct(string $name, string $address, string $phone, string $supplierCode) {
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
        $this->supplierCode = $supplierCode;
    }

    public function addBankAccount(BankAccount $account): void {
        $this->bankAccounts[] = $account;
    }

    public function getBankAccounts(): array {
        return $this->bankAccounts;
    }
}
class Client {
    private string $name;
    private string $address;
    private string $phone;
    private string $clientCode;
    private array $bankAccounts = [];

    public function __construct(string $name, string $address, string $phone, string $clientCode) {
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
        $this->clientCode = $clientCode;
    }

    public function addBankAccount(BankAccount $account): void {
        $this->bankAccounts[] = $account;
    }

    public function getBankAccounts(): array {
        return $this->bankAccounts;
    }
}
class ClientAccount extends BankAccount {}
class SupplierAccount extends BankAccount {}
    </pre>
    <br>
    <a href="{{ url('/') }}" class="btn btn-primary mt-3">Вернуться в меню</a>
@endsection
