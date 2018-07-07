<?php

namespace App\Services;

class CurrencyGenerator
{
    public static function generate(): array
    {
        $parsedCurrenciesList = [
            [
                'id' => 1027,
                'name' => 'Ethereum',
                'price' => 471.761,
                'url' => 'https://s2.coinmarketcap.com/static/img/coins/16x16/1027.png',
                'percent_change_24h' => 3.46,

            ],
            [
                'id' => 52,
                'name' => 'Ripple',
                'price' => 0.471178,
                'url' => 'https://s2.coinmarketcap.com/static/img/coins/16x16/52.png',
                'percent_change_24h' => 0.91,
            ],
            [
                'id' => 1831,
                'name' => 'BTCash',
                'price' => 723.293,
                'url' => 'https://s2.coinmarketcap.com/static/img/coins/16x16/1831.png',
                'percent_change_24h' => 0.32,
            ],
            [
                'id' => 2,
                'name' => 'Litecoin',
                'price' => 82.87,
                'url' => 'https://s2.coinmarketcap.com/static/img/coins/16x16/2.png',
                'percent_change_24h' => 0.01,
            ],
            [
                'id' => 4,
                'name' => 'EOS',
                'price' => 8.45461,
                'url' => 'https://s2.coinmarketcap.com/static/img/coins/16x16/1765.png',
                'percent_change_24h' => 1.21,
            ],
            [
                'id' => 321,
                'name' => 'Cardano',
                'price' => 0.1444,
                'url' => 'https://s2.coinmarketcap.com/static/img/coins/16x16/321.png',
                'percent_change_24h' => -0.16,
            ],
            [
                'id' => 1,
                'name' => 'Bitcoin',
                'price' => 6604.15,
                'url' => 'https://s2.coinmarketcap.com/static/img/coins/16x16/1.png',
                'percent_change_24h' => 0.6,
            ],
        ];

        $currenciesList = [];
        foreach ( $parsedCurrenciesList as $c) {
            $currenciesList[] = new Currency(
                $c['id'],
                $c['name'],
                $c['price'],
                $c['url'],
                $c['percent_change_24h']
            );
        }

        return $currenciesList;
    }
}