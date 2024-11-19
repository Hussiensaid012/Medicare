<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiRespose;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReviewRequest;
use App\Models\ClientReview;
use App\Models\Doctor;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(ReviewRequest $request)
    {

        $Review = $request->validated();
        $Reviews = ClientReview::create($Review);
        if ($Reviews) {
            return ApiRespose::sendResponse(201, 'The Review is booked Successfully ', []);
        }
    }
}
