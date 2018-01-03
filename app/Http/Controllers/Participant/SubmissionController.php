<?php

namespace App\Http\Controllers\Participant;

use App\Participant;
use App\Challenge;
use App\Http\Controllers\Controller;
use App\Submission;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    public function submit(Request $request, $challengeId)
    {
        $challenge = Challenge::findOrFail($challengeId);
        $participant = Participant::byEmail($request->user()->email);

        foreach ($request->comment as $comments) {
            $submission = new Submission;
            $submission->fill([
                'comment' => $comments['value'],
                'line_number_from' => $comments['line_from'],
                'line_number_to' => $comments['line_end']
            ]);

            $submission->participant()->associate($participant);
            $submission->challenge()->associate($challenge);

            $submission->save();
        }
        dd($request->user()->email);
    }
}