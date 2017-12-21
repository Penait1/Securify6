<?php

namespace App\Http\Controllers\Admin;

use App\Challenge;
use App\Http\Controllers\Controller;

use App\Http\Requests\AdminStoreChallenge;
use App\Participant;
use App\ProgrammingLanguage;
use App\Submission;
use Carbon\Carbon;
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
        $challenge->starting_at = Carbon::today()->toDateTimeString();
        $challenge->ending_at = Carbon::tomorrow()->toDateTimeString();
        return view('admin.challenge.create', compact('challenge', 'programming_languages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminStoreChallenge $request)
    {

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
        $submissions = $challenge->submissions()
                                  ->select(['participant_id','challenge_id'])
                                  ->groupBy('participant_id', 'challenge_id')
                                  ->get();


//        dd($submissions);
        return view('admin.challenge.show',compact('submissions'));


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
    public function update(AdminStoreChallenge $request, Challenge $challenge)
    {
        $challenge->update($request->only('name', 'content','description','starting_at','ending_at'));
        $challenge->programmingLanguage()->associate($request->get('language_id'));
        $challenge->save();
        return redirect(route('challenges.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Challenge  $challenge
     * @return \Illuminate\Http\Response
     */
    public function destroy(Challenge $challenge)
    {
        $challenge->delete();
        return redirect(route('challenges.index'));
    }

    public function submissions(Challenge $challenge, Participant $participant)
    {

        $userSubmissions = $challenge->submissions()->where('participant_id', '=', $participant->id)->get();
        $lineNumbers = $challenge->getLineNumbersByParticipant($participant->id);
//        dd($userSubmission);

        return view('admin.submission.show',compact('userSubmissions', 'challenge', 'participant', 'lineNumbers'));
    }
}
