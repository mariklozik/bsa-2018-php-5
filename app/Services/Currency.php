<?php

namespace App\Services;

class Currency
{
    private $id;
    private $name;
    private $price;
    private $percentChange;
    private $imageUrl;

    public function __construct($id, $name, $price, $imageUrl, $percentChange)
    {
        $this->id    = $id;
        $this->name  = $name;
        $this->price = $price;
        $this->imageUrl = $imageUrl;
        $this->percentChange = $percentChange;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getDailyChangePercent()
    {
        return $this->percentChange;
    }
    public function getImageUrl()
    {
        return $this->imageUrl;
    }
}