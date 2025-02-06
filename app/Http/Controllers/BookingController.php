<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function create(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'booking_id' => 'required|exists:bookings,id',
            'ticket_id' => 'required|exists:tickets,id',
            'quantity' => 'required|integer|min:1',
            'status' => 'required|in:pending,confirmed,cancelled',
        ]);

        return response()->json(Booking::create($validated), 201);
    }

    public function getById($id)
    {
        $booking = Booking::find($id);
        return $booking ? response()->json($booking) : response()->json(['message' => 'Booking not found'], 404);
    }
    
    public function getAll()
    {
        return response()->json(Booking::all());
    }

    public function update(Request $request, $id)
    {
        $booking = Booking::find($id);
        if (!$booking) {
            return response()->json(['message' => 'Booking not found'], 404);
        }

        $booking->update($request->all());
        return response()->json($booking);
    }

    public function deletebyId($id)
    {
        $booking = Booking::find($id);
        if (!$booking) {
            return response()->json(['message' => 'Booking not found'], 404);
        }

        $booking->delete();
        return response()->json(['message' => 'Booking deleted successfully']);
    }
}
