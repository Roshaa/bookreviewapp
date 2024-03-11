@if ($rating)
    @for($i=1;$i<=5;$i++)
{{$i<=round($rating)?'*':'ª'}}
    @endfor
@else
No rating yet
@endif