<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Client Mail</title>
</head>
<body>

    <h3>A new client has signed up</h3>
    <hr>
    <pre>
        <p>Basic Information</p>
        <h4>Full Name: <b><?php echo $data['name']?></b></h4>
        <h4>Email: <b><?php echo $data['email']?></b></h4>

        <hr>
        <p>More Information</p>
        <p><b>Auto Messaging Template:</b></p>
        <br>
        <pre><?php echo $data['messaging_template']?></pre>
        <hr>
        <p><b>Email Template for Premium Users</b></p>
        <br>
        <pre><?php echo $data['email_template']?></pre>
        <hr>

        <p><b>Target Audience/s</b></p>
        <br>
        <pre><?php echo $data['target_audience']?></pre>

        <hr>

        <p><b>Target Industry/ies</b></p>
        <br>
        <ol>
            <?php if(isset($data['industries_list'])):?>
                <?php if(sizeof($data['industries_list']) >0 ): ?>
                    <?php foreach($data['industries_list'] as $industry):?>
                        <li><p> <?php echo $industry ?> </p></li>
                    <?php endforeach ?>
                <?php endif; ?>
            <?php endif;?>
        </ol>

        <hr>
        <h4>Login Details</h4>
        <p>Linkedin Username: <b><?php echo $data['linkedin_username']?></b></p>
        <p>Linkedin Password: <b><?php echo $data['linkedin_password']?></b></p>
        <p>Gmail Username: <b><?php echo $data['gmail_username']?></b></p>
        <p>Linkedin Password: <b><?php echo $data['gmail_password']?></b></p>

        <hr>
</body>
</html>