<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackService extends Controller
{
    public function getByThesisId(Request $request) {
        return response()->json(Feedback::where('thesisId', $request->id)->get());
    }

    public function addFeedbackByThesisId(Request $request) {
        $feedback = Feedback::create([
            'thesisId' => $request->thesisId,
            'feedback' => $request->feedback
        ]);

        return response()->json($feedback);
    }
}
