<?php

session_reset();
session_destroy();
header("location: ../index.php?msg=OP51");
?>