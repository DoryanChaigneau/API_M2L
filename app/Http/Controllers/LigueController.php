<?php

namespace App\Http\Controllers;

use App\Ligue;
use App\Salle;
use App\Utils;
use Illuminate\Http\Request;

class LigueController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function all(Request $request)
    {
        $league = Utils::isValidConnection($request);
        if (!is_null($league)) {
            $users = Ligue::all();
            return response($users, 200);
        }
        return response('Vous n\'êtes pas autorisé à effectuer cette action', 403);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $datas = $request->input();
        $league = Ligue::where('login', $datas['login'])->first();
        if (!is_null($league)) {
            if (hash('SHA512', $datas['motDePasse']) === $league->motDePasse) {
                $data_return = [
                    'id' => $league->id,
                    'token' => $league->generate_api_token(),
                    'login' => $league->login,
                    'libelle' => $league->libelle,
                    'nbEmployes' => $league->nbEmployes,
                    'nbMembres' => $league->nbMembres,
                    'activation' => $league->activation,
                    'role_id' => $league->role_id
                ];
                return response()->json([
                    'resultCode' => 'OK',
                    'statusCode' => '200',
                    'body' => $data_return
                ]);
            }
        }
        return response()->json([
            'resultCode' => 'KO',
            'statusCode' => '401'
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function changeActivationStatus(Request $request)
    {
        $datas = $request->input();
        $league = Ligue::where('libelle', $datas['libelle'])->first();
        $league->activation = $datas['activation'];
        $league->save();

        if (!is_null($league)) {
            $data_return = [
                'id ' => $league->id,
                'login' => $league->handball,
                'libelle' => $league->libelle,
                'activation' => $league->activation
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
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function settingLeague(Request $request)
    {
        $datas = $request->input();
        $league = Ligue::where('login', $datas['login'])->first();
        if (!is_null($league)) {
            //  if (Ligue::where('activation',1)->first()) {
            $data_return = [
                'login' => $league->login,
                'nbEmployes' => $league->nbEmployes,
                'nbMembres' => $league->nbMembres
            ];
            return response()->json([
                'resultCode' => 'OK',
                'statusCode' => '200',
                'body' => $data_return
            ]);
            //}
        }
        return response()->json([
            'resultCode' => 'KO',
            'statusCode' => '401'
        ]);
    }

    /**
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function getAllAccounts()
    {
        $accounts = Ligue::all();
        return response()->json([
            'resultCode' => 'OK',
            'statusCode' => '200',
            'body' => $accounts
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function getLeagueById(Request $request)
    {
        $datas = $request->input();
        $league = Ligue::where('id', $datas['id'])->first();
        $data_return = [
            'libelle' => $league->libelle,
        ];
        return response()->json([
            'resultCode' => 'OK',
            'statusCode' => '200',
            'body' => $data_return
        ]);
    }
}
