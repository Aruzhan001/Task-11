<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title></title>
      <style>
			.cards{
				display:flex;
				flex-wrap:wrap;
				width:700px;
				margin-left:auto;
				margin-right:auto;
			}
			.cards .card{
				width:250px;
				border:1px solid red;
				border-radius:5px;
				display:flex;
				margin:10px;
			}
			.card .title{
				font-size:20px;
				font-weight:bold;
			}
			.card .price{
				color:green;
			}
			.card .description{
				display:flex;
				flex-direction:column;
			}
			.card .price{
				flex-grow:1;
			}
			.card .year{
				font-weight:bold;
				font-size:18px;
			}
		</style>
   </head>
   <body>
      <div class="cards">
      <?php
         $conn = mysqli_connect('localhost', 'root', '', 'test');
         $conn1 = mysqli_connect('localhost', 'root', '', 'test');
         $sql = "SELECT * FROM cars,makers WHERE cars.maker_id = makers.maker_id";
         $result = mysqli_query($conn, $sql);
         if (mysqli_num_rows($result) > 0) {
             while($row = mysqli_fetch_assoc($result)) {
                echo    '<div class="card">
                           <img src="'.$row['image'].'" style="width:100px;height:100px;"/>
                           <div class="description">
                              <div class="title">'.$row['title'].' '.$row["model"].'</div>
                              <div class="price">'.$row['price'].'$</div>
                              <div class="year">'.(2017-$row['Year']).' years</div>
                           </div>
                        </div>';
             }
         } else {
             echo "0 results";
         }
         mysqli_close($conn);
       ?>
       </div>
   </body>
</html>