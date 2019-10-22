<script>
    $(".delete-data").on('click', function () {
        var linkURL = $(this).attr("href");
        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            dangerMode: true,
            buttons: ["No", "Yes"],
            closeOnEsc: false,
            closeOnClickOutside: false,
        }).then((confirm) => {
            if (confirm) {
                swal({icon: "success", buttons: false});
                window.location.href = linkURL;
            }
        });
        return false;
    });

    $(".btn_signOut").click(function () {
        swal({
            title: 'Sign Out',
            text: "Are you sure to end your session?",
            icon: 'warning',
            dangerMode: true,
            buttons: ["No", "Yes"],
            closeOnEsc: false,
            closeOnClickOutside: false,
        }).then((confirm) => {
            if (confirm) {
                swal({icon: "success", text: 'You will be redirected to the home page.', buttons: false});
                $("#logout-form").submit();
            }
        });
        return false;
    });
</script>
