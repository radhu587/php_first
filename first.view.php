<hmtl>
<head>
    <title>demo1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>
<body class="container mt-5">
   <ul>
        <?php foreach($output as $dem) :?>
        <div class="card mt-5 ">
            <div class="card-header bg-dark text-white">
                <h4 class="card-title mx-auto"><?= $dem->uname; ?></h4>
            </div>
            <div class="card-body">
                <div class="container">
                <h4><?= $dem->email; ?></h4>
                </div>
             </div>
        </div>
        <?php endforeach; ?>
    </ul>

</body>
</html>