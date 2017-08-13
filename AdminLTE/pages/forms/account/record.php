<?php
/*
Allows the user to both create new records and edit existing records
*/

// connect to the database
$server = 'localhost'; // Server Name
$user = 'root'; // Username
$pass = ''; // Password
$db = 'rbsoft'; // Database Name     

$mysqli = new mysqli($server, $user, $pass, $db);

// show errors (remove this line if on a live site)
mysqli_report(MYSQLI_REPORT_ERROR);

// creates the new/edit record form
// since this form is used multiple times in this file, I have made it a function that is easily reusable
function renderForm($first = '', $last ='', $error = '', $id = '')
{ 

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>

<?php if ($id != '') { echo "Edit Record"; } else { echo "New Record"; } ?>

</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>

<h1><?php if ($id != '') { echo "Edit Record"; } else { echo "New Record"; } ?></h1>
<?php if ($error != '') {
echo "<div style='padding:4px; border:1px solid red; color:red'>" . $error
. "</div>";
} ?>

<form action="" method="post">
<div>

<?php if ($id != '') { ?>
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<p>ID: <?php echo $id; ?></p>
<?php } ?>


<strong>First Name: *</strong> <input type="text" name="firstname"
value="<?php echo $first; ?>"/><br/>

<strong>Last Name: *</strong> <input type="text" name="lastname"
value="<?php echo $last; ?>"/>

<p>* required</p>

<input type="submit" name="submit" value="Submit" />
</div>
</form>
</body>
</html>

<?php }



/*

EDIT RECORD

*/
// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id']))
    {
// if the form's submit button is clicked, we need to process the form
    if (isset($_POST['submit']))
        {
        // make sure the 'id' in the URL is valid
       
                // get variables from the URL/form
                $id = $_POST['id'];
                $firstname = htmlentities($_POST['firstname'], ENT_QUOTES);
                $lastname = htmlentities($_POST['lastname'], ENT_QUOTES);

                // check that firstname and lastname are both not empty
                if ($firstname == '' || $lastname == '')
                {
                    // if they are empty, show an error message and display the form
                    $error = 'ERROR: Please fill in all required fields!';
                    renderForm($firstname, $lastname, $error, $id);
                }
                else
                {
                    // if everything is fine, update the record in the database
                    if ($stmt = $mysqli->prepare("UPDATE newdataentry SET BillNo = ?, ClientName = ?
                        WHERE BillNo=?"))
                        {
                            $stmt->bind_param("ssi", $firstname, $lastname, $id);
                            $stmt->execute();
                            $stmt->close();
                        }
                    // show an error message if the query has an error
                    else
                    {
                        echo "ERROR: could not prepare SQL statement.";
                    }

                    // redirect the user once the form is updated
                        header("Location: view.php");
                }
         
    }
    // if the form hasn't been submitted yet, get the info from the database and show the form
    else
    {
        echo "Error: could not prepare SQL statement";
            
    
        
    }
}



/*

NEW RECORD

*/
// if the 'id' variable is not set in the URL, we must be creating a new record
else
{
    // if the form's submit button is clicked, we need to process the form
    if (isset($_POST['submit']))
    {
        // get the form data
        $firstname = htmlentities($_POST['firstname'], ENT_QUOTES);
        $lastname = htmlentities($_POST['lastname'], ENT_QUOTES);

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
            header("Location: view.php");
        }

    }
    // if the form hasn't been submitted yet, show the form
    else
    {
       renderForm();
    }
}

// close the mysqli connection
$mysqli->close();

?>