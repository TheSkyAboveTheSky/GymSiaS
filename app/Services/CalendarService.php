<?php

namespace App\Services;

use App\Models\Seance;

class CalendarService
{
    public function generateCalendarData($weekDays)
    {
        $calendarData = [];
        $timeRange = (new TimeService)->generateTimeRange(config('app.calendar.start_time'), config('app.calendar.end_time'));
        $seances   = Seance::with('seance', 'coach')
            ->calendarByRoleOrClassId()
            ->get();

        foreach ($timeRange as $time)
        {
            $timeText = $time['start'] . ' - ' . $time['end'];
            $calendarData[$timeText] = [];

            foreach ($weekDays as $index => $day)
            {
                $seance = $seances->where('weekday', $index)->where('start_time', $time['start'])->first();

                if ($seance)
                {
                    array_push($calendarData[$timeText], [
                        'coach_name' => $seance->coach->name,
                        'rowspan'      => $seance->difference/60 ?? ''
                    ]);
                }
                else if (!$seances->where('weekday', $index)->where('start_time', '<', $time['start'])->where('end_time', '>=', $time['end'])->count())
                {
                    array_push($calendarData[$timeText], 1);
                }
                else
                {
                    array_push($calendarData[$timeText], 0);
                }
            }
        }

        return $calendarData;
    }
}