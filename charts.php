<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Biểu đồ - Thống Kê</title>
    <link
      rel="stylesheet"
      href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css"
    />
    <link rel="stylesheet" href="css/list.css" />
    <style>
      select{
        border:1px solid black;
        width:200px; 
        height: 40px; 
        border-radius:10px; 
        display:flex;
        justify-content:center;
        margin-left:45%;
        font-size:20px;
      }
      select:hover,option:hover{
        background:#47a5d1;
      }
    </style>
  </head>
  <body>
  <section class="home-content">
      <h1 style="display:flex; justify-content: center; color: #47a5d1"class="heading">Thống Kê Đơn Hàng <span style="padding-left:10px" id="text-date"></span></h1>
  </section>
  <p>
    <select class="select-date" style=" ">
      <option value="365ngay">365 ngày qua</option>
      <option value="7ngay">7 ngày qua</option>
      <option value="28ngay">28 ngày qua</option>
      <option value="90ngay">90 ngày qua</option>
    </select>
  </p>
    <div id="chart" style="height: 450px"></div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        thongke();
        var char = new Morris.Bar({

        element: "chart",

        xkey: 'date',
        ykeys: ["order","sales","quantify"],
        labels: ["Đơn hàng","Doanh thu","Số lượng bán ra"],
        });

        $('.select-date').change(function(){
          var thoigian = $(this).val();
          if(thoigian == "7ngay"){
            var text = "7 ngày qua";
          }
          else if(thoigian == "28ngay")
          {
            var text = "28 ngày qua";
          }
          else if(thoigian =="90ngay")
          {
            var text = "90 ngày qua";
          }
          else{
            var text = "365 ngày qua";
          }
          $.ajax({
            url:"thongke.php",
            method:"POST",
            dataType : "JSON",
            data:{ thoigian : thoigian },

            success:function(data){
              char.setData(data);
              $('#text-date').text(text);
            }

          });
        });

       
        function thongke(){
          var text = "365 ngày qua";
          $('#text-date').text(text);
          $.ajax({
            url:"thongke.php",
            method:"POST",
            dataType : "JSON",

            success:function(data){
              char.setData(data);
              $('#text-date').text(text);
            }

          });
        }
      });
      
    </script>
  </body>
</html>
