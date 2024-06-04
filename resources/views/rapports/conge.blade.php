<!DOCTYPE html>
<html>
<head>
    <title>Rapport des Employés et Stagiaires</title>
    <style>
        /* Styles généraux */
    
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        
        
        h1, h2, p {
            margin-bottom: 10px;
        }
        /* Style pour le cercle */
        
       
        
        
       
        
    </style>
</head>
<body >
    <h1 >BC SKILLS</h1>
    <p>Date: le {{ $date }}</p>

    <h2>Les Employés</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Date de debut</th>
                <th>Date de fin</th>
                <th>commentaire</th>
                <th>le reserve des jours</th>

            </tr>
        </thead>
        <tbody>
            @foreach($conges as $conge)
                <tr>
                    <td>{{ $conge->id }}</td>
                    <td>{{ $conge->first_name }}</td>
                    <td>{{ $conge->laste_name }}</td>
                    <td>{{ $conge->start_date }}</td>
                    <td>{{ $conge->end_date }}</td>
                    <td>{{ $conge->comment }}</td>
                    <td>{{ $conge->annual_conge_days}}</td>

                </tr>
            @endforeach
        </tbody>
    </table>

  
</body>
</html>