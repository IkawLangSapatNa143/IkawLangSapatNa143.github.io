<?php include 'includes/session.php'; ?>
<?php

  $where = '';
  if(isset($_GET['category'])){
    $catid = $_GET['category'];
    $where = 'AND category_id = '.$catid;
  }
?>
<?php
if(!isset($_SESSION['name']) || trim($_SESSION['name']) == '' ){
     include 'includes/header.php';

}
  

  

  else
  {
     include 'includes/headerstudent.php';
   unset($_SESSION["try"]); 
  }
  if(isset($_SESSION['admin'])){
    ?>
    <script type="text/javascript">
      window.location.href="/libsystem/admin/index.php";
    </script><?php
    
    }?>

<style type="text/css">
  .bbb{
    border-bottom: 5px solid hsl(225, 100%, 60%);
    border-right: 5px solid hsl(225, 100%, 60%);
 
     border-top: 5px solid rgb(255, 215, 0);
    border-left: 5px solid rgb(255, 215, 0);
  }
  div.polaroid {

  padding: 10px 10px 20px 10px;
  border: 1px solid #606060;
  background-color: white;
  box-shadow: 10px 10px 5px #aaaaaa;
}

div.rotate_right {
  float: left;
  -ms-transform: rotate(7deg); /* IE 9 */
  -webkit-transform: rotate(7deg); /* Safari */
  transform: rotate(7deg);
}

div.rotate_left {
  float: left;
  -ms-transform: rotate(-8deg); /* IE 9 */
  -webkit-transform: rotate(-8deg); /* Safari */
  transform: rotate(-8deg);
}
.bubbles{
  position:absolute;
  width:100%;
  height: 100%;
  z-index:0;
  overflow:hidden;
  top:0;
  left:0;
}
.bubble{
  position: absolute;
  bottom:-100px;
  width:40px;
  height: 40px;
  background:yellow;
  border-radius:50%;
  opacity:0.5;
  animation: rise 10s infinite ease-in;

}
.bubble:nth-child(1){
  width:40px;
  height:40px;
  left:10%;
  animation-duration:8s;
}
.bubble:nth-child(2){
  width:20px;
  height:20px;
  left:20%;
  animation-duration:5s;
  animation-delay:1s;
}
.bubble:nth-child(3){
  width:50px;
  height:50px;
  left:35%;
  animation-duration:7s;
  animation-delay:2s;
}
.bubble:nth-child(4){
  width:80px;
  height:80px;
  left:50%;
  animation-duration:11s;
  animation-delay:0s;
}
.bubble:nth-child(5){
  width:35px;
  height:35px;
  left:55%;
  animation-duration:6s;
  animation-delay:1s;
}
.bubble:nth-child(6){
  width:45px;
  height:45px;
  left:65%;
  animation-duration:8s;
  animation-delay:3s;
}
.bubble:nth-child(7){
  width:90px;
  height:90px;
  left:70%;
  animation-duration:12s;
  animation-delay:2s;
}
.bubble:nth-child(8){
  width:25px;
  height:25px;
  left:80%;
  animation-duration:6s;
  animation-delay:2s;
}
.bubble:nth-child(9){
  width:15px;
  height:15px;
  left:70%;
  animation-duration:5s;
  animation-delay:1s;
}
.bubble:nth-child(10){
  width:90px;
  height:90px;
  left:25%;
  animation-duration:10s;
  animation-delay:4s;
}
@keyframes rise{
  0%{
    bottom:-100px;
    transform:translateX(0);
  }
  50%{
    transform:translate(100px);
  }
  100%{
    bottom:1080px;
    transform:translateX(-200px);
  }
}
</style>
<section class="pt-4 " style="background-image: url(assets/img/asdqwe.jpg);  height: 90%;
background-repeat:no-repeat;
-webkit-background-size:cover;
-moz-background-size:cover;
-o-background-size:cover;
background-size:cover;
background-position:center;

 background-attachment: fixed;  padding: 10px;

