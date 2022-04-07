<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact Us - 101 Seafood</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- tailwind css -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <!-- custome css -->
    <link rel="stylesheet" href="css/app.css">
    <style>
      #contact input,
      #contact textarea {
        padding: 12px 16px;
        border: 1px solid #ddd;
        margin-bottom: 12px;
      }
    </style>
</head>

<body>
  <?php include './common/header.php'; ?>

  <section id="contact">
    <div class="container m-auto">
      <div class="flex flex-col-reverse sm:flex-row justify-start mt-20">
        <div class="w-full md:w-1/2">
          <img src="/img/iceland.png" alt="iceland map" width="100%">
        </div>
        <div class="w-full md:w-1/3">
          <h1 class="mb-10">Write to us</h1>
          <form action="/handler.php" type="POST">
            <div>
              <input class="w-full" type="text" name="fullname" placeholder="Your full name *" required>
            </div>
            <div>
             <input class="w-full" type="email" name="email" placeholder="Your email *" required>
            </div>
            <div>
            <input class="w-full" type="phone" name="phone" placeholder="Your phone">
            </div>
            <div>
              <textarea class="w-full" rows="5" name="message" placeholder="Your message *"></textarea>
            </div>
            <?php
              if(!empty($_SESSION['message'])) {
                ?>
                <div class="email-sent">
                  Email sucessfully sent!
                </div>
                <?php
              }
              session_unset();
            ?>
            <div>
              <button class="btn btn__primary w-56 h-14 rounded-sm relative z-50">Send message</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <?php include './common/footer.php'; ?>
</body>
</html>
