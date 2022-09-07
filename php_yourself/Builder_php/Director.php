<?php
require_once 'Builder.php';

class Director
{
    private Builder $builder;

    private const MORNING_GREET = ['おはようございます', 'こんにちは'];
    private const NIGHT_GREET = ['こんばんは', 'おやすみなさい', 'さようなら'];

    public function __construct(Builder $builder)
    {
        $this->builder = $builder;

        $this->builder->makeTitle('Greeting');
        $this->builder->makeString('朝から昼にかけて');
        $this->builder->makeItems(self::MORNING_GREET);

        $this->builder->makeString('夜に');
        $this->builder->makeItems(self::NIGHT_GREET);

        $this->builder->close();
    }
}