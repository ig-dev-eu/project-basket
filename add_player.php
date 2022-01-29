<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="functionalpage.css">
    <style>
        form {
            width: 50%;
            color: white;
            font-size: 1.7rem;
        }

        form button {
            width: 100%;
        }

        input {
            height: 45px;
        }

        .btn {
            color: var(--basket-orange);
            border-color: var(--basket-orange);
            font-size: 1.7rem;
            transition: 0.2s;
        }

        .btn:hover {
            background-color: var(--basket-orange);
            border-color: var(--basket-orange);
            transform: scale(1.05);
        }
    </style>
</head>

<body>
    <form>
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name">
        </div>
        <div class="mb-3">
            <label for="surname" class="form-label">Cognome</label>
            <input type="text" class="form-control" id="surname">
        </div>
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="height" class="form-label">Altezza (cm)</label>
                    <input type="number" class="form-control" id="height">
                </div>
            </div>
            <div class="col-8">
                <label for="test" class="form-label"></label>
                <button type="submit" class="btn btn-outline-primary" id="test">Invio</button>
            </div>
        </div>
    </form>

</body>

</html>
