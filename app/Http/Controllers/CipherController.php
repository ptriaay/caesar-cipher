<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cipher;

class CipherController extends Controller
{
    public function index()
    {
        return view('cipher');
    }

    public function encrypt(Request $request)
    {
        $plaintext = $request->plaintext;
        $key = 3;

        $ciphertext = $this->caesarCipher($plaintext, $key);

        Cipher::create([
            'plaintext' => $plaintext,
            'ciphertext' => $ciphertext,
            'key' => $key
        ]);

        return view('cipher', compact('plaintext', 'ciphertext'));
    }

    private function caesarCipher($text, $shift)
    {
        $result = '';
        $shift = $shift % 26;

        for ($i = 0; $i < strlen($text); $i++) {
            $char = $text[$i];

            if (ctype_alpha($char)) {
                $asciiOffset = ctype_upper($char) ? 65 : 97;
                $result .= chr((ord($char) - $asciiOffset + $shift) % 26 + $asciiOffset);
            } else {
                $result .= $char;
            }
        }

        return $result;
    }
}