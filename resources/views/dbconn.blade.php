<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel & MYSQL DB Connection</title>
</head>
<body>
    <div>
        <?php
            // Corrected the function name from DB::connectio() to DB::connection()
            // Corrected the function name from getPdO() to getPDO()
            // Corrected the function name from getDatabase to getDatabaseName()
            use Illuminate\Support\Facades\DB; 

            if(DB::connection()->getPDO()) {
                echo "Successfully Connected to DB and DB Name is " . DB::connection()->getDatabaseName();
            }
        ?>
    </div>
</body>
</html>
