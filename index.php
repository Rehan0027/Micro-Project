<!DOCTYPE html>
<html lang="en">
<head>
<title>Palindrome</title>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <?php include 'style.php' ?> 
</head>
<body>
 
<div class="container">
    <form id="contact" action="" method="post">
        <h3>Palindrome Checker</h3>
        <h4>
            <?php
                // Check if the form has been submitted
                if(isset($_POST['submit'])){
                    // Retrieve the user input from the textarea
                    $input = $_POST['palin'];

                    // Clean the input: remove non-alphanumeric characters and convert to lowercase
                    $cleanedInput = preg_replace("/[^A-Za-z0-9]/", '', strtolower($input));
                    // Reverse the cleaned input
                    $revInput = strrev($cleanedInput);

                    // Compare the cleaned input with its reversed version
                    if($cleanedInput === $revInput){
                        // If they match, it is a palindrome
                        echo "Yes,It is Palindrome";
                    }else{
                        // If they do not match, it is not a palindrome
                        echo "No $input is not Palindrome";
                    }
                }
            ?>
        </h4>
        <fieldset>
            <!-- Textarea for user to input a word or sentence -->
            <textarea placeholder="Type your word..." name="palin" required></textarea>
        </fieldset>
        <fieldset>
            <!-- Submit button to check the palindrome -->
            <button name="submit" type="submit" id="contact-submit">Submit</button>
        </fieldset>
        <p class="copyright">Designed by <a href=""  target="_blank" title="Colorlib">RehanKhan</a></p>
    </form> 
</div>

</body>
</html>