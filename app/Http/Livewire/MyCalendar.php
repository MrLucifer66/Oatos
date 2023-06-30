<?php

declare(strict_types=1);

namespace App\Http\Livewire;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use BombenProdukt\LivewireCalendar\Calendar;
use BombenProdukt\LivewireCalendar\Http\Livewire\AbstractCalendar;

final class MyCalendar extends AbstractCalendar
{
    public function events(): Collection
    {
        $salesMeeting = Calendar::createEvent(
            id: 'unique-id',
            name: 'Sales Meeting',
            description: 'Review the sales for the month',
            href: 'https://openai.com/',
            startTime: Carbon::today()->addHours(8),
            endTime: Carbon::today()->addHours(16)
        );

        $marketingMeeting = Calendar::createEvent(
            id: 'another-unique-id',
            name: 'Marketing Meeting',
            description: 'Review the marketing for the month',
            href: 'https://openai.com/',
            startTime: Carbon::tomorrow()->addHours(8),
            endTime: Carbon::tomorrow()->addHours(16)
        );

        return collect([$salesMeeting, $marketingMeeting]);
    }
}


