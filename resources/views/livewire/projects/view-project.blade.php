<div>
    @if ($project)
        <a href="projects/{{ $project->id }}">{{ $project->name }}</a>
    @else
        <div>Inget projekt skapat ännu.</div>
    @endif
</div>
