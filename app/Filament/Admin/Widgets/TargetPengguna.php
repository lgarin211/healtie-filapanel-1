<?php

namespace App\Filament\Admin\Widgets;

use Filament\Widgets\ChartWidget;

class TargetPengguna extends ChartWidget
{
    protected static ?string $heading = 'Target Pengguna';

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
