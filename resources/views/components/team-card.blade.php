<div class="card bg-transparent border-0 text-center">
    <div class="card-img">

        @if(!empty($member->image))
        <img loading="lazy" decoding="async" src="{{ asset('storage/'.$member->image) }}" alt="{{ $member->name }}" class="rounded w-100" width="300" height="332">
        @endif

        @if(!empty($member->fb_url) || !empty($member->whatsapp_url) || !empty($member->in_url))
        <ul class="card-social list-inline">
            @if(!empty($member->fb_url))
            <li class="list-inline-item">
                <a class="facebook" target="_blank" href="{{ $member->fb_url }}">
                    <i class="fab fa-facebook"></i>
                </a>
            </li>
            @endif

            @if(!empty($member->in_url))
            <li class="list-inline-item">
                <a class="instagram" target="_blank" href="{{ $member->in_url }}">
                    <i class="fab fa-instagram"></i>
                </a>
            </li>
            @endif

            @if(!empty($member->whatsapp_url))
            <li class="list-inline-item">
                <a class="whatsapp" target="_blank" href="{{ $member->whatsapp_url }}">
                    <i class="fab fa-whatsapp"></i>
                </a>
            </li>
            @endif
        </ul>
        @endif

    </div>
    <div class="card-body">
        <h3>{{ $member->name }}</h3>
        <p>{{ $member->designation }}</p>
    </div>
</div>
