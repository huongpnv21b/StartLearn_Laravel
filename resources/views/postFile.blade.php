<html>
<head>
</heard>
<body>
 
    <form action="{{url('postFile')}}" method="post" enctype="multipart/form-data"> 
    {{ csrf_field() }}
        <input type="file" name="myFile" id="myFile">
        <input type ="submit">
    </form>
</body>

</html>