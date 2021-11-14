@component('mail::message')
# Notifikasi Pengajuan Perubahan Nomenklatur

Selamat berkas pengajuan Perubahan Nomenklatur anda sudah berhasil diverifikasi dan disetujui, Nomenklatur baru akan aktif dalam waktu
maksimal 3x24 jam. Klik tombol dibawah untuk melihat.

@component('mail::button', ['url' => 'http://dapodikv2.gaptechdev.xyz/user/nomenklatur/disetujui'])
Lihat Nomenklatur
@endcomponent

Terimakasih,<br>
{{ config('app.name') }}
@endcomponent
