<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/contact', function (Request $request) {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'stack' => 'nullable|string|max:255',
        'message' => 'required|string',
    ]);

    $data = "Date: " . now() . "\n" .
            "Name: " . $validated['name'] . "\n" .
            "Email: " . $validated['email'] . "\n" .
            "Stack: " . ($validated['stack'] ?? 'N/A') . "\n" .
            "Message: \n" . $validated['message'] . "\n" .
            "--------------------------------------------------\n";

    $filename = 'contact_submissions/' . now()->format('Y-m-d_H-i-s') . '_' . str()->slug($validated['name']) . '.txt';
    
    Storage::disk('local')->put($filename, $data);

    return redirect()->to(url()->previous() . '#kontakt')->with('success', 'Dziękuję za wiadomość! Odpowiem w ciągu 24h.');
})->name('contact.store');

Route::get('/polityka-prywatnosci', function () {
    return view('privacy');
});
