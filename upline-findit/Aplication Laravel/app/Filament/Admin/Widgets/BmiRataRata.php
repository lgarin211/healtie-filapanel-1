<?php

namespace App\Filament\Admin\Widgets;

use Filament\Widgets\ChartWidget;

class BmiRataRata extends ChartWidget
{
    protected static ?string $heading = 'Bmi Rata Rata';

    protected function getData(): array
    {
        return [
            'labels' => ['Good', 'Over', 'under'],
            'datasets' => [
                [
                    'label' => 'BMI',
                    'data' => [1, 2, 3],
                    'backgroundColor' => ['#3490dc', '#f6993f', '#38c172'],
                    'hoverBackgroundColor' => ['#3490dc', '#f6993f', '#38c172'],
                ],
            ],

        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
