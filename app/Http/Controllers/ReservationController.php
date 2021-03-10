<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function makeReservation(Request $request)
    {
        $datas = $request->input();
        $booking = Reservation::create(['date' => $datas['date']
            ,'heureDebut' => $datas['heureDebut']
            ,'heureFin' => $datas['heureFin']
            ,'salle_id' => $datas['salle_id']
            ,'ligue_id' => $datas['ligue_id']
        ]);
        if(!is_null($booking)){
            $data_return = [
                'id' => $booking->id,
                'date' => $booking->date,
                'heureDebut' => $booking->heureDebut,
                'heureFin' => $booking->heureFin,
                'salle_id' => $booking->salle_id,
                'ligue_id' => $booking->ligue_id
            ];
            return response()->json([
                'resultCode' => 'OK',
                'statusCode' => '200',
                'body' => $data_return
            ]);
        }
        return response()->json([
            'resultCode' => 'KO',
            'statusCode' => '401'
        ]);
    }

    /**
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function allBookingsById(Request $request)
    {
        $booking = Reservation::where('ligue_id', $request['ligueId'])->orderBy('date','DESC')->get();
        if(!is_null($booking)) {
            return response()->json([
                'resultCode' => 'OK',
                'statusCode' => '200',
                'body' => $booking
            ]);
        }
        return response()->json([
            'resultCode' => 'KO',
            'statusCode' => '404'
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAvailability(Request $request)
    {
        $datas = $request->input();
        $booking = Reservation::where('date', $datas['date'])
            ->where('salle_id', $datas['salle_id'])
            ->get();
        if(!is_null($booking)) {
            return response()->json([
                'resultCode' => 'OK',
                'statusCode' => '200',
                'body' => $booking
            ]);
        }
        return response()->json([
            'resultCode' => 'KO',
            'statusCode' => '404'
        ]);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function getCurrentBookingsList()
    {
        date_default_timezone_set("Europe/Paris");
        $current = Reservation::where('date', date('Y-m-d'))
            ->whereTime('heureDebut','<',date("H:i:s"))
            ->whereTime('heureFin','>',date("H:i:s"))
            ->get();
        foreach($current as $reservation) {
            $reservation['salle'] = $reservation->salle();
            $reservation['ligue'] = $reservation->ligue();
        }
        if (!is_null($current)) {
            return response()->json([
                'resultCode' => 'OK',
                'statusCode' => '200',
                'body' => $current
            ]);
        }
        return response()->json([
            'resultCode' => 'KO',
            'statusCode' => '404'
        ]);
    }

    public function getCurrentBookingsListById(Request $request)
    {
        date_default_timezone_set("Europe/Paris");
        $current = Reservation::where('ligue_id', $request['ligueId'])
            ->where('date', date('Y-m-d'))
            ->whereTime('heureDebut','<',date("H:i:s"))
            ->whereTime('heureFin','>',date("H:i:s"))
            ->get();
        foreach($current as $reservation) {
            $reservation['salle'] = $reservation->salle();
            $reservation['ligue'] = $reservation->ligue();
        }
        if (!is_null($current)) {
            return response()->json([
                'resultCode' => 'OK',
                'statusCode' => '200',
                'body' => $current
            ]);
        }
        return response()->json([
            'resultCode' => 'KO',
            'statusCode' => '404'
        ]);
    }
}
