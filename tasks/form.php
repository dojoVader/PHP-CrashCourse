<?php // Handle the form

if (isset($_POST)) {
    var_dump($_POST);
}

?>

<html>
   <head>
      <style>
         table, th, td {
         border: 1px solid;
         }
      </style>
   </head>
   <body>
      <form action="#" method="post">
         <ul>
            <li>
               <label for="name">Name:</label>
               <input type="text" id="name" name="user_name">
            </li>
            <li>
               <label for="mail">E-mail:</label>
               <input type="email" id="mail" name="user_email">
            </li>
            <li>
               <label for="msg">Message:</label>
               <textarea id="msg" name="user_message"></textarea>
            </li>
         </ul>
         <input type="submit">
      </form>
   </body>
</html>