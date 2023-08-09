<?php
// Assuming you have already established a connection to the database in $db variable
$id = $_POST['user_id'];
global $db;
$query = "SELECT * FROM users WHERE id = $id";
$result = mysqli_query($db, $query);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the form has been submitted
    if (isset($_POST['user_id']) && isset($_POST['booking_date'])) {
        $user_id = $_POST['user_id'];
        $booking_date = $_POST['booking_date'];

        // You should perform proper validation and sanitization of the input data before inserting into the database to prevent SQL injection.

        // Assuming you have a table named 'bookings' with columns 'user_id' and 'booking_date'
        $insert_query = "INSERT INTO bookings (id, booking_date) VALUES ('$user_id', '$booking_date')";
        mysqli_query($db, $insert_query);

        // You can also add some success message or redirect the user to another page after successful booking.
    }
}



// Check if the query was successful and fetch the user's data
if ($result && mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
    // Display the complete user profile

    echo '<div class= "d-flex flex-wrap flex-lg-nowrap">';
    echo '<div class="pageprofile p-1 col-lg-8 col-md-12 col-sm-12 m-2">';
    echo '<img class="dp img-fluid rounded-circle" src="assets/img/profile/' . $user['profile_pic'] . '" alt="' . $user['fname'] . ' ' . $user['lname'] . '">';
    echo '<div class="paragraph ">';
    echo '<div>';
    echo '<h5 class="fw-bold" >'. $user['fname'] . ' ' . $user['lname'] . '</h5>';

    echo '<p><i class="bi bi-list"></i> ' . $user['profession'] . '</p>';
    
    echo '<i class="bi bi-chat-square-quote"></i> ';
    // echo '<a class="social" href="tel:' . $user['phone'] . '"><i class="bi bi-telephone-fill"></i></a>';
    // echo '<a class="social" href="https://www.facebook.com/' . $user['facebook'] . '" target="_blank"><i class="bi bi-facebook"></i></a>';
    // echo '<a class="social" href="https://www.instagram.com/' . $user['insta'] . '" target="_blank" ><i class="bi bi-instagram"></i></a>';
    echo '<p class="mb-3"><i class="bi bi-chat-square-quote"></i> ' . $user['description'] . '</p>';
    
    echo '<div class="social-icons">';
    echo '<a class="social me-2" href="tel:' . $user['phone'] . '"><i class="bi bi-telephone-fill"></i></a>';
    echo '<a class="social me-2" href="https://www.facebook.com/' . $user['facebook'] . '" target="_blank"><i class="bi bi-facebook"></i></a>';
    echo '<a class="social me-2" href="https://www.instagram.com/' . $user['insta'] . '" target="_blank"><i class="bi bi-instagram"></i></a>';
    echo '</div>';
   
    // echo '<p>' . $user['description'] . '</p>';
    
    echo '</div>';



//     echo '<div class="d-flex flex-wrap flex-lg-nowrap">';
//     echo '<div class="pageprofile p-1 col-lg-8 col-md-12 col-sm-12 m-2">';
//     echo '<img class="dp img-fluid rounded-circle" src="assets/img/profile/' . $user['profile_pic'] . '" alt="' . $user['fname'] . ' ' . $user['lname'] . '">';

// echo '<div class="paragraph">';
// echo '<h5 class="fw-bold">' . $user['fname'] . ' ' . $user['lname'] . '</h5>';
// echo '<p class="mb-2"><i class="bi bi-list"></i> ' . $user['profession'] . '</p>';
// echo '<p class="mb-3"><i class="bi bi-chat-square-quote"></i> ' . $user['description'] . '</p>';

// echo '<div class="social-icons">';
// echo '<a class="social me-2" href="tel:' . $user['phone'] . '"><i class="bi bi-telephone-fill"></i></a>';
// echo '<a class="social me-2" href="https://www.facebook.com/' . $user['facebook'] . '" target="_blank"><i class="bi bi-facebook"></i></a>';
// echo '<a class="social me-2" href="https://www.instagram.com/' . $user['insta'] . '" target="_blank"><i class="bi bi-instagram"></i></a>';
// echo '</div>';

// echo '</div>'; // Close paragraph div
// echo '</div>'; // Close pageprofile div

// Rest of your code...



    

    // Add the date input field to allow users to select a date for booking
    // echo '</div>';
    // echo '</div>';
    // echo '<div class="pageprofile  m-2 p-3 col-lg-4 col-md-12 col-sm-12  " >';
    // echo '<form method="post">';
    // echo '<label for="booking_date">Select booking date:</label>';
    // echo '<input type="date" id="booking_date" name="booking_date" required>';
    // echo '<input type="hidden" name="user_id" value="' . $user['id'] . '">';
    // echo '<button type="submit">Book</button>';
    // echo '</form>';


//     echo '</div>';
// echo '</div>';
// echo '<div class="pageprofile m-2 p-3 col-lg-4 col-md-12 col-sm-12">';
// echo '<form method="post" class="border p-4 rounded shadow-sm">';
// echo '<h5 class="mb-4">Select booking date:</h5>';
// echo '<div class="mb-3">';
// echo '<label for="booking_date" class="form-label">Booking Date</label>';
// echo '<input type="date" id="booking_date" name="booking_date" class="form-control" required>';
// echo '</div>';
// echo '<input type="hidden" name="user_id" value="' . $user['id'] . '">';
// echo '<button type="submit" class="btn btn-primary">Book</button>';
// echo '</form>';


echo '</div>';
echo '</div>';
echo '<div class="pageprofile m-2 p-3 col-lg-3 col-md-6 col-sm-12">';
echo '<form method="post" class="border p-3 rounded shadow-sm">';
echo '<h5 class="mb-3">Select booking date:</h5>';
echo '<div class="mb-2">';
echo '<label for="booking_date" class="form-label">Booking Date</label>';
echo '<input type="date" id="booking_date" name="booking_date" class="form-control" required>';
echo '</div>';
echo '<input type="hidden" name="user_id" value="' . $user['id'] . '">';
echo '<button type="submit" class="btn btn-primary btn-sm">Book</button>';
echo '</form>';



    // Check if the user is booked on the selected date and display the appropriate message
    if (isset($_POST['booking_date'])) {
        // The form has been submitted, process the booking date
        $booking_date = $_POST['booking_date'];
    
        $check_booking_query = "SELECT * FROM bookings WHERE id = $id AND booking_date = '$booking_date'";
        $booking_result = mysqli_query($db, $check_booking_query);
        
        if ($booking_result && mysqli_num_rows($booking_result) > 0) {
            echo '<div class="alert alert-info mb-3">Booked Dates:</div>';
            echo '<ul class="list-group mb-3">';
            
            while ($booked_date_row = mysqli_fetch_assoc($booking_result)) {
                echo '<li class="list-group-item">' . $booked_date_row['booking_date'] . '</li>';
            }
            
            echo '</ul>';
            echo '<div class="alert alert-warning">User is booked on ' . $booking_date . '</div>';
        }
        
    } else {
        // The form has not been submitted, but you can still display the user's booked dates if any.
        $booked_dates_query = "SELECT booking_date FROM bookings WHERE id = $id";
        $booked_dates_result = mysqli_query($db, $booked_dates_query);
        if ($booked_dates_result && mysqli_num_rows($booked_dates_result) > 0) {
            echo '<div class="alert alert-info">Booked Dates:</div>';
            echo '<ul>';
            while ($booked_date_row = mysqli_fetch_assoc($booked_dates_result)) {
                echo '<li>' . $booked_date_row['booking_date'] . '</li>';
            }
            echo '</ul>';
        } else {
            echo '<div class="alert alert-success"> ' . $user['fname'] .   ' is available!</div>';
        }
    }

    echo '</div>';
    echo '</div>';
    echo '</div>';
}

// Close the database connection
mysqli_close($db);
?>
