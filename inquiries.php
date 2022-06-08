<?php 

    function show_confirmation_message() { 
        return "
            <div class='alert alert-success w-100'>
                <p> Your inquiry has been sent! please wait 2-3 business days </p>
            </div>
        ";

        $_SESSION['sent'] = 1;
    }

    $answer = isset($_POST['answer']);

    if(isset($_POST['answer']) && !is_null($_POST['email']) ):
        
        $name = stripslashes($_POST['name']);
        $email_address = stripslashes($_POST['email']);
        $email_subject = stripslashes($_POST['subject']);
        $email_message = stripslashes($_POST['message']);

        $to = "mphopost@sawita.co.za";
        $subject = "$email_subject";
        $message = "$email_message";
        $headers = "From: $email_address" . "\r\n" .
                'Reply-To: webmaster@sawita.co.za' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
        mail($to, $subject, $message, $headers);

        echo show_confirmation_message();

        echo "
            <script>
                (function(){
                    setTimeout(()=>{
                        location.href='#results';
                    }, 1500);

                    setTimeout(()=>{
                        location.replace('https://sawita.co.za');
                    }, 6000)
                }())
            </script>
        ";
    endif;

    

