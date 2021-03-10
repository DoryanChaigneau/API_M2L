<?php

namespace App\Http\Controllers;

use App\Ligue;
use App\Photo;
use App\Reservation;
use App\Salle;
use Illuminate\Http\Request;

class SalleController extends Controller
{
    /**
     * @group Récupération des salles
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     * Return all rooms
     */
    public function getHallsDetails()
    {
        $hall = Salle::all();
        foreach($hall as $halls) {
            $halls['photo'] = $halls->photo();
        }
        return response()->json([
            'resultCode' => 'OK',
            'statusCode' => '200',
            'body' => $hall
        ]);
    }

    /**
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function getUsesRooms()
    {
        $room = Salle::where('statut_id',2)->get();
        return response($room,200);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function changeHallFeature(Request $request)
    {
        $datas = $request->input();
        $hall = Salle::where('id', $datas['id'])->first();
        $hall->description = $datas['description'];
        $hall->save();
        if (!is_null($hall)) {
            return response()->json([
                'resultCode' => 'OK',
                'statusCode' => '200',
                'body' => $hall
            ]);
        }
        return response()->json([
            'resultCode' => 'KO',
            'statusCode' => '401'
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getDescriptionByHall(Request $request)
    {
        $hall = Salle::where('id', $request['salleId'])->get();
        if (!is_null($hall)) {
            return response()->json([
                'resultCode' => 'OK',
                'statusCode' => '200',
                'body' => $hall
            ]);
        }
        return response()->json([
            'resultCode' => 'KO',
            'statusCode' => '401'
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function changeDigicode(Request $request)
    {
        $datas = $request->input();
        $hall = Salle::where('id', $datas['id'])->first();
        $hall->digicode = $datas['digicode'];
        $hall->save();
        if (!is_null($hall)) {
            return response()->json([
                'resultCode' => 'OK',
                'statusCode' => '200',
                'body' => $hall
            ]);
        }
        return response()->json([
            'resultCode' => 'KO',
            'statusCode' => '401'
        ]);
    }
}
