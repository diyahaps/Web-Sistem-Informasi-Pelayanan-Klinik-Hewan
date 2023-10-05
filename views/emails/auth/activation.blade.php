@component('mail::message')
# Silahkan Aktivasi Akun Anda

Terimakasih sudah membuat akun pelanggan, Silahkan menekan tombol aktivasi untuk proses selanjutnya

@component('mail::button', ['url' => route('auth.activate', [
            'token' => $user->activation_token,
            'email' => $user->email,
        ])
    ]
)
AKTIVASI
@endcomponent

Thanks,<br>
@endcomponent
