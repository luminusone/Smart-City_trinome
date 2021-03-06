<?php foreach ($users as $row) : ?>


<div class="dashboard-admin">

  <div class="user-present">
    <div class="user">
      <img src="<?php echo $row->avatar?>">
    <p align="center">Admin</p>
    </div>
  </div>

  <div class="user-info">

    <div class="box">
      <div class="container-1">
        <span class="icon"><i class="fa fa-search"></i></span>
        <input type="search" id="search" placeholder="Search..." />
      </div> 
      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    </div>

    <div class="overview">
      <div class="overview-title">
        <h1>Overview</h1>
        <p>Started on <?php echo $row->date ?></p>
      </div>

      <div class="analytic-parent">
        <div class="analytic b1">
          <div class="analytic b1-1">
            <p>First name: <?php echo $row->firstname  ?></p>
            <p>Last name: <?php echo $row->lastname  ?></p>
            <p>Email: <?php echo $row->email?></p>
            <p>Age: <?php echo $row->age ?> years old</p>
          </div>
          <div class="analytic b1-1 location">
            <span><p><strong>Location:</strong>
              <br><?php echo $row->location?>
            </p></span>
            <span><img src="assets/images/ile-de-france.png"></span>
          </div>
        </div>

        <div class="analytic b1">
          <div class="analytic b2">
            <p>Time spend per day</p>

            <!-- Ve do thi thu nhat -->

            
            <div class="containere1">
              <canvas id="myChart0" width="246" height="246" style="display: block;height: 197px;width: 197px;margin: 40px 0 0 0;"></canvas>
            </div>

              <script>
                   
              </script>


            
            
          </div>
          <div class="analytic b3">
            <div class="analytic b1">  
              <div class="analytic b1-1 b3">
                <p>Last updated light
                  <br>
                  <canvas id="myCanvas" width="10" height="25"></canvas>
                  <script>
                    var canvas = document.getElementById('myCanvas');
                    var context = canvas.getContext('2d');
        
                    context.beginPath();    
                    context.moveTo(0, 0);     
                    context.lineTo(0, 1000); 
                    context.lineWidth = 5;     
                    context.strokeStyle = '#524595';  
                    context.stroke();           
                  </script>
                  <?php
                  echo date("d/m/Y - H:i:s");
                  ?>
                </p>
              </div>
              <div class="analytic b1-1 b3 b3-1">
                <p>Last updated pollution
                <br>
                  <canvas id="myCanvas2" width="10" height="25"></canvas>
                  <script>
                    var canvas = document.getElementById('myCanvas2');
                    var context = canvas.getContext('2d');
        
                    context.beginPath();    
                    context.moveTo(0, 0);     
                    context.lineTo(0, 1000); 
                    context.lineWidth = 5;    
                    context.strokeStyle = '#524595';  
                    context.stroke();           
                  </script>
                  <?php
                  echo date("d/m/Y - H:i:s");
                  ?>
                </p>
              </div>
            </div>
            <div class="analytic b4">
              <p>Yearly users</p>
              
              <!-- Ve do thi thu hai-->
         
              <div class="containere">
                <canvas id="myChart" width="492" height="156"></canvas>
              </div>

              <script type="text/javascript" src="assets/js/dashboardChart"></script>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>






