<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: sans-serif; }
        .label { font-weight: bold; }
        .message-box { background: #f3f4f6; padding: 15px; border-radius: 5px; margin-top: 10px; }
    </style>
</head>
<body>
    <h2>Nowe zgłoszenie kontaktowe</h2>
    
    <p><span class="label">Imię i nazwisko:</span> {{ $data['name'] }}</p>
    <p><span class="label">Email:</span> {{ $data['email'] }}</p>
    <p><span class="label">Technologia i skala:</span> {{ $data['stack'] ?? 'Nie podano' }}</p>
    
    <p class="label">Wiadomość:</p>
    <div class="message-box">
        {!! nl2br(e($data['message'])) !!}
    </div>
    
    <p><small>Wysłano: {{ now()->format('Y-m-d H:i:s') }}</small></p>
</body>
</html>
