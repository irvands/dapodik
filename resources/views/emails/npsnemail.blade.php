@component('mail::message')
# Notifikasi Pengajuan NPSN Baru

Selamat berkas pengajuan NPSN anda sudah berhasil diverifikasi dan disetujui, NPSN anda akan keluar dalam waktu
maksimal 3x24 jam. Klik tombol dibawah untuk melihat.

@component('mail::button', ['url' => 'http://dapodikv2.gaptechdev.xyz/user/npsn/disetujui'])
Lihat NPSN
@endcomponent

Terimakasih,<br>
{{ config('app.name') }}
@endcomponent
