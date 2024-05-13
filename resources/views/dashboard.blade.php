<x-app-layout>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <link href="css/bootstrap.min.css" rel="stylesheet">
                <script src="js/bootstrap.bundle.min.js"></script>

<div class="card-header d-flex justify-content-between px-2">
			<span class="align-self-center"></span>
			<a href="{{ route('ajoutPersonnel') }}" title="Add a new personnel" class="btn btn-sm btn-primary">
				<i class="fa-solid fa-circle-plus"></i> Ajouter un personel
			</a>
		</div>


                <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOM</th>
      <th scope="col">PREOM</th>
      <th scope="col">TELEPHONE</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($personnels as $personnel)
    <tr>
      <th scope="row">{{$personnel->id}}</th>
      <td>{{$personnel->nom}}</td>
      <td>{{$personnel->prenom}}</td>
      <td>{{$personnel->telephone}}</td>
      <td class="text-end">
        <div class="btn-group btn-group-sm {{ $personnel->allowActions ? '' : 'disabled' }}">
            <a href="" class="btn btn-primary">
                <i class="fa-solid fa-eye"></i> Regarder
            </a>
            <a href=""
                class="btn btn-primary">
                <i class="fa-solid fa-pen-to-square"></i> Editer
            </a>

            <a href=""
                class="btn btn-primary" onclick="return confirm('Delete this article?')"
                title="Delete article">
                <i class="fa-solid fa-trash"></i> Supprimer
            </a>
        </div>
    </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$personnels->links()}}     
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
