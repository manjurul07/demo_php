<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .form-user {
            width: 40vw;
        }
        .output {
            border: 1px solid blue;
            border-radius: 20px;
            height: 100px;
            width: 38vw;
            margin: 15px auto;
            padding: 10px 15px;
        }
    </style>
</head>
<body>

    <?php 
    include "index5.php"
    ?>

    <div class="container mt-5 form-user">
        <form action="" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Number One</label>
                <input type="text" class="form-control"name="num1" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Number Two</label>
                <input type="text" class="form-control" name="num2" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Oparetor</label>
                <select name="op" class="form-select" aria-label="Default select example">
                    <option value="+" <?php echo (isset($_POST['op']) && $_POST['op']== '+') ? 'selected="selected"': "" ; ?>>Summation</option>
            <option value="-" <?php echo (isset($_POST['op']) && $_POST['op']== '-') ? 'selected="selected"': "" ; ?>>Submission</option>
            <option value="*" <?php echo (isset($_POST['op']) && $_POST['op']== '*') ? 'selected="selected"': "" ; ?>>Multiplication</option>
            <option value="/" <?php echo (isset($_POST['op']) && $_POST['op']== '/') ? 'selected="selected"': "" ; ?>>Divison</option>
                </select>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="output"> OUTPUT IS :
        <?php 
            if (isset($_POST['submit'])) {

            // print_r($_POST);

            $num01 = $_POST['num1'];
            $num02 = $_POST['num2'];
            $op = $_POST['op'];


            $cal = new Calculator();
            $cal->num1 = $num01;
            $cal->num2 = $num02;
            $cal->op = $op;

            $result = $cal->calc();

            echo $result;

            }
         ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>