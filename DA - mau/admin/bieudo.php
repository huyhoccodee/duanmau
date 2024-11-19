<div class="row">
        <div class="row frmtitle"><h1>Biểu đồ</h1></div>
        <div class="row2 frmcontent">
            <div id="myChart" style="width:100%; width:900px; height:600px; align-items: center"></div>
            <script>
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

// Set Data
          const data = google.visualization.arrayToDataTable([
            ['Contry', 'Mhl'],
            ['Hàn Quốc',30.0],
            ['Thái Lan',13.0],
            ['Hoa Kỳ',10.0],
            ['Nhật bản',17.0],
            ['Châu Âu',23.0],
            ['Khác',7.0]
          ]);

// Set Options
          const options = {
            title:'Thị trường mỹ phẩm Việt Nam',
            is3D:true
          };

// Draw
          const chart = new google.visualization.PieChart(document.getElementById('myChart'));
          chart.draw(data, options);

        }
            </script>
          
        </div>
      </div>
    </div>