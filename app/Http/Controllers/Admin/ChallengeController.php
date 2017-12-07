<?php

namespace App\Http\Controllers\Admin;

use App\Challenge;
use App\Http\Controllers\Controller;

use App\ProgrammingLanguage;
use Illuminate\Http\Request;
use Illuminate\View\View;


class ChallengeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $challenges = Challenge::all();
        return view('admin.challenge.index',compact('challenges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $programming_languages = ProgrammingLanguage::pluck('name', 'id');
        $challenge = new Challenge();
        return view('admin.challenge.create', compact('challenge', 'programming_languages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'name'                  => 'required',
            'language_id'           => 'required',
            'content'               => 'required',
            'description'           => 'required',

        );
        $programmingLanguage = ProgrammingLanguage::find($request->get('language_id'));
        $challenge = new Challenge($request->only('name','content','description','starting_at','ending_at'));
        $challenge->programmingLanguage()->associate($request->get('language_id'));
        $challenge->save();
        return redirect(route('challenges.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Challenge  $challenge
     * @return \Illuminate\Http\Response
     */
    public function show(Challenge $challenge)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Challenge  $challenge
     * @return \Illuminate\Http\Response
     */
    public function edit(Challenge $challenge)
    {

        $programming_languages = ProgrammingLanguage::pluck('name', 'id');

       return view('admin.challenge.edit',compact('challenge','programming_languages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Challenge  $challenge
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Challenge $challenge)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Challenge  $challenge
     * @return \Illuminate\Http\Response
     */
    public function destroy(Challenge $challenge)
    {
        //
    }
}
