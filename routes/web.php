<?php

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmission;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/contact', function (Request $request) {
    // Honeypot check
    if ($request->filled('phone_number')) {
        return response()->json(['message' => 'Dziękuję za wiadomość! Odpowiem w ciągu 24h.']);
    }

    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'stack' => 'nullable|string|max:255',
        'message' => 'required|string',
    ]);

    // Save to file (Backup)
    $dataString = "Date: " . now() . "\n" .
            "Name: " . $validated['name'] . "\n" .
            "Email: " . $validated['email'] . "\n" .
            "Stack: " . ($validated['stack'] ?? 'N/A') . "\n" .
            "Message: \n" . $validated['message'] . "\n";

    $filename = 'contact_submissions/' . now()->format('Y-m-d_H-i-s') . '_' . str()->slug($validated['name']) . '.txt';
    Storage::disk('local')->put($filename, $dataString);

    // Send Email
    try {
        Mail::to(config('mail.from.address'))->send(new ContactFormSubmission($validated));
    } catch (\Exception $e) {
        Log::error('Mail sending failed: ' . $e->getMessage());
        return response()->json(['message' => 'Wystąpił błąd podczas wysyłania wiadomości. Spróbuj ponownie za chwilę.'], 500);
    }

    return response()->json(['message' => 'Dziękuję za wiadomość! Odpowiem w ciągu 24h.']);
})->name('contact.store');

Route::get('/polityka-prywatnosci', function () {
    return view('privacy');
});
