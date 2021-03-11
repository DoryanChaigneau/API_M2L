<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BasicTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $userData = [
            "login" => "multimedia",
            "motDePasse" => "pwsio"
        ];

        $this->json('POST', 'api/auth', $userData, ['Accept' => 'application/json'])
            ->assertStatus(201)
            ->assertJsonStructure([
                "resultCode" => "OK",
                "statusCode" => "200",
                "body" => [
                    "id",
                    "token",
                    "login",
                    "libelle",
                    "nbEmployes",
                    "nbMembres",
                    "activation",
                    "role_id"
                ]
            ]);
    }
}
