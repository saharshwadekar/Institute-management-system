<?php include("../actions/checkstudent.php") ?>
<?php include("../public/header.php")?>
<?php include("../includes/config.php") ?>

<?php
$email = $_SESSION['useremail'];
$user = "SELECT user.id as id , student.departmentid as departmentid ,student.yearid as yearid FROM user,student WHERE email = '$email' AND user.id = student.id ";
$userresult = mysqli_query($db_conn, $user);
$userrow = mysqli_fetch_object($userresult);

$subquery = "SELECT * FROM subject WHERE subject.departmentid = '$userrow->departmentid'";
$subresult = mysqli_query($db_conn, $subquery);

$totalsubject = mysqli_num_rows($subresult);
while ($subrow = mysqli_fetch_object($subresult)) {
    $present = 0;
    $absent = 0;
?>
<?php 
if($present+$absent == 0){
  echo "0%";
}
else{
  echo (($present)*100)/($present+$absent)."%";
}
?>
<?php
}
?>


<div class="flex overflow-hidden bg-white">
  
<!-- Aside | Sidebar -->
<?php include("sidebar.php")?>

  <div
    class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
  <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
    <main>
      <div class="pt-6 px-4">
            <div class="w-full grid grid-cols-1 xl:grid-cols-2 2xl:grid-cols-4 gap-4 content-center">

              <div class="bg-white shadow rounded-lg p-4 sm:p-6 2xl:col-span-4">
                <div class="mb-4 flex items-center justify-between">
                  <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Attendance</h3>
                  </div>
                </div>
                <div class="flex flex-col m-8">
                    <div class="col-span-4">
                      
                    <canvas id="myChart" style="width:100%; max-width:1200px"></canvas>

                      <script>
                      var xValues = ["DBMS", "DCOM", "AM-4", "TS", "CAO", ""];
                      var yValues = [98, 49, 44, 24, 15, 0];
                      var barColors = ["#2D4356", "#1B6B93","#435B66","#2B2730","#A76F6F",""];


                      new Chart("myChart", {
                        type: "bar",
                        data: {
                          labels: xValues,
                          datasets: [{
                            backgroundColor: barColors,
                            data: yValues
                          }]
                        },
                        options: {
                          legend: {display: false},
                          title: {
                            display: true,
                            text: "30 days Attendance"
                          }
                        }
                      });
                      </script>


                </div>
              </div>

            </div>

          </div>
    </main>
    

<?php include("../public/footer.php")?>