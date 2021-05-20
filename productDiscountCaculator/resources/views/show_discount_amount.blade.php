<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    div {
        position: fixed;
        border: 3px solid red;
        top: 30%;
        background-color: white;
        z-index: 1;
        margin: 0 30%;
        width: 40%;
    }
    p{
        margin: 20px;
        color: green;
    }
</style>
<body>
<div>
    <p><b>Product description: {{$productDescription}}</b></p>
    <p><b>Price(Giá niêm yết): {{$listPrice}} vnđ</b></p>
    <p><b>Discount Percent(Tỷ lệ chiết khấu): ({{$discountPercent}}% * 0,1)</b></p>
    <p><b>Discount Amount(Lượng chiết khấu): {{$discountAmount}} vnđ</b></p>
    <p><b>Discount Price(Giá sau khi đã được chiết khấu): {{$discountPrice}} vnđ</b></p>
</div>
</body>
</html>
