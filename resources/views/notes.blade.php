@extends('base')
@extends('navigation.nav')
@extends('navigation.footer')

@section('continue')
    <div class="mt-5">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="m-5">List Des Notes</h1>
            </div>
            
            <table class="table mt-3">
                <thead class="table-dark">
                    <tr>
                        <th>Nome Complet</th>
                        <th>Note</th>
                    </tr>
                </thead>
                <tbody class="">
                    @foreach($notes as $key => $note)
                        <tr class="table-light">
                            <td>{{ $key  }}</td>
                            <td>{{ $note  }}</td>
                        </tr>                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection


