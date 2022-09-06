<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="description" content="A free and easy to use site for matrix calculators. You can solve the determinant, eiganvalues, eiganvectors, inverse of a matrix, transpose a matrix, multiplly, add and subtract matrixes">

  <link rel="stylesheet" href="static/reset.css">
  <link rel="stylesheet" href="static/style.css">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/mathjs/10.6.4/math.js"
    integrity="sha512-BbVEDjbqdN3Eow8+empLMrJlxXRj5nEitiCAK5A1pUr66+jLVejo3PmjIaucRnjlB0P9R3rBUs3g5jXc8ti+fQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script async custom-element="amp-ad" src="https://cdn.ampproject.org/v0/amp-ad-0.1.js"></script>
  <title>MatrixLab - Contact Us</title>

  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5086704841008531"
     crossorigin="anonymous"></script>
</head>

<body>
    
<section class="contact-us-section">
    <header class="header sticky-top">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">

            <a class="navbar-brand" href="home.html">MATRIX<mark>LAB</mark></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbarNav">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse " id="collapsibleNavbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home.html">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">CONTACT US</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

<?php

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $phone = $_POST['phone'];
        $mailFrom = $_POST['email'];
        $message = $_POST['message'];


        $mailTo = 'matrix.lab@outlook.com';
        
        $headers = "From :".$mailFrom;
        
        $text = "E-mail from".$name."\ntelephone:".$phone."\n".$message;
        


        mail($mailTo, $subject, $txt, $headers);
        header("Location: contact.php?mailsend");
    }
?>



    <div class="container" id="form">
        <h1>Contact <mark>Us</mark></h1>
        <form method="POST" class="row g-3">

            <div class="col-md-8">
                <label class="form-label" for="name">Full name</label>
                <input class="form-control" type="text" name="name" placeholder="name" required>
            </div>
            <div class="col-md-4">

                <label class="form-label" for="phone">Telephone (optional)</label>
                <input class="form-control" type="tel" name="phone" placeholder="telephone">
            </div>
            <div class="col-md-8">
                <label class="form-label" for="email">Email</label>
                <input class="form-control" type="email" name="email" placeholder="email" required>
            </div>
            <div class="col-md-4">
                <label class="form-label" for="subject">Subject</label>
                <input class="form-control" type="text" name="subject" placeholder="subject" required>
            </div>
            <div class="col-md-12" id="textareaForm">
                <label class="form-label" for="message">Comments</label>
                <textarea class="form-control" name="message" placeholder="message" rows="3" required></textarea>
            </div>
            <div class="col-md-12" id="buttonForm">
                <button class="btn btn-primary" type="submit">Send</button>
            </div>
        </form>
    </div>

  <!-- jQuery library -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  

  <script src="static/index.js"></script>
</body>

</html>

</section>
