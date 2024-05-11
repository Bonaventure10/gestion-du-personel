<x-app-layout>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/bootstrap.bundle.min.js"></script>


                <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($personnels as $personnel)
    <tr>
      <th scope="row">{{$personnel->id}}</th>
      <td>{{$personnel->nom}}</td>
      <td>{{$personnel->prenom}}</td>
      <td>{{$personnel->telephone}}</td>
    </tr>
    @endforeach
  </tbody>
  {{$personnels->links()}}
</table>
                
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
