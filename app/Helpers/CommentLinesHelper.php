<?php

namespace App\Helpers;

use App\Challenge;
use App\Participant;

class CommentLinesHelper
{

    public function generateCodeLines(Challenge $challenge, Participant $participant) : string
    {
        $unprocessedLines = $challenge->getLineNumbersByParticipant($participant->id);
        $processedLines = $this->processCodeLines($unprocessedLines);

        // so now we have the code lines ready for use. Only thing to do is glue it together for use in the view.
        return implode(',', $processedLines);
    }

    private function processCodeLines($commentLines) : array
    {
        $lines = array();
        foreach ($commentLines as $lineFrom => $lineTo) {
            if($lineFrom === $lineTo) { // single line
                $lines[] = $lineFrom;
            } else { // code blocks
                $lines[] = $lineFrom . '-' . $lineTo;
            }
        }

        return $lines;
    }
}