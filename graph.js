$(document).ready(function(){
    $.ajax({
      url: "http://localhost:8000/keuangan_data.php",
      method: "GET",
      success: function(data) {
        var item = [];
        var jumlah = [];
  
        for(var i in data) {
          item.push(data[i].item);
          jumlah.push(data[i].jumlah);
        }
  
        var chartdata = {
          labels: item,
          datasets : [
            {
              label: 'Jumlah Anggaran',
              backgroundColor: ['red','yellow','green','blue'],
              borderColor: 'rgba(200, 200, 200, 0.75)',
              hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
              hoverBorderColor: 'rgba(200, 200, 200, 1)',
              data: jumlah
            }
          ]
        };
  
        var ctx = $("#mycanvas");
  
        var barGraph = new Chart(ctx, {
          type: 'bar',
          data: chartdata
        });
      },
      error: function(data) {
        console.log(data);
      }
    });
  });