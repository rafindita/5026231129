<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat; // Import model

class ChatController extends Controller
{
    /**
     * Display the chat message with emoticon conversion.
     */
    public function index()
    {
        // Ambil record pesan dari tabel chat (diasumsikan ID 1 atau record pertama)
        $chatMessage = Chat::find(1); // Ambil record dengan ID 1

        $convertedPesan = '';

        if ($chatMessage) {
            $originalPesan = $chatMessage->pesan;

            // Definisikan mapping emoticon ke nama file gambar
            // Sesuaikan dengan nama file gambar yang kamu punya di public/img/emoticons/
            $emoticonsMap = [
                ':)' => '1.png',
                ':3'  => '2.png',
                ':P'  => '3.png',
                ':C'  => '4.png',
                ';)'  => '5.png',
            ];

            $convertedPesan = $originalPesan;

            // Lakukan penggantian teks emoticon dengan tag <img>
            foreach ($emoticonsMap as $textEmoticon => $imageFile) {
                // Gunakan asset() helper untuk jalur gambar
                // Sesuaikan style/height gambar agar terlihat bagus
                $imageTag = '<img src="' . asset('img/emoticons/' . $imageFile) . '" alt="' . $textEmoticon . '" style="vertical-align: middle; height: 24px; margin: 0 2px;">';
                $convertedPesan = str_replace($textEmoticon, $imageTag, $convertedPesan);
            }
        } else {
            $convertedPesan = 'Pesan tidak ditemukan di database.';
        }

        return view('latihan4.index', compact('convertedPesan'));
    }
}