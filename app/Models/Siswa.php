<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Siswa extends Model
{
    protected $fillable = ['nama',
        'kelas',
        'nisn',
        'alamat',
        'tempat_tanggal_lahir',
    ];

    // Accessor untuk menampilkan format yang diinginkan
    public function getTempatTanggalLahirFormattedAttribute()
    {
        // Misal format penyimpanan "Banyuwangi, 2003-02-27"
        $data = explode(', ', $this->tempat_tanggal_lahir);
        $tempat = $data[0] ?? '';
        $tanggal = isset($data[1]) ? Carbon::parse($data[1])->translatedFormat('d F Y') : '';

        return "{$tempat}, {$tanggal}";
    }
}
