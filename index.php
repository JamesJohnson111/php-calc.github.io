<!DOCTYPE html>
<html>
<head>
	<title>PHP - Calculator</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />

    <!--links start-->

    <!--Bootstrap 5 CDN-->
    <!--Bootstrap 5 CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
          integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous" />

    <!--Bootstrap 5 JS-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js"
            integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>

    <!--Links end-->

    <link rel="stylesheet" type="text/css" href="css/php.css" />
    <link rel="stylesheet" type="text/css" href="css/fonts.css" />
</head>
<body>
    <div class="back">
        <div class="cal shadow">
            <div class="container">
                <div class="row">
                    <div class="col p-5">
                        <h1 class="px-3 ml-5 cal-name">
                            PHP<br>
                            Calculator
                        </h1>
                    </div>
                    <div class="col p-5 text-center">
                        <form method="POST">
                            <input type="text" class="form-control" placeholder="Enter Your First Number" name="num1" />
                            <input type="text" class="form-control" placeholder="Enter Your Second Number" name="num2" />
                            <select class="form-control operations" name='operations'>
                                <option value="add">Add</option>
                                <option value="sub">Subtract</option>
                                <option value="mul">Multiply</option>
                                <option value="div">Divide</option>
                            </select>
                            <button type="submit" class="btn" name="submit">Calculate</button>
                        </form>
                    </div>
                </div>
                <h1 style="font-size: 4rem;" class="text-white text-center">
                    <?php
                        if(isset($_POST['submit'])) {
                            $num1 = $_POST['num1'];
                            $num2 = $_POST['num2'];
                            $operation = $_POST['operations'];
                            if($num1 != '' && $num2 != '') {
                                if(filter_var($num1, FILTER_VALIDATE_INT) && filter_var($num2, FILTER_VALIDATE_INT)) {
                                    switch($operation) {
                                        case 'add':
                                            $var = $num1 + $num2;
                                            echo 'The sum of '.$num1.' and '.$num2.' is '.$var;
                                            break;
                                        case 'sub':
                                            $var = $num1 - $num2;
                                            echo 'After the subtraction of '.$num1.' and '.$num2.' is '.$var;
                                            break;
                                        case 'mul':
                                            $var = $num1 * $num2;
                                            echo 'The multiplycation of '.$num1.' and '.$num2.' is '.$var;
                                            break;
                                        case 'div':
                                            $var = $num1 / $num2;
                                            echo 'The division of '.$num1.' and '.$num2.' is '.$var;
                                            break;
                                        default:
                                            $var = $num1 + $num2;
                                            echo 'The sum of '.$num1.' and '.$num2.' is '.$var;
                                            break;
                                    }
                                }else {
                                    echo 'Only integers are valid';
                                }
                            }else {
                                echo 'Error!!!';
                            }
                        }
                    ?>
                </h1>
            </div>
        </div>
    </div>
</body>
</html>