<div class="row">
    <div>
        <img src="{{ Storage::disk('public')->url($recruit->img_path) }}" class="square-img">
    </div>
    <div class="ml-3">
        <div class="mt-3 mb-3">
            <h3>
                <a href="{{ route('recruits.show', $recruit->id) }}">{{ $recruit->name }}</a>
            </h3>
        </div>
        <div>
            <div>{{ $recruit->note }}</div>
            <div>{{ $recruit->address }}</div>
        </div>
    </div>
</div>
