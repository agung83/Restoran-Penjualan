<?php

session_destroy();
echo "
<script>alert('Berhasil Logout');location='login.php';</script>;
";
