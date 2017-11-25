<html>
    <head>
       
        <title>Site authentication</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" href="css/main.css">
    </head>
    
    <body>
        <div class="container">
            <div class="row div-spacing">
                <div class="col-md-4 offset-md-4">
                    <form action="check_user.php" method="POST">
                        <div class="form-group">
                            <label for="emailAddressField">
                                E-mail:
                            </label>
                            <input type="email"
                                   name="email"
                                   class="form-control"
                                   id="emailAddressField"
                                   required>
                        </div>
                        <div class="form-group">
                            <label for="passwordField">
                                Password:
                            </label>
                            <input type="password"
                                   name="pass"
                                   class="form-control"
                                   id="passwordField"
                                   required>
                        </div>
                        <input type="submit"
                               class="btn btn-primary btn-block">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>


<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

