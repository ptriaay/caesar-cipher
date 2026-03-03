<!DOCTYPE html>
<html>
<head>
    <title>Caesar Cipher - Putri</title>
</head>
<body>

<h2>Caesar Cipher - Putri</h2>

<form method="POST" action="/putri/encrypt">
    @csrf
    <input type="text" name="plaintext" placeholder="Masukkan plaintext">
    <button type="submit">Encrypt</button>
</form>

@if(isset($ciphertext))
    <h3>Plaintext: {{ $plaintext }}</h3>
    <h3>Ciphertext: {{ $ciphertext }}</h3>
@endif

</body>
</html>