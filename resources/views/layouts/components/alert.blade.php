<script>
    // Fungsi untuk mengatur opsi SweetAlert berdasarkan tema sistem
    function getSwalOptions(icon, title, text) {
        return {
            icon: icon,
            title: title,
            text: text,
            confirmButtonColor: 'var(--theme-default)',
            background: $('body').hasClass('dark-only') ? '#262932' : '#fff',
            color: $('body').hasClass('dark-only') ? '#b2b2c4' : '#000',
        };
    }
</script>

@if (session('success'))
    <script>
        Swal.fire(getSwalOptions('success', 'Berhasil!', '{{ session('success') }}'));
    </script>
@elseif (session('error'))
    <script>
        Swal.fire(getSwalOptions('error', 'Terjadi Kesalahan!', '{{ session('error') }}'));
    </script>
@endif
@if (session('info'))
    <script>
        Swal.fire(getSwalOptions('info', 'Informasi!', '{{ session('info') }}'));
    </script>
@endif
@if (session('warning'))
    <script>
        Swal.fire(getSwalOptions('warning', 'Peringatan!', '{{ session('warning') }}'));
    </script>
@endif

@if ($errors->any())
    <script>
        const errorHtml = `
            <ul style="text-align: left; padding: 0 20px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        `;

        Swal.fire({
            ...getSwalOptions('error', 'Terjadi Kesalahan!', ''),
            html: errorHtml,
        });
    </script>
@endif
