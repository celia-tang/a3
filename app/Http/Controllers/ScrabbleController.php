<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ScrabbleController extends Controller
{
    // GET

    public function index() {
        return 'Here are all the books...';
	}

	public function show($title) {
        return view('scrabble.show')->with(['title' => $title]);
    }

    public function search(Request $request) {

    	$this->validate($request, [
        	'word' => 'required|alpha|max:15',
    	]);

	    $wordS = $request->input('word');
	    $word = strtolower($request->input('word'));
	    $bonus = $request->input('bonus');
	    $bingo = $request->input('bingo');

	    $points = ['eaotinrslu', 'dg','cmbp','hfwyv', 'k', ' ', ' ', 'jx', ' ', 'qz'];
		$count = 0;

		for ($j = 0; $j < strlen($word); $j++) {

			for ($i = 0; $i < 10; $i++) {
				if (strrchr($points[$i], $word[$j]) != false) {
					$count = $count + 1 + $i;
				}
			}
		} 

		//check for multiplier
		if ($bonus == "triple") {
			$count  = $count * 3;
		} else if ($bonus == "double") {
			$count  = $count * 2;
		} 

		//check for bingo
		if ($bingo == "true") {
			$count + 50;
		} 

	    return view('scrabble.form')->with([
        'points' => $count,
        'word' => $wordS
    	]);
	}
}