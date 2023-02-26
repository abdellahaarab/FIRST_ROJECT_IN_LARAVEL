@extends('base')
@extends('navigation.nav')
@extends('navigation.footer')

@section('continue')
    <div class="mt-5">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="m-5">List Des Notes</h1>
                <div class="form-control">
                    <form action="{{ @route('show') }}" method="get">
                        @csrf   
                        <input type="text" value="{{ $oldvalue }}" class="form-control" name="serch" id="serch">
                        <button type="submit" name="btnSerch" class="btn btn-light m-3">Rechercher</button>
                    </form>
                </div>
            </div>


            @if(@empty($newTable))
                @if ($value !== "")
                  <div class="alert alert-success">{{ $value }}</div>
                @endif
                <table class="table mt-3">
                    <thead class="table-dark">
                        <tr>
                            <th>Nome Complet</th>
                            <th>Note</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        @foreach($notes as $nom => $note)
                        @if ($note > 10) 
                                <tr class="table-info">
                                    <td>{{ $nom  }}</td>
                                    <td>{{ $note  }}</td>
                                </tr>
                            @elseif ($note == 10 || $note >= 9)
                                <tr class="table-active">
                                    <td>{{ $nom  }}</td>
                                    <td>{{ $note  }}</td>
                                </tr>
                            @else
                                <tr class="table-danger">
                                    <td>{{ $nom  }}</td>
                                    <td>{{ $note  }}</td>
                                </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            @else
                <table class="table mt-3">
                    <thead class="table-dark">
                        <tr>
                            <th>Nome Complet</th>
                            <th>Note</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        @foreach($newTable as $nom => $note) 
                        @if ($note > 10) 
                                <tr class="table-info"> 
                                    <td>{{ $nom  }}</td>
                                    <td>{{ $note  }}</td> 
                                </tr>
                            @elseif ($note == 10 || $note >= 9)
                                <tr class="table-active">
                                    <td>{{ $nom  }}</td>
                                    <td>{{ $note  }}</td>
                                </tr>
                            @else
                                <tr class="table-danger">
                                    <td>{{ $nom  }}</td>
                                    <td>{{ $note  }}</td>
                                </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            @endif
            
        </div>
    </div>
@endsection