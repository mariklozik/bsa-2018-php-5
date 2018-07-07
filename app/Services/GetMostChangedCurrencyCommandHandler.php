<?php

namespace App\Services;

class GetMostChangedCurrencyCommandHandler
{
    private $repo;

    public function __construct(CurrencyRepositoryInterface $repository)
    {
        $this->repo = $repository;
    }

    public function handle(): Currency
    {
        $currencies = $this->repo->findAll();
        usort($currencies , function(Currency $a, Currency $b) {
            return $a->getDailyChangePercent() - $b->getDailyChangePercent();
        });

        return array_slice($currencies, 0, 1)[0];
    }
}