/* Center the image */"> 
        <div class="container">
          <div class="row align-items-center pb-8" >
 
            <div class="col-md-10 col-lg-10 offset-lg-1 text-md-start  py-6 "  style="color: white;  padding: 10px; text-align: justify; text-shadow: 5px 5px 5px #000000; border: 2px solid white">
              <h1 class="text-center py-4" style="color: white;  font-family: 'JetBrains Mono',monospace;font-weight: bold;text-transform: uppercase">Web-based Thesis Archiving Management System With Plagiarism Checker Cavite State University Bacoor Campus</h1>
              <p class="text-center " style="background-color:hsl(225, 100%, 60%); ">The proposed archiving management system is responsible to improve the efficiency of the process of documentation electronically. </p>
            </div>
          </div>
        </div>
      </section>


      <!-- <section> begin ============================-->
      <section style="  box-shadow: 0 0px 10px  black;" >

      
        <div class="container" style="margin-top: -9vh">
        <div class="bubbles">
      <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    
  </div>
          <div class="row">
            <h1 class="text-center mb-5" style="color: black;  font-family: 'JetBrains Mono',monospace; font-weight: bold; " > LIBRARY GALLERY</h1>
             


          <div class="col-md-3 col-sm-3" style="">
             <div class="polaroid rotate_right " style="width: 90%; ">
  <img src="assets/img/gallery/1q.jpg" alt="Pulpit rock" width="100%" height="100%" style="margin-bottom: 20%; " >
  
</div>
          </div>
            
                  <div class="col-md-3 col-sm-3">
             <div class="polaroid rotate_left " style="width: 90%">
  <img src="assets/img/gallery/2q.jpg" alt="Pulpit rock" width="100%" height="100%" style="margin-bottom: 20%;" >

</div>
</div>
               <div class="col-md-3 col-sm-3">
             <div class="polaroid rotate_right " style="width: 90%">
  <img src="assets/img/gallery/3q.jpg" alt="Pulpit rock" width="100%" height="100%" style="margin-bottom: 20%;">

</div>
 </div>
             <div class="col-md-3 col-sm-3">
             <div class="polaroid rotate_left " style="width: 90%">
  <img src="assets/img/gallery/4q.jpg" alt="Pulpit rock" width="100%" height="100%" style="margin-bottom: 20%;">

</div>
</div>
   
    <div class="col-md-3 col-sm-3">
             <div class="polaroid rotate_left " style="width: 90%">
  <img src="assets/img/gallery/5q.jpg" alt="Pulpit rock" width="100%" height="100%" style="margin-bottom: 20%;">

</div>
</div>
               <div class="col-md-3 col-sm-3">
             <div class="polaroid rotate_right " style="width: 90%">
  <img src="assets/img/gallery/6q.jpg" alt="Pulpit rock" width="100%" height="100%" style="margin-bottom: 20%;">
</div>
 </div>
    <div class="col-md-3 col-sm-3">
             <div class="polaroid rotate_left " style="width: 90%">
  <img src="assets/img/gallery/7q.jpg" alt="Pulpit rock" width="100%" height="100%" style="margin-bottom: 20%;">

</div>
</div>
               <div class="col-md-3 col-sm-3">
             <div class="polaroid rotate_right " style="width: 90%">
  <img src="assets/img/gallery/8q.jpg" alt="Pulpit rock" width="100%" height="100%" style="margin-bottom: 20%;">

</div>
 </div>
         
          </div>

        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->
<section style="background-color:  #CCFFFF; ">

   <div class="container">
          <div class="row">
            <h1 class="text-center" style="color: black; margin-top:-10vh; color: black;  font-family: 'JetBrains Mono',monospace; font-weight: bold; " >About the System</h1>
            

            <div class="col-md-4 ">
              <div class=" "><img class=" w-25 " src="assets/img/db.png" alt="courses"  style="margin-left: 37%;" />
                 
              </div>
                <div class="col-md-12 mb-4">
                  <p class="col-md-12 text-center">The system is capable of Uploading, storing, viewing and searching of research documents and can be accessed by students with an account.</p>
             
          </div>
            </div>

             <div class="col-md-4  ">
              <div class="  "><img class=" w-25 " src="assets/img/reg.png" alt="courses" style="margin-left: 38%;" />
                
              </div>
                 <div class="col-md-12 mb-4">
             <p class="col-md-12 text-center">The system provides users to create accounts for security purposes. Before accessing the system, you must first submit proof that you are a university member, examples include Id and registration.</p>
          </div>
            </div>

 <div class="col-md-4 mb-4">
       <div class=" "><img class=" w-25" src="assets/img/plags.png" alt="courses" style="margin-left: 37%;" />
                
              </div>
              <div class="col-md-12">
             <p class="col-md-12 text-center">The system is capable of detecting plagiarized contents. This module will ensure that only unique thesis documents, not duplicates, are stored in the system. </p>
          </div>
            </div>
