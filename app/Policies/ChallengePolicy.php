<?php

namespace App\Policies;

use App\Participant;
use App\Challenge;
use Carbon\Carbon;
use Illuminate\Auth\Access\HandlesAuthorization;

class ChallengePolicy
{
    use HandlesAuthorization;

    /**
     * @param Participant $participant
     * @param Challenge $challenge
     * @return bool
     */
    public function basicRules(Participant $participant, Challenge $challenge) : bool
    {
        $pastTime = Carbon::now() > Carbon::parse($challenge->ending_at);
        $hasNoSubmissions = count($challenge->getLineNumbersByParticipant($participant->id)) === 0;

        return $pastTime || $hasNoSubmissions; // not past ending date and the user has no submissions yet
    }

    /**
     * Determine whether the user can view the challenge.
     *
     * @param  \App\Participant  $participant
     * @param  \App\Challenge  $challenge
     * @return mixed
     */
    public function view(Participant $participant, Challenge $challenge)
    {
        return $this->basicRules($participant, $challenge);
    }

    /**
     * Determine whether the user can update the challenge.
     *
     * @param  \App\Participant  $participant
     * @param  \App\Challenge  $challenge
     * @return mixed
     */
    public function update(Participant $participant, Challenge $challenge)
    {
        return $this->basicRules($participant, $challenge);
    }
}
