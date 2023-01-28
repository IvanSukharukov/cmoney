<?php

namespace App\Http\Controllers;

use App\Http\Requests\Settings\Currency\StoreRequest;
use App\Http\Requests\Settings\Currency\UpdateRequest;
use App\Models\Settings\Currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function index()
    {
        $currencies = Currency::all();
        return view('currency.index', compact('currencies'));
    }

    public function show(Currency $currency)
    {
        return view('currency.show',compact('currency'));
    }

    public function create()
    {
        return view('currency.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        Currency::firstOrCreate($data);//по идее здесь происходит проверка на уникальность
        return redirect()->route('currency.index');
    }

    public function edit(Currency $currency)
    {
        return view('currency.edit', compact('currency'));
    }

    public function update(UpdateRequest $request, Currency $currency)
    {
        $data = $request->validated();
        $currency->update($data);
        return view('currency.show', compact('currency'));
    }

    public function destroy(Currency $currency)
    {
        $currency->delete();
        return redirect()->route('currency.index');
    }
}