</div>


</div>

</section>



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-0" style="background-image: url(assets/img/asd.jpg);  height: 100%; /* You must set a specified height */
  background-position: center; margin-top:-90px;
  padding: 10px;
  box-shadow: 0 0px 20px  black; " >

        <div class="container" >
          <div class="row align-items-center">
           
            <div class="col-md-12 col-lg-6  offset-lg-6" style="color: white;  padding: 10px; text-align: justify; text-shadow: 2px 2px 4px #000000;">
              <h3 class="my-4" style="color: white;  font-family: 'JetBrains Mono',monospace; font-weight: bold; ">MISSION</h3>
              <p>Cavite State University shall provide excellent, equitable and relevant educational opportunities in the arts, sciences and technology through quality instruction and responsive research and development activities. It shall produce professional, skilled and morally upright individuals for global competitiveness.</p>
              
       
              <h3 class="my-4"  style="color: white;  font-family: 'JetBrains Mono',monospace; font-weight: bold; ">VISION</h3>
              <p>The premier university in historic Cavite recognized for excellence in the development of globally competitive and morally upright individuals</p>
              
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section>
        <div class="bg-holder" >
        </div>
        <!--/.bg-holder-->
   <?php 
                       $sql = "SELECT * FROM books WHERE status=2";
                      $query = $conn->query($sql);
                         $sql1 = "SELECT * FROM students WHERE userlvl=4 OR userlvl=3";;
                      $query1 = $conn->query($sql1);
                       $sql2 = "SELECT * FROM course";
                      $query2 = $conn->query($sql2);
                     
                        ?>
        <div class="container">
          <div class="row" >
            <div class="col-sm-6 col-lg-4 text-center mb-5"><img src="assets/img/gallery/cta.png" height="100" alt="..." />
              <h1 class="my-2"><?php echo $query->num_rows; ?></h1>
              <p class="fw-bold" style="color: black;">TOTAL THESIS</p>
            </div>
            <div class="col-sm-6 col-lg-4 text-center mb-5"><img src="assets/img/gallery/learners.png" height="100" alt="..." />
              <h1 class="my-2"><?php echo $query1->num_rows; ?></h1>
              <p class="fw-bold" style="color: black;">TOTAL USERS</p>
            </div>
            <div class="col-sm-6 col-lg-4 text-center mb-5"><img src="assets/img/gallery/published.png" height="100" alt="..." />
              <h1 class="my-2"><?php echo $query2->num_rows; ?></h1>
              <p class="fw-bold" style="color: black;">TOTAL PROGRAMS</p>
            </div>
            
          </div>
        </div>
      </section>



    <?php include 'includes/footer.php'; ?>

   <?php include 'includes/login_modal.php'; ?>
   <?php include 'validation.php'; ?>

    </main>
  
    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&amp;family=Rubik:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
  </body>

</html>

<script>
$(function(){
  $('#catlist').on('change', function(){
    if($(this).val() == 0){
      window.location = 'thesis.php';
    }
    else{
      window.location = 'thesis.php?category='+$(this).val();
    }
    
  });
});
$(document).on('click', '.new', function(e){
    e.preventDefault();
  
  $('#addnew').modal('show');
  



  
});
 $(document).on('click', '.infos', function(e){
    e.preventDefault();
   var id = $(this).data('id');
  $('#pdf').modal('show');
  getRowss(id);



  
});
  $(document).on('click', '.prof', function(e){
    e.preventDefault();
   var id = $(this).data('id');
  $('#prof').modal('show');
  getRowss(id);



  
});
    $(document).on('click', '.log', function(e){
    e.preventDefault();
   var id = $(this).data('id');
  $('#out').modal('show');
  getRowss(id);



  
});

   
    $(function(){
        //instantiate your content as modal
        var username = '<?php echo $_SESSION['try'] != NULL; ?>';
   
    if (username) {
        $('#login').modal({
            //modal options here, like keyboard: false for e.g.
        });
       

        //show the modal when dom is ready
        $('#login').modal('show');
        <?php unset($_SESSION["try"]); ?>
}
    });


function getRowss(id){
  $.ajax({
    type: 'POST',
    url: 'libthesis_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      
       $('#try').html(response.title);
        
       $('#desc').html(response.abstract);
          $('#program').html(response.course);
   
     
    }
  });
}


</script>