<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Home | Assignment 4: </title>
      <link rel="stylesheet" type="text/css" href="css/stylesz.css"/>
      <?php include "inc/js.inc"; ?>
   </head>

      <body class="fullBackground">
      <header>
         <h1 class = "header-title">Majors in CSC 174</h1>
         <nav><a href="students.php">Browse Students</a></nav>
      </header>
       <section>
       </section>
    <aside>
         <ul>
            <li>IA: <br> Michael Pearson</li>
            <li>Designer: <br> Islomzhan Akhmedov</li>
            <li>Coder: <br> Dewey Bazirake</li>
         </ul>
     </aside>
    <article>
            <p>Different majors within CSC 174. DMS Majors will have their own section to talk about why they chose DMS. Other major will just be on student who is not a DMS major. It is in this order because there are plenty of DMS majors in the class thus they should go before any other major in the class that is listed</p>
    </article>
      <main>
            <h1>Check Out Now! </h1>
            <h2>DMS Majors:</h2>
            <p><a href="students.php#jennifer">Jennifer</a></p>
            <p><a href="students.php#katty">Katty</a></p>
            <h2>Other Majors:</h2>
            <p><a href="students.php#andrew">Andrew</a></p>
      </main>

      <?php include "inc/footer.inc"; ?>

       <script>
       $('.fullBackground').fullClip({
         images: ['images/alexander-kunze.jpg', 'images/augustin-de-montesquiou.jpg', 'images/diego-gennaro.jpg','images/jessica-knowlden.jpg', 'images/persnickety-prints.jpg'],
         transitionTime: 1000,
         wait: 5000
       });
       </script>
   </body>
</html>
