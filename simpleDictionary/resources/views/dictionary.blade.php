<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ứng dụng Từ điển đơn giản</title>
</head>
<style>
    div {
        position: fixed;
        border: 3px solid red;
        top: 100px;
        background-color: white;
        z-index: 1;
        width: 40%;
        padding: 20px;
    }

    input {
        width: 400px;
        height: 30px;
    }
</style>
<body>
<div>
    <h1 style="color: blue">Simple Dictionary</h1>
    <form action="/dictionary" method="post">
        @csrf
        <table>
            <tr>
                <td></td>
                <td><input type="text" name="search" placeholder="Nhập từ cần tìm."></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit">Tra cứu</button>
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>
