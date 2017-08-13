<html>



<body>
<form action="" method="post">
<div>


<input name="id" name="getValue" />


<input type="submit" name="submit" value="Submit" />
</div>
</form>


</body>
<?php

if (isset($_POST['submit']))
    {
        // get the form data
        $name = htmlentities($_POST['getValue'], ENT_QUOTES);
       

        // check that firstname and lastname are both not empty
        if ($firstname == '' || $lastname == '')
        {
            // if they are empty, show an error message and display the form
            $error = 'ERROR: Please fill in all required fields!';
            renderForm($firstname, $lastname, $error);
        }
        else
        {
            // insert the new record into the database
            if ($stmt = $mysqli->prepare("INSERT newdataentry (BillNo, ClientName) VALUES (?, ?)"))
            {
                $stmt->bind_param("ss", $firstname, $lastname);
                $stmt->execute();
                $stmt->close();
            }
            // show an error if the query has an error
            else
            {
                echo "ERROR: Could not prepare SQL statement.";
            }

            // redirec the user
            
        }

    }
    // if the form hasn't been submitted yet, show the form
    else
    {
       renderForm();
    }
}


?>


    </html>