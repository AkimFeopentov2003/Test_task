<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barcode;
use App\Models\Nomenclature;
use App\Models\Supplier;
use App\Models\Client;
use App\Models\BankAccount;


class TaskController extends Controller
{
    public function processTask2(Request $request){
        $nomenclature = $request->input('nom_id');
        $barcodes = Barcode::getBarcodes($nomenclature);
        $response = $barcodes->pluck('barcode')->toArray();
        return view('task2', compact('response'));
    }
    public function task3()
    {
        $data = Nomenclature::leftJoin('barcodes', 'nomenclature.id', '=', 'barcodes.nomenclature_id')
            ->select('nomenclature.code','nomenclature.name', 'barcodes.barcode')
            ->orderBy('nomenclature.code')
            ->orderBy('barcodes.barcode')
            ->get();

        return view('task3', compact('data'));
    }
    public function task4(){
        $data = Nomenclature::leftJoin('barcodes', 'nomenclature.id', '=', 'barcodes.nomenclature_id')
            ->select('nomenclature.code', 'barcodes.barcode')
            ->get();
        $text = '';
        foreach ($data as $item) {
            $text .= $item->code . "\t" . $item->barcode . "\n";
        }
        dump($text);
        $filePath = public_path('output.txt');
        file_put_contents($filePath, $text);

        return view('task4', compact('data'));
    }

    public function task5(){
        $time = now()->format('d-m-Y H:i');
        return view('task5', compact('time'));
    }
    public function task6(Request $request){

        $validated = $request->validate([
            'x' => 'required|numeric',
            'y' => 'required|numeric',
            'k' => 'required|numeric',
        ]);

        $x = $validated['x'];
        $y = $validated['y'];
        $k = $validated['k'];

        if ($x > $y) {
            $result = 'Правая граница должна быть меньше левой';
        } else {
            $result = [];
            for ($i = $x; $i <= $y; $i++) {
                if ($i % $k == 0) {
                    $result[] = $i;
                }
            }
            if (empty($result)) {
                $result = 'Чисел, делящихся на k нет в заданном интервале.';
            }
        }

        return view('task6', compact('result'));
    }

    public function task7(Request $request){
        $validated = $request->validate([
            'input_string' => 'required|string',
        ]);
        $inputString = $validated['input_string'];
        $convertedString = str_replace(' ', '_', $inputString);
        return view('task7', ['converted' => $convertedString]);

    }

    public function task8(){

        $supplier = Supplier::where('supplier_code', 'SUP-001')->first();
        if(!$supplier){
            $supplier = Supplier::create([
                'name' => 'ООО Поставщик',
                'address' => 'ул. Примерная, 1',
                'phone' => '+7 999 123-45-67',
                'supplier_code' => 'SUP-001',
            ]);
            $supplierAccount = new BankAccount([
                'account_number' => '40817810099910000001',
                'bank_name' => 'Банк Поставщиков',
                'balance' => 50000,
            ]);
            $supplier->bankAccounts()->save($supplierAccount);
        }

        $client = Client::where('client_code', 'CLI-123')->first();
        if(!$client){
            $client = Client::create([
                'name' => 'ООО Клиент',
                'address' => 'ул. Клиентская, 5',
                'phone' => '+7 888 987-65-43',
                'client_code' => 'CLI-123',
            ]);
            $clientAccount = new BankAccount([
                'account_number' => '40817810299920000002',
                'bank_name' => 'Банк Клиентов',
                'balance' => 20000,
            ]);
            $client->bankAccounts()->save($clientAccount);
        }

        dump("Баланс поставщика: " . $supplier->getBalance() . " руб.");
        dump("Баланс клиента: " . $client->getBalance() . " руб.");
        $accountsSupplier = $supplier->getBankAccounts();
        foreach ($accountsSupplier as $account) {
            dump("Банк: {$account->bank_name}, Счет: {$account->account_number}, Баланс: {$account->balance} руб.\n");
        }
        $accountSupplier = $accountsSupplier->first();
        $accountSupplier->deposit(10000);
        dump("Банк: {$accountSupplier->bank_name}, Счет: {$accountSupplier->account_number}, Баланс: {$accountSupplier->balance} руб.\n");
        $accountSupplier->withdraw(10000);

        $accountsClient = $client->getBankAccounts();
        foreach ($accountsClient as $account) {
            dump("Банк: {$account->bank_name}, Счет: {$account->account_number}, Баланс: {$account->balance} руб.\n");
        }
        $accountClient = $accountsClient->first();
        $accountClient->withdraw(10000);
        dump("Банк: {$accountClient->bank_name}, Счет: {$accountClient->account_number}, Баланс: {$accountClient->balance} руб.\n");
        $accountClient->deposit(10000);

        return view('task8', compact('accountClient', 'supplier', 'client', 'accountSupplier'));

    }
}
