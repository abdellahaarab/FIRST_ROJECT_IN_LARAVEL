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
                <thead class="table-primary">
                    <tr>
                        <th>Nome Complet</th>
                        <th>Note</th>
                    </tr>
                </thead>
                <tbody class="">
                    @foreach($notes as $key => $note)
                    
                    
                   
                       @if ($note > 10) 
                            <tr class="table-info">
                                <td>{{ $key  }}</td>
                                <td>{{ $note  }}</td>
                            </tr>
                        @elseif ($note == 10 || $note >= 9)
                            <tr class="table-active">
                                <td>{{ $key  }}</td>
                                <td>{{ $note  }}</td>
                            </tr>
                        @else
                            <tr class="table-danger">
                                <td>{{ $key  }}</td>
                                <td>{{ $note  }}</td>
                            </tr>
                       @endif 
                    
                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection