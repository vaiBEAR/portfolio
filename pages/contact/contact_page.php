<!DOCTYPE html>
<html>

<head>
    <title>Contact</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="/portfolio/img/lg_logo.png">
    <style>
        body {
            background-color: #30292F;
            font-family: Arial, Helvetica, sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }



        input[type=submit]:hover {
            background-color: #0d6efd;
        }
    </style>
</head>

<body>
    <div class="row">
        <div class="col-sm-12">
            <div class="container mt-5">

                <div class="text-white">
                    <div class="text-center">
                        <h2>CONTACT 📠</h2>
                        <a type="button" class="btn btn-primary" href="/portfolio/index.php">Home</a>
                    </div>
                    </br></br>
                    <div class="mt-1 p-5 bg-primary text-white rounded">
                        <form action="action.php" id="form1" name="form1" method="POST">
                            <label for="name">NAME</label>
                            <input type="text" placeholder="Your name..." name="nome" id="nome">

                            <label for="matter">MATTER</label>
                            <input type="text" placeholder="Matter..." name="assunto" id="assunto">

                            <label for="message">Message</label>
                            <textarea name="mensagem" id="mensagem" style="height:200px" placeholder="Type here..."></textarea>

                            </br>
                            <input type="submit" value="Submit" class="btn btn-success">
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
    </br></br>

</body>

</html>