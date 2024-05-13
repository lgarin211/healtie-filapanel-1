<?php

namespace App\Filament\Admin\Widgets;

use Filament\Widgets\ChartWidget;

class UsiaPenggunaa extends ChartWidget
{
    protected static ?string $heading = 'Usia Penggunaa';

    protected function getData(): array
    {
        return [
            //
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}
