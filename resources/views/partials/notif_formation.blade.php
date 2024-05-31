<!-- Code pour afficher les notifications de formations -->
@foreach($formations as $formation)
    <a class="dropdown-item d-flex align-items-center" href="#">
        <div class="mr-3">
            <div class="icon-circle bg-primary">
                <i class="fas fa-file-alt text-white"></i>
            </div>
        </div>
        <div>
            <div class="small text-gray-500">{{ $formation->date_debut }}</div>
            <span class="font-weight-bold">Une nouvelle formation ajoutée : {{ $formation->titre }}</span>
        </div>
    </a>
@endforeach