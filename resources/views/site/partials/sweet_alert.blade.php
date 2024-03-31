@if(session('status'))
<script>
    setTimeout(() => {
        swal(`{{session('title')}}`, "{{session('message')}}", "{{session('status')}}");
    }, 2000);
</script>
@endif
