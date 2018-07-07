<?php

namespace App\Services;

class GetPopularCurrenciesCommandHandler
{
    private $repository;

    public function __construct(CurrencyRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    const POPULAR_COUNT = 1;
    public function handle(int $count = self::POPULAR_COUNT): array
    {
        $currencies = $this->repository->findAll();
        usort($currencies , function(Currency $a, Currency $b) {
            return $b->getPrice() - $a->getPrice();
        });

        return array_slice($currencies, 0, 3);
    }
}