<?php

namespace App\Services;

class GetCurrenciesCommandHandler
{
    private $repo;

    public function __construct(CurrencyRepositoryInterface $repository)
    {
        $this->repo = $repository->findAll();
    }

    public function handle(): array
    {
        $currencies = $this->repo;
        return $currencies;
    }
}