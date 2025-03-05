@extends('/layouts/layoutTest')


@section('contenue')

@foreach($voitures as $voiture)
<figure class="image" style="width: 450px; height: 600px;">
    <iframe id="image" src="/storage/{{$voiture->nomImage}}" width="100%" height="100%" frameborder="0"></iframe>
</figure>
<p>
{{$voiture->nom}}
{{$voiture->Km}}
{{$voiture->Type}}</p>
@endforeach

@endsection