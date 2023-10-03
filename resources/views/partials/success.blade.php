
<script>
    @if (session()->has('success'))
        swal({
            title: {{session('status')}},
            //text: "You clicked the button!",
            icon: "success",
            button: "OK!",
        });
    
    @endif
</script>

