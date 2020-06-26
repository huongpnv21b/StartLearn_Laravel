<html>
<head>
<title> Tinh dien tich hinh tam giac va hinh tu giac</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <div  class="align-baseline" style="border: 1px solid; width:200px;height:300px;textalign:center; margin-left:40%;">
    <form method="post" action="" class="hero-image">
    @csrf
    <div class="form-group" style="textalign:center;">
        <p>Nhap canh a:</p>
        <input text="number" name="canha" required>
        <p> Nhap canh b: </p>
        <input text="number" name="canhb" required><br><br>
        <select name="type">
            <option value="tamgiac">Tam Giac</option>
            <option value="hinhvuong">Hinh Vuong</option>          
        </select><br><br>
         <button type="submit" class="btn btn-success"> Submit</button>
    </div>
    </form>
</body>
</html>
