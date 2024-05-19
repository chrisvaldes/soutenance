<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Import Jurys</h2>
    <form action="{{route("file.import")}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="jury_file" id="" accept=".xlsx, .xls, .csv">
        <br>
        <input type="submi" value="Upload">
    </form>
    <table>
        <thead>
            <tr>
                <th>N° Jury</th>
                <th>Etudiant</th>
                <th>Thème</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
            </tr>
        </tbody>
    </table>
</body>
</html>

{{-- comment va se passé le jury de chaque département?
donc le numéro du jury ne peut etre unique car chaque départment
à un jury allant de 1 à x --}}
