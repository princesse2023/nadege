@extends('Layouts.Base')

@section('content')
    <div class="content" style="padding-top:30px">

        <div class="my-3 p-3 bg-body  rounded shadow-sm" style="height: 500px !important;padding-bottom: 8px !importante; ">
            <div class="contentAjout">
                <h2 class="border-bottom pb-2 mb-0">Liste de tous les eleves de l'école</h2>
                <div class="d-flex" role="search">
                    <input class="form-control me-2" type="text" id="barreRecherche" placeholder="Rechercher...">
                </div>
            </div>
            <h4>
                @if (Session::has('status'))
                    {{ Session::get('status') }}
                @endif
            </h4>
            <div style=" overflow:scroll; height:90%">


                <table class="table table-dark table-striped">
                    <thead style=" position:sticky; top:0px !important">
                        <tr>
                            <th scope="col">N°</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prenom</th>
                            <th scope="col">Classes</th>
                            <th class="classetenu" scope="col">Moyenne</th>
                            <th scope="col" class="classetenu">
                                Action
                            </th>
                        </tr>
                    </thead>

                    <tbody class="entetetab">
                        {{-- @if ($Eleves == null)
                            <h3> Acun Eleve enregistré.</h3>
                        @else
                            @foreach ($Eleves as $Eleve)
                            @endforeach
                        @endif --}}
                        <tr>
                            <th scope="row">{{ $loop->index + 1 }}</th>
                            <td>{{ $Eleve->firstname }}</td>
                            <td>{{ $Eleve->lastname }}</td>
                            <td>{{ $Eleve->classe->libelle }}</td>
                            <td class="classetenu"> <a class="liennombrclasse" href="">'↨'</a></td>
                            <td class="classetenu">

                                <a class="btn btn-success" href="">Plus d'infos</a>

                            </td>
                        </tr>



                    </tbody>


                </table>
            </div>
            {{-- {{ $Eleves->links() }} --}}

        </div>
    </div>

@endsection
