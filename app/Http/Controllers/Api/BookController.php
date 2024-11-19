<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiRespose;
use App\Http\Controllers\Controller;
use App\Http\Requests\BookRequest;
use App\Http\Resources\BookResource;
use App\Models\BookAppointment;
use App\Models\ClientReview;
use App\Models\Doctor;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function index()

    {
        // $books = BookAppointment::where('doctor_id',$request->doctor()->id)->get();
        $books = BookAppointment::all();

        if ($books) {
            return ApiRespose::sendResponse(200, 'These are all Appointments', BookResource::collection($books));
        }
    }

    public function store(BookRequest $request)

    {

        $bookvalidate = $request->validated();

        $doctor = Doctor::find($request->doctor_id);
        if (!$doctor) {
            return ApiRespose::sendResponse(404, 'Doctor not found', []);
        }

        if (!in_array($request->days, json_decode($doctor->days, true))) {
            return ApiRespose::sendResponse(200, 'These days are not available Choose day from data', $doctor->days);
        }

        $book = BookAppointment::create($bookvalidate);
        if ($book) {
            return ApiRespose::sendResponse(201, 'The Appointment is Booked successfully', []);
        } else {
            return ApiRespose::sendResponse(500, 'Failed to create the review', []);
        }
    }

    public function delete($id)

    {
        $book = BookAppointment::find($id);
        if (!$book) {
            return ApiRespose::sendResponse(200, 'The Appointment is not Found ', []);
        }
        $books = $book->delete();
        if ($books) {
            return ApiRespose::sendResponse(200, 'The Appointment is Deleted ', []);
        }
    }

    public function search(Request $request)

    {
        $word = $request->has('search') ? $request->input('search') : null;
        $ads = BookAppointment::when($word != null, function ($q) use ($word) {
            $q->where('name', 'like', '%' . $word . '%');
        })->latest()->get();
        if (count($ads) > 0) {
            return ApiRespose::sendResponse(200, 'Search completed', BookResource::collection($ads));
        }
        return ApiRespose::sendResponse(200, 'No matching data', []);
    }
}
