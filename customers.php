
<?php
include "header.php";

<div class="row m-2 p-2 ">
    <div class="col-4 ">
        <p class="h3 grey"> Customers</p>
    </div>
    <div class="col-8">
        <!-- Button trigger modal -->
        <button type="button" class="m-1 btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
           Add Customers
        </button>
        <a href= "getreport.php" class="m-1 btn btn-danger float-end">Get Report</a>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="text-center modal-title" id="exampleModalLabel">ADD STUDENT</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <div class="row p-2">
                                <div class="col-md-12">
                                    <label class="form-label grey">firstName</label>
                                    <input class="form-control" type="text" name="fistName" placeholder="">
                                </div>
                            </div>
                            <div class="row p-2">
                                <div class="col-md-12">
                                    <label class="form-label grey">secondName</label>
                                    <input class="form-control" type="text" name="secondName" placeholder="">
                                </div>
                            </div>
                            <div class="row p-2">
                                <div class="col-md-12">
                                    <label class="form-label grey">Email Address</label>
                                    <input class="form-control" type="text" name="emailAddress">
                                </div>
                            </div>
                             <div class="row p-2">
                                <div class="col-md-12">
                                    <label class="form-label grey">phoneNumber</label>
                                    <input class="form-control" type="text" name="phoneNumber">
                                </div>
                            </div>                        
                              
                          
                          
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="col-6 btn btn-outline-danger" value="SUBMIT">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include "Config.php";
$sql = "SELECT * FROM `customer`";
$results = mysqli_query($link,$sql);

if ($results){
    $data =mysqli_num_rows($results);
    if ($data>0){
          echo "<table class='table table-striped table-hover'>";
          echo "<tr>";
          echo "<td>#</td";
          echo "<td>fistName</td";
          echo "<td>secondName</td";
          echo "<td>emailAddress</td";
          echo "<td>phoneNumber</td>"
         
          echo "</tr>";
          while ($row =mysqli_fetch_array($results)) {
              echo "<tr>";
           
              echo "<td>" . $row['firstName'] . "</td>";
              echo "<td>" . $row['emailAddress'] . "</td>";
             
              echo "<td>

                    <a class='m-2' href='delete.php?id=".$row['ID']."'><span class='fa fa-trash'></span></a>
                    <a class='m-2' href='update.php?id=".$row['ID']."'><span class='fa fa-pencil'></span></a>
                    <a class='m-2' href='view.php?id=".$row['ID']."'><span class='fa fa-eye'></span></a>

                   </td>";
              echo "</tr>";

          }
    }else{
        echo "<p class = 'alert alert-primary'>No Record found in the database</p>";
    }
}

?>