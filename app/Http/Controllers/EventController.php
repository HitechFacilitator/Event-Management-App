<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function create(Request $request)
    {
        $validated = $request->validate([
            'eventName' => 'required|string|max:255',
            'description' => 'nullable|string',
            'eventDate' => 'required|date',
            'eventTime' => 'required',
            'eventLocation' => 'required|string',
            'capacity' => 'required|integer',
            'paid' => 'required|boolean',
            'eventNature' => 'required|in:public,private',
            'organizer_id' => 'required|exists:users,id',
        ]);

        return response()->json(Event::create($validated), 201);
    }

    public function getById($id)
    {
        $event = Event::find($id);
        return $event ? response()->json($event) : response()->json(['message' => 'Event not found'], 404);
    }

    public function getAll()
    {
        return response()->json(Event::all());
    }

    public function update(Request $request, $id)
    {
        $event = Event::find($id);
        if (!$event) {
            return response()->json(['message' => 'Event not found'], 404);
        }

        $event->update($request->all());
        return response()->json($event);
    }

    public function deletebyId($id)
    {
        $event = Event::find($id);
        if (!$event) {
            return response()->json(['message' => 'Event not found'], 404);
        }

        $event->delete();
        return response()->json(['message' => 'Event deleted successfully']);
    }
}
