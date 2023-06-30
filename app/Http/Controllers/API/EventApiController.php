<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Collection;
use Carbon\Carbon;

class EventsApiController extends Controller
{
    public function index()
    {
        $events = Event::all();

        return $events;
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $event = Event::create($input);

        return $event;
    }

    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        $input = $request->all();

        $event->update($input);

        return $event;
    }

    public function destroy($id)
    {
        $success = Event::delete($id);

        return response()->json(['success' => $success]);
    }
}