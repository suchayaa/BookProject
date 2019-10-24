<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style type="text/css">
		body{
			background-color : #eee;
		}

		.no-border td{
			border:none;
		}
	</style>
</head>
<body>
<br>
	<div class="container">
		<div class="card">
			<h4 class="card-header">เพิ่ม/ลบ/แก้ไข ข้อมูลหนังสือ CodeIgniter</h4>
      <br>
<center><form  action="./data_submit" method="POST" enctype="multipart/form-data" name="form1">
  <h1 align="center">เพิ่มข้อมูลหนังสือ| <a href="search.php">ค้นหาหนังสือ</a></di>
  </h1>
	  
      <table width="353" height="210" border="2" cellpadding="2" cellspacing="0">
        <tbody>
          <tr>
            <th scope="row">ชื่อหนังสือ :</th>
            <td><input type="text" name="bName" id="bName2"></td>
          </tr>
          <tr>
            <th scope="row">ชื่อผู้แต่ง :</th>
            <td><input type="text" name="bAuthor" id="bAuthor"></td>
          </tr>
          <tr>
            <th scope="row">ปีที่พิมพ์:</th>
            <td><input type="number" name="bYear" id="bYear"></td>
          </tr>
          <tr>
            <th scope="row">ประเภทหนังสือ :</th>
            <td><select name="btn" id="btn">
              <option value="1" selected>Knowledge Book</option>
              <option value="2">Fiction Book</option>
              <option value="3">For childrenk</option>
            </select></td>
          </tr>
          <tr>
            <th scope="row">จำนวน :</th>
            <td><input type="number" name="bAmount" id="bAmount"></td>
          </tr>
          <tr>
            <th scope="row">ราคา :</th>
            <td><input type="number" name="bPrice" id="bPrice"></td>
          </tr>

        </tbody>
      </table>
<br>
    <td><input type="submit" name="btnSave" id="btnSave" value="เพิ่มหนังสือ"><br>
    <input type="hidden" name="MM_insert" value="form1">  <br>  </td>
  </form>
</center>
<!----------------------------------------------1--------------------------------------------------------->
<center>
<table action="./data_type_submit" width="272" border="2" cellspacing="0" cellpadding="2">
      <tr>
        <td colspan="2">เพิ่มประเภทหนังสือ</td>
        </tr>
      <tr>
        <td>ประเภท</td>
        <td><label for="type_name"></label>
          <input type="text" name="type_name" id="type_name"></td>
      </tr>
      <tr>
        <td width="127">&nbsp;</td>
        <td width="129"><input type="submit" name="button" id="button" value="Submit"></td>
      </tr>
    </table>
</center>
<br><br>
<!------------------------------------------------2------------------------------------------------------->
<center>
<form method="post" action="./save_item" class="card-body">
				<table ction="./data_type_submit" width="272" border="2" cellspacing="0" cellpadding="2">
					<thead>
						<tr>
							<th colspan="2" width="50px">รหัส</th>
							<th >ประเภทหนังสือ</th>
						</tr>
					</thead>

					<thead>
						<tr>
							<td colspan="2" width="50px" >1</td>
							<td>Knowledge Book</td>
							
						</tr>
						<tr>
							<td colspan="2" width="50px">2</td>
							<td>Fiction Book</td>
							
						</tr>
						<tr>
							<td colspan="2" width="50px">3</td>
							<td>For children</td>
							
						</tr>
					</thead>

					<!-- <tbody> <!--------วนลูปเพื่อแสดงข้อมูล-----$items มาจาก manage_book.php----->
						<!-- <?php foreach($items2 as $row) : ?> 
							<tr>
								<td colspan="2"><?= $row->type_id?></td>
								<td><?= $row->type_name?></td>
							</tr>
						<?php endforeach; ?>
					</tbody> -->
				</table>
			</form>
	<br>
</center>
<!------------------------------------------------3------------------------------------------------------->
			<form method="post" action="./show" class="card-body">
				<table class="table">
					<thead>
						<tr>
							<th width="70px">รหัส</th>
							<th>ชื่อหนังสือ</th>
							<th>ชื่อผู้แต่ง</th>
							<th>ปีที่พิมพ์</th>
							<th>จำนวน</th>
							<th>ประเภท</th>
							<th>ราคา</th>
							<th width="116">จัดการข้อมูล</th>
						</tr>
					</thead>

					<tbody> <!--------วนลูปเพื่อแสดงข้อมูล-----$items มาจาก manage_book.php----->
						<?php foreach($items as $row) : ?> 
							<tr>
								<td><?= $row->id?></td>
								<td><?= $row->b_name?></td>
								<td><?= $row->b_author?></td>
								<td><?= $row->b_year?></td>
								<td><?= $row->b_amount?></td>
								<td><?= $row->type_id?></td>
								<td><?= $row->b_price?></td>
								<td> 
									<div class="row">
										<div class="col">
											<a href="" class="btn btn-warning btn-black btn-sm">
											แก้ไข  <!-------a.btn.btn-warning.btn-black.btn-sm  ทำปุ่ม------------->
											</a> </div>
										<a href="./fordelete?bookid=<?=$row->id?>" class="btn btn-danger btn-black btn-sm">
											ลบ <!-------a.btn.btn-warning.btn-black.btn-sm  ทำปุ่ม------------->
										</a>
										
									</div>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>

					<tfoot>
						<tr>
							<th colspan="8" class="text-right">
							รายการข้อมูลทั้งหมดในระบบ 1 รายการ
							</th>
						</tr>
					</tfoot>
				</table>
			</form>
		</div>
	</div>
</body>
</html>


