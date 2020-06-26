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

   </form>

</body>
</html><!DOCTYPE html>
<html>
@extends('layout.head')
<body>
   <form action="" method="post">
   		@csrf
   	 <p>Nhap tieu de </p>
   	 <input type="text" name="tieude">
   	 <p>Nhap description</p>
   	 <input type="text" name="mota">
     <p>Nhap copyr</p>
     <input type="text" name="copyr">
   	 <button type="submit" name="OK"> OK</button>

   </form>
   
</body>
</html>