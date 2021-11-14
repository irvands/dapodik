@component('mail::message')
# Notifikasi Pengajuan Username Dapodik

Selamat berkas pengajuan Username Dapodik anda sudah berhasil diverifikasi dan disetujui, Username Dapodik akan diinput dalam waktu
maksimal 3x24 jam. Klik tombol dibawah untuk melihat.

@component('mail::button', ['url' => 'http://dapodikv2.gaptechdev.xyz/user/username-dapodik/disetujui'])
Lihat Username
@endcomponent

Terimakasih,<br>
{{ config('app.name') }}
@endcomponent
