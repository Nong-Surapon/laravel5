<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Song;


class SongsController extends Controller {



    private $song;

    public function __construct(Song $song)
    {
        $this->song = $song;
    }

    public function index()
    {
        $songs = $this->song->get();

        return view('songs.index', compact('songs'));
    }

    public function show(Song $song)
    {
        return view('songs.show', compact('song'));
    }

    public function edit(Song $song)
    {


        return view('songs.edit', compact('song'));
    }

    public function update(Song $song, Request $request)
    {
        $song->fill($request->all())->save();

        return redirect('songs');
    }

}
