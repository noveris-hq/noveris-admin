<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    hello

    @php($project = $this->getProject())

    @if($project)
        <div>{{$project->name}}</div>
    @else
        <div>Inget projekt skapat ännu.</div>
    @endif
</div>
