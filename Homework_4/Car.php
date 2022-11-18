<?php

class Car
{
    private string $brand;
    private string $model;
    private string $color;
    private int $hp;
    private int $year;

    public function __construct(string $brand, string $model, string $color, int $hp, int $year)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
        $this->hp = $hp;
        $this->year = $year;
    }

    public function __toString() : string {
        return "Brand = $this->brand; Model = $this->model; Color = $this->color; Hp = $this->hp; Year = $this->year.\n";
    }
}