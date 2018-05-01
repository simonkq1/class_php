<form action="class_2.php" method="post">
    Account: <input type="text" name="account"/>
    <br>
    Password: <input type="password" name="password"/>
    <br>
    Gender: Male<input type="radio" name="gender" value="Male"/>
    Female<input type="radio" name="gender" value="Female"/>
    <br>
    Hobby:
    1<input type="checkbox" name="like[]" value="1">
    2<input type="checkbox" name="like[]" value="2">
    3<input type="checkbox" name="like[]" value="3"><br>&emsp;&emsp;&emsp;&nbsp;
    4<input type="checkbox" name="like[]" value="4">
    5<input type="checkbox" name="like[]" value="5">
    6<input type="checkbox" name="like[]" value="6">
    <br>
    地區:
    <select name="zipcode">
        <option value="1">北屯區</option>
        <option value="2">西屯區</option>
        <option value="3">南屯區</option>
        <option value="4">中區</option>
    </select>
    <br>
    <textarea name="memo" rows="5" cols="60"></textarea>
    <br>
    <input type="file" name="upload">

    <br>
    <input type="submit">
</form>

