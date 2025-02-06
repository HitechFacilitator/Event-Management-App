<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function create(Request $request)
    {
        $validated = $request->validate([
            'ticket_id' => 'required|exists:tickets,id',
            'ticketType' => 'required|string',
            'ticketQuantity' => 'required|integer|min:1',
            'currentTicketQty' => 'integer|min:1',
            'price' => 'required|integer',
        ]);

        return response()->json(Ticket::create($validated), 201);
    }

    public function getById($id)
    {
        $ticket = Ticket::find($id);
        return $ticket ? response()->json($ticket) : response()->json(['message' => 'Ticket not found'], 404);
    }

    public function getAll()
    {
        return response()->json(Ticket::all());
    }

    public function update(Request $request, $id)
    {
        $ticket = Ticket::find($id);
        if (!$ticket) {
            return response()->json(['message' => 'Ticket not found'], 404);
        }

        $ticket->update($request->all());
        return response()->json($ticket);
    }

    public function deletebyId($id)
    {
        $ticket = Ticket::find($id);
        if (!$ticket) {
            return response()->json(['message' => 'Ticket not found'], 404);
        }

        $ticket->delete();
        return response()->json(['message' => 'Ticket deleted successfully']);
    }
}
