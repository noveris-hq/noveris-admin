<div>
    @php($project = $this->getProject())

    @if ($project)
        <div>{{ $project->name }}</div>
    @else
        <div>Inget projekt skapat ännu.</div>
    @endif
</div>
