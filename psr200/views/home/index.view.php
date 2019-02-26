<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Country Name</th>
                <th>Continent</th>
            </tr>
            <tbody>
                <?php foreach($countries_data as $c): ?>
                <tr>
                    <td><?= $c->Name ?></td>
                    <td><?= $c->Continent ?></td>

                </tr>
            </tbody>
        </thead>
    </table>

</body>
</html>