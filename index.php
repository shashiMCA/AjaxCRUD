<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
 <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>   


  </head>
  
  <body>
      <div class="container">
          <h2 class="text-primary text-center" > This is simple AJAX CRUD operation</h2> 
          <div class="d-flex justify-content-end">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> Add New </button>  
          </div>
          
          <h3 class=" btn  text-danger "> All Record </h3>
          <div id="recordContainer"> 
          
          </div>
          
        <!-- this is modal pop up code--> 
     <div class="modal" id="myModal">
     <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add new Records</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
          <div class="form-group">
              <label>First Name:</label>
              <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Your first name" required="">
          </div>    
          
          <div class="form-group">
              <label>Last Name:</label>
              <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Your last name" required="">
          </div>  
          
          <div class="form-group">
              <label>Email:</label>
              <input type="text" name="emailid" id="emailid" class="form-control" placeholder="Your Email-Id" required="">
          </div> 
      </div>

      <!-- Modal footer -->
     
      <div class="modal-footer">
          <button type="button" class="btn btn-success text-left" data-dismiss="modal" onclick="addRecord()">Submit</button> 
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
        <!--  modal pop up code end here-->
          
          
          
          
      </div>
      
      <script type="text/javascript">
          function addRecord(){
              var f_name = $(#firstname).val();
              var f_name = $(#lastname).val();
              var f_name = $(#emailid).val();
          $.ajax({
              url: '',
              type:'',
              data:
              
          });
              
               }
      
      </script>
    
   
  </body>
</html>
