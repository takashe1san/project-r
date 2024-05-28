<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Http\Requests\StoreFeedbackRequest;
use App\Http\Requests\UpdateFeedbackRequest;

class FeedbackController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFeedbackRequest $request)
    {
        $feedback = Feedback::firstOrNew(['user_id' => auth()->id()]);
        $feedback->feedback = $request->feedback;
        if ($feedback->save()) {
            return redirect()->back()->with(['m-color' => 'success', 'message' => 'شكراً لمشاركتك', 'm-dir' => 'rtl']);
        } else {
            return redirect()->back()->with(['m-color' => 'danger', 'message' => 'فشلت العملية', 'm-dir' => 'rtl']);
        }
    }
}
