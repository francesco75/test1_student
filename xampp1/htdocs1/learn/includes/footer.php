<footer>
        <div class="py-3 text-center">
         <hr>
         Copyright @ Francesco Scollo
         </div> 
     </footer>   
 </body>
 <script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Subjects", "Marks", { role: "style" } ],
        ["Algebra", <?php echo $student_found->va;?>, "gold"],
        ["Geometry", <?php echo $student_found->vg;?>, "#ffffff"],
        ["History", <?php echo $student_found->vh;?>, "gold"],
        ["Geography",<?php echo $student_found->vgeo;?>, "color: #ffffff"],
        ["Science", <?php echo $student_found->vs;?>, "gold"],
        ["Art", <?php echo $student_found->vart;?>, "#ffffff"],
        ["Music",<?php echo $student_found->vmus;?>, "gold"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Marks",
        height: 400,
        bar: {groupWidth: "98%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
      chart.draw(view, options);
  }
  $(window).resize(function(){
        drawChart();
    });

  
  </script>
  
</html>