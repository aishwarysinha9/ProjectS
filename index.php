<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Suggestion_Box</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6" style="background-image: url('imgs/suggestion1.jpg'); height: 657px;"><img src="imgs/suggestion.svg" style="margin: 10%;"></div>
                <div class="col-sm-6">
                    <div class="container-fluid">
                        <center><h2 class="display-4">Suggestion Box</h2></center>
                        <hr>
                    </div>
                    <form action="suggestion-page.php" method="post" id="suggestion_form">
                         
                         <div class="form-group">
                          <label for="name">Name :</label>
                          <input type="text" class="form-control" placeholder="Enter Full Name" id="sname" name="sname" required="true">
                         </div>
                        <div class="form-group">
                          <label for="email">Email address:</label>
                          <input type="email" class="form-control" placeholder="Enter Email" id="email_s" name="email_s" required="true">
                         </div>
                        <div class="form-group">
                          <label for="subject">Subject :</label>
                          <input type="text" class="form-control" placeholder="Describe your subjection in one line." id="sub" name="sub" required="true">
                         </div>
                        <div class="form-group">
                             <label for="suggestions">Suggestion:</label>
                             <textarea class="form-control" rows="5" id="suggestion" name="suggestion" placeholder="Detailed Suggestion here. Under 200 words." required="true"></textarea>
                        </div>
                         <div class="form-group form-check">
                            <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" required="true"> I accept all <a href="#">terms and conditions.</a>
                              </label>
                              </div>
                             <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            </div>
    </body>
</html>
