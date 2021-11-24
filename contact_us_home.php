<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Contact Us</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="contact.css">
        <meta name="viewport" content="initial-scale=1.0 width=device-width">
    </head>
    
    <body>

        <?php
            require('/home/**StudentNumber**/public_html/ass03/header.php');
        ?>


        <div style="  background-color: rgb(233, 227, 227);
        " id="container">

            


            <form action="contact_us.php" method="POST">
                <!-- to center the elements -->
                <div class="mx-auto" style="width: 600px;" id="main">

                    <div class="row justify-content-center">
                        <header>
                            <h2>Contact Us</h2>
                        </header>
                    </div>
                    
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input type="text" class="form-control" name="Name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="phoneNumber">Phone Number</label>
                        <input type="number" class="form-control" name="phoneNumber" required>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" name="textarea" rows="7" cols="50" placeholder="Enter a message"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>

            </form>

        </div>

    </body>

</html>