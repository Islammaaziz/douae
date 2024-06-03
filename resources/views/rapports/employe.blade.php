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
                <th>Email</th>
                <th>Poste</th>
                <th>Date d'embauche</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
                <tr>
                    <td>{{ $employee->id }}</td>
                    <td>{{ $employee->first_name }}</td>
                    <td>{{ $employee->last_name }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->poste }}</td>
                    <td>{{ $employee->Date_d_embauche }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Les Stagiaires</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Tuteur</th>
                <th>Mission</th>
            </tr>
        </thead>
        <tbody>
            @foreach($stageaires as $stagiaire)
                <tr>
                    <td>{{ $stagiaire->id }}</td>
                    <td>{{ $stagiaire->first_name }}</td>
                    <td>{{ $stagiaire->last_name }}</td>
                    <td>{{ $stagiaire->email }}</td>
                    <td>{{ $stagiaire->Tuteur }}</td>
                    <td>{{ $stagiaire->Mission }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

   
   
   
</body>
</html>