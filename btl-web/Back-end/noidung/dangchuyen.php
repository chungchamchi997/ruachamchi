<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<title>upload</title>
</head>
<body>
	<div id="box">
		<div class='tieude'> <h1>upload chuyện</h1></div>
		<div class='noidung'>
			<form method="POST" enctype="multipart/form-data" >
				Chọn tệp:<input type="file" name="upload"/>
				<input type="submit" name="sumit" value="upload"/>
			</form>
			<?php 
			if(isset($_post['sumit'])){
				if($_files['upload']['error']>0){
					echo"<br> upload file lỗi!";
				}
				else {
					move_uploaded_file($_files['upload'] ['tmp_name'],
						'upload/'.$_files['upload']['name']);
					echo"<br> upload dữ liệu thành công!"
					echo"<pre>";
					print_r($_files['upload']);
					echo"</pre>";
					$tr="upload/".$_files['upload']['name'];
			} 
			?>

		</div>
		
	</div>
	
</body>
</html>