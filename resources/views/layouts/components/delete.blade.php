@props([
    'route',
    'message' => 'Apakah kamu yakin ingin menghapus item ini?',
    'title' => 'Hapus Item',
    'icon' => 'fa-solid fa-trash',
])

<li class="delete">
    <button type="button" class="btn btn-link" data-bs-toggle="tooltip" data-bs-placement="top"
        style="border:none; background:none; padding:0;"
        onclick="confirmDelete('{{ $route }}', '{{ $title }}', '{{ $message }}')">
        <i class="fa-solid fa-trash-can"></i>
    </button>
</li>

<script>
    function confirmDelete(route, title, message) {
        Swal.fire({
            title: title,
            text: message,
            icon: 'error',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#8592a3',
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Tidak',
            background: $('body').hasClass('dark-only') ? '#262932' : '#fff',
            color: $('body').hasClass('dark-only') ? '#b2b2c4' : '#000',
        }).then((result) => {
            if (result.isConfirmed) {
                let form = document.createElement('form');
                form.action = route;
                form.method = 'POST';

                let csrfInput = document.createElement('input');
                csrfInput.type = 'hidden';
                csrfInput.name = '_token';
                csrfInput.value = '{{ csrf_token() }}';
                form.appendChild(csrfInput);

                let methodInput = document.createElement('input');
                methodInput.type = 'hidden';
                methodInput.name = '_method';
                methodInput.value = 'DELETE';
                form.appendChild(methodInput);

                document.body.appendChild(form);
                form.submit();
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                Swal.fire({
                    title: "Batal",
                    text: "Kamu tidak jadi menghapus data ini :)",
                    icon: "error",
                    background: $('body').hasClass('dark-only') ? '#262932' : '#fff',
                    color: $('body').hasClass('dark-only') ? '#b2b2c4' : '#000',
                    confirmButtonColor: 'var(--theme-default)',
                });
            }
        });
    }
</script>
