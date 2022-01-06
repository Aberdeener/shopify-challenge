@if(session('success'))
    <div class="notification is-success is-light">
        <span>{{ session('success') }}</span>
    </div>
@endif

@foreach($errors->all() as $error)
    <div class="notification is-danger is-light">
        <span>{{ $error }}</span>
    </div>
@endforeach

<script>
    window.onload = () => {
        setTimeout(function() {
            for (let notif of document.getElementsByClassName('notification')) {
                notif.style.display = 'none';
            }
        }, 2250);
    }
</script>
