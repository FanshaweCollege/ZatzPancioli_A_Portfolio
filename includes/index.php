<?php

include 'functions.php';

if (isset($_GET['work'])) {
    // pass the connection and the movie id to a function
    $data = get_single_work($conn, $_GET['work']);
    echo json_encode($data);
}

else {
    // pass the connection and the movie id to a function
    $data = get_all_works($conn);
    echo json_encode($data);
}
?>