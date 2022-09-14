<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Amanah Corp</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="container my-5">
            
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th rowspan="2">WITEL</th>
                        <th colspan="2">2022-06-22</th>
                        <th colspan="2">2022-06-21</th>
                        <th colspan="2">2022-06-20</th>
                        <th colspan="2">2022-06-19</th>
                        <th colspan="2">2022-06-18</th>
                        <th colspan="2">2022-06-17</th>
                        <th colspan="2">2022-06-16</th>
                        <th colspan="2">2022-06-15</th>
                    </tr>
                    <tr>
                        <th>TIKET H-1</th>
                        <th>OPEN</th>
                        <th>TIKET H-1</th>
                        <th>OPEN</th>
                        <th>TIKET H-1</th>
                        <th>OPEN</th>
                        <th>TIKET H-1</th>
                        <th>OPEN</th>
                        <th>TIKET H-1</th>
                        <th>OPEN</th>
                        <th>TIKET H-1</th>
                        <th>OPEN</th>
                        <th>TIKET H-1</th>
                        <th>OPEN</th>
                        <th>TIKET H-1</th>
                        <th>OPEN</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    
                    @endforeach
                </tbody>
            </table>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </body>
</html>
