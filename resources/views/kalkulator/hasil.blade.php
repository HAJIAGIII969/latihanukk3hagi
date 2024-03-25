<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANNISA</title>
</head>
<style>
    h1{
        font-size:32px;
        font-weight:bold;
        color:blue;
        margin-top:20px;
        margin-bottom:20px;
    }
    body{
        background-color:green;
        outline:auto;
        border:2px;
        padding:10%;
    }
    form{
        width:400px;
        margin:0 auto;
        padding:20px;
        border:1px;
        border-radius:8px;
        background-color:red;

    }
    input[type="submit"]{
        width:100%;
        padding:25px 40px;
        font-size:large;
        background-color:silver;
        border:none;
        border-radius:10px;
        color:blue;

    }
</style>
<body>
    <h1><center>Kalkulator Sederhana Bangettt</center></h1>
    <center>
        <form action="{{ route('proses.store') }}" method="post">
            @csrf
            <table border=1 width=400>
                <tr>
                    <td colspan=2><input type="number" name="a" id=""></td>
                    <td colspan=2 rowspan=2><input type="submit" value="Reset" name="op"></td>
                  
                </tr>
                <tr>
                    <td colspan=2><input type="number" name="b" id=""></td>
                 
                </tr>
                <tr>
                <td colspan="4">Hasil : <input type="textfied" name="hasil" value="{{$hasil}}" id=""></td>
                   
                </tr> <tr>
                    <td><input type="submit" value="+" name="op"></td>
                    <td><input type="submit" value="-" name="op"></td>
                    <td><input type="submit" value="x" name="op"></td>
                    <td><input type="submit" value="/" name="op"></td>
                </tr>
                <tr>
                <td colspan="4">
                    Nama : Haggie Auberta<br>
                    Kelas: XII PPLG 2<br>
                    LATIHAN UKK
</tr>

                
                

 
</center>
</body>
</html>