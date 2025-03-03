<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h3>{{ $header }}</h3>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb" id="breadcrumb">
                <li class="breadcrumb-item"><a href=""> <svg class="stroke-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                        </svg></a></li>
            </ol>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var breadcrumb = document.getElementById('breadcrumb');
        var pathArray = window.location.pathname.split('/').filter(function(el) {
            return el.length != 0;
        });

        pathArray.forEach(function(path, index) {
            if (index === 0) return;
            var li = document.createElement('li');
            li.classList.add('breadcrumb-item');
            if (index === pathArray.length - 1) {
                li.classList.add('active');
                li.textContent = path.charAt(0).toUpperCase() + path.slice(1);
            } else {
                var a = document.createElement('a');
                a.href = '/' + pathArray.slice(0, index + 1).join('/');
                a.textContent = path.charAt(0).toUpperCase() + path.slice(1);
                li.appendChild(a);
            }
            breadcrumb.appendChild(li);
        });
    });
</script>