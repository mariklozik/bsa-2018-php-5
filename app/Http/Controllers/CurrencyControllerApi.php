<?php
namespace App\Http\Controllers;

use App\Services\CurrencyPresenter;
use App\Services\CurrencyRepositoryInterface;
use App\Services\GetCurrenciesCommandHandler;
use App\Services\GetMostChangedCurrencyCommandHandler;

class CurrencyControllerApi
{
    private $allCurrencies;

    public function getAllCurrencies(CurrencyRepositoryInterface $repository)
    {
        $this->allCurrencies = $repository;

        $curr = new GetCurrenciesCommandHandler($this->allCurrencies);
        $handleCurrencies = $curr->handle();
        $currencies = [];

        foreach ($handleCurrencies as $c)
        {
            $currencies[] = CurrencyPresenter::present($c);
        }

        return response()->json( $currencies );
    }

    public function getUnstableCurrencies(CurrencyRepositoryInterface $repository)
    {
        $this->allCurrencies = $repository;
        $curr = new GetMostChangedCurrencyCommandHandler($this->allCurrencies);
        $handleCurrencies = $curr->handle();
        $currency = CurrencyPresenter::present($handleCurrencies);

        return response()->json( $currency );
    }

}