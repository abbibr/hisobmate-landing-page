<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'fullname' => 'required|string|max:255',
                'email' => 'nullable|email|unique:users,email',
                'phone' => 'nullable|string|unique:users,phone',
                'username' => 'nullable|string|unique:users,username',
                'code' => 'nullable',
            ]);

            if (empty($validated['email']) && empty($validated['phone']) && empty($validated['username'])) {
                return response()->json([
                    'success' => false,
                    'message' => 'Validation failed',
                    'errors' => [
                        'contact' => ['At least one contact method (email, phone, or username) must be provided.']
                    ]
                ], 422);
            }

            User::create([
                'fullname' => $validated['fullname'],
                'email' => $validated['email'] ?? null,
                'phone' => $validated['phone'] ?? null,
                'username' => $validated['username'] ?? null,
                'code' => $validated['code'] ?? null
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Successfully added to waitlist!'
            ], 200);
        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            Log::error('Waitlist Error: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'An error occurred. Please try again.'
            ], 500);
        }
    }
}
