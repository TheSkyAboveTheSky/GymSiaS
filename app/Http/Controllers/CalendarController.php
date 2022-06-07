<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Models\Seance;
use App\Services\CalendarService;


class CalendarController extends Controller
{
    public function index(CalendarService $calendarService)
    {
        $weekDays     = Seance::WEEK_DAYS;
        $calendarData = $calendarService->generateCalendarData($weekDays);

        return view('admin.calendar', compact('weekDays', 'calendarData'));
    }
}
