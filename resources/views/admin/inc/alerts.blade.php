@if (Session::has('success'))
<div class="toastr-message" data-type="success">{{ session('success') }}</div>
@endif

@if (Session::has('error'))
<div class="toastr-message" data-type="error">{{ session('error') }}</div>
@endif

@if (Session::has('info'))
<div class="toastr-message" data-type="info">{{ session('info') }}</div>
@endif

@if (Session::has('warning'))
<div class="toastr-message" data-type="warning">{{ session('warning') }}</div>
@endif

<script>
    $(document).ready(function() {
        $('.toastr-message').each(function() {
            var messageType = $(this).data('type');
            var messageText = $(this).text();
            toastr.options = {
                "closeButton": false,
                "progressBar": true,
                "extendedTimeOut": 0,
                "timeOut": 0,
            };

            switch (messageType) {
                case 'success':
                    toastr.success(messageText);
                    break;
                case 'error':
                    toastr.error(messageText);
                    break;
                case 'info':
                    toastr.info(messageText);
                    break;
                case 'warning':
                    toastr.warning(messageText);
                    break;
                default:
                    toastr.info(messageText);
            }
        });
    });
</script>
