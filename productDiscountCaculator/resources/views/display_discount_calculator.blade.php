<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ứng dụng Product Discount Calculator</title>
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
        padding: 20px;
    }

    input {
        width: 400px;
        height: 25px;
    }
</style>
<body>
<div>
    <form action="/discount_calculator" method="post">
        @csrf
        <table>
            <tr>
                <td>Product Description:</td>
                <td><input type="text" name="product" placeholder="Tên sản phẩm"></td>
            </tr>
            <tr>
                <td>List Price:</td>
                <td><input type="text" name="price" placeholder="Giá niêm yết của sản phẩm"></td>
            </tr>
            <tr>
                <td>Discount Percent:</td>
                <td><input type="text" name="discount" placeholder="Tỷ lệ chiết khấu (n% * 0,1)"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit">Calculate Discount</button>
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>
