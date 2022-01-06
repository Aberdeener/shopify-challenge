<hr>
<footer style="margin-bottom: 20px;">
    @php
        $commit = trim(@exec('git log --pretty="%h" -n1 HEAD')) ?: 'unknown';
    @endphp
    <p>
        <i>Inventory</i> @ <a href="https://github.com/Aberdeener/shopify-challenge/commit/{{ $commit }}" target="_blank">{{ $commit }}</a>, by <a href="https://tadhg.sh" target="_blank">Tadhg Boyle</a>
    </p>
</footer>
