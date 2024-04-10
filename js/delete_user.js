
$(document).ready(function() {
    // Handle click event for delete button
    $('.delete-user-btn').on('click', function() {
        if (confirm('Are you sure you want to delete this user?')) {
            // Get the user's email from the data attribute
            var userEmail = $(this).data('email');

            // Send AJAX request to delete_user.inc.php
            $.ajax({
                url: 'includes/delete_user.inc.php',
                method: 'POST',
                data: { email: userEmail },
                success: function(response) {
                    // Handle success response (redirect or display message)
                    console.log(response); // Log response for debugging
                    // Reload page or perform other actions
                    location.reload(); // Reload the page after deletion
                },
                error: function(xhr, status, error) {
                    // Handle error
                    console.error(error); // Log error for debugging
                    alert('An unexpected error occurred! Please try again later.');
                }
            });
        }
    });
});

