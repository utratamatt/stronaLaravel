<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StronaGlownaController extends Controller
{
    protected function generujHead()
    {
        return '<!DOCTYPE HTML>
        <html>
            <head>
                <title>NAZWA STRONY</title>
                <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
                <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
                <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            </head>
            <body>
            ';
    }

    protected function generujNaglowek() : string
    {
        return '<div class="container">
        <div class="row">
            <div class="col s12">
                <h1>NAZWA STRONY</h1>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <form method="POST">
                    <button class="btn waves-effect waves-light" type="submit" name="akcja" value="widokNowy">Nowy
                        <i class="material-icons right">add</i>
                    </button>
                    <button class="btn waves-effect waves-light" type="submit" name="akcja" value="">Wszystkie
                        <i class="material-icons right">list</i>
                    </button>
                </form>
            </div>
        </div>
    </div>
    <hr />';
    }

    protected function generujStopke() : string
    {
        return '        <script type="text/javascript" src="js/materialize.min.js"></script>
                        <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            var elems = document.querySelectorAll("select");
                            var instances = M.FormSelect.init(elems, {});
                        });
                        </script>
            </body>
        </html>';
    }

    public function __invoke()
    {
        return view('index');
    }
}
