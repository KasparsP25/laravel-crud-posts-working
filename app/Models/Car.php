<?php
namespace App\Models;

 class Car
{
    public function __construct(
        public string $make,
        public string $model,
        public int    $year,
        public string $color
    ) {}

    public static function create(
        string $make,
        string $model,
        int    $year,
        string $color
    ): self {
        return new self($make, $model, $year, $color);
    }

    public function html(): string
    {
        return sprintf(
            '<h2>%d %s %s</h2><p>Color: <b>%s</b></p>',
            $this->year,
            $this->make,
            $this->model,
            $this->color
        );
    }
}