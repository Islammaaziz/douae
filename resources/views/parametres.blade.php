
@extends('layouts.app') <!-- Assurez-vous d'avoir un layout global -->

@section('content')
    <div class="container">
        <h1>Paramètres</h1>
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="darkModeSwitch">
            <label class="form-check-label" for="darkModeSwitch">Mode sombre</label>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const darkModeSwitch = document.getElementById('darkModeSwitch');

            darkModeSwitch.addEventListener('change', function() {
                document.body.classList.toggle('bg-dark');
                document.body.classList.toggle('text-light');
            });
        });
    </script>
@endsection