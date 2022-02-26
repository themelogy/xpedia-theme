<ul>
    @foreach(['facebook' => 'fa-facebook-square', 'instagram'=>'fa-instagram', 'twitter'=>'fa-twitter-square', 'google'=>'fa-google-plus', 'whatsapp'=>'fa-whatsapp', 'linkedin'=>'fa-linkedin', 'youtube'=>'fa-youtube-play'] as $sk => $sv)
        @if(setting('theme::'.$sk) && $sk == 'whatsapp')
            <li>
                <a rel="nofollow" class="fa {{ $sv }} {{ $iconClass ?? '' }}" href="whatsapp:{{ setting('theme::'.$sk) }}"></a>
            </li>
        @elseif(setting('theme::'.$sk))
            <li>
                <a rel="nofollow" target="_blank" class="fa {{ $sv }} {{ $iconClass ?? '' }}" href="{{ setting('theme::'.$sk) }}"></a>
            </li>
        @endif
    @endforeach
</ul>