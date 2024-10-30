<?php

class Controller_Home extends Controller_Template
{

	// Action index (équivalent à la route '/article')
    public function action_index()
    {
        return Response::forge('Bienvenue sur la page des articles !');
    }

}
