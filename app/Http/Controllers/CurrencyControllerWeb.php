<?php
namespace App\Http\Controllers;

use App\Services\CurrencyPresenter;
use App\Services\CurrencyRepositoryInterface;
use App\Services\GetCurrenciesCommandHandler;
use App\Services\GetPopularCurrenciesCommandHandler;


class CurrencyControllerWeb
{
    private $allCurrencies;
    private $popularCurrencies;

    public function getAllCurrencies(CurrencyRepositoryInterface $repository)
    {
        $this->allCurrencies = new GetCurrenciesCommandHandler($repository);
        $currencies = $this->allCurrencies->handle();

        $allCurrencies = [];
        foreach ($currencies as $c) {
            $allCurrencies[] = CurrencyPresenter::present($c);
        };

        return view('allCurrencies', compact('allCurrencies'));
    }
    public function getPopularCurrencies(CurrencyRepositoryInterface $repository)
    {
        $this->popularCurrencies = new GetPopularCurrenciesCommandHandler($repository);
        $currencies = $this->popularCurrencies->handle();

        $popularCurrencies = [];
        foreach ($currencies as $c) {
            $popularCurrencies[] = CurrencyPresenter::present($c);
        };

        return view('popular_currencies', compact('popularCurrencies'));
    }
}