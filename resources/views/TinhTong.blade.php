<!DOCTYPE html>
<html>
@extends('layout.head')
<body>
   <form action="" method="post">
   		@csrf
   	 <p>Nhap so a</p>
   	 <input type="text" name="soa">
   	 <p>Nhap so b</p>
   	 <input type="text" name="sob">
   	 <button type="submit" name="Tinh"> Tinh</button>
	@include('blocks.error')
   </form>

</body>
</html>
