$(document).ready(function() {
    alert('1');
    $('#admin-autform').submit(function(event) {
        event.preventDefault(); // Prevent default form submission

        var formData = $(this).serialize(); // Serialize form data
        var adminAuthLoginUrl = "{{route('adminAuthlogin')}}";
        console.log(formData);
        $.ajax({
            type: 'POST',
            url: adminAuthLoginUrl,
            data: formData,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                // Handle the response data here
                console.log(response);
            },
            error: function(error) {
                // Handle errors
                console.error('Error:', error);
            }
        });


    });
});