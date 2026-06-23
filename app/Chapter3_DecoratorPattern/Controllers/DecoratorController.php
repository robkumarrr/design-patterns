<?php

namespace App\Chapter3_DecoratorPattern\Controllers;

use App\Chapter3_DecoratorPattern\Models\ArtistFee;
use App\Chapter3_DecoratorPattern\Models\ConcertTicket;
use App\Chapter3_DecoratorPattern\Models\VenueFee;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use PHPUnit\Framework\Attributes\Ticket;

class DecoratorController extends Controller
{
    public function basicConcertTicket(): JsonResponse
    {
        $ticket = new ConcertTicket();

        return response()->json([
            'Basic Concert Ticket' => $ticket->getDescription()
        ]);
    }

    public function concertTicketWithFees(): JsonResponse
    {
        $ticket = new ConcertTicket();
        $ticket = new VenueFee($ticket);
        $ticket = new ArtistFee($ticket);

        return response()->json([
            'Concert Ticket with Fees' => $ticket->getDescription()
        ]);
    }
}
