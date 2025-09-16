<footer class="site-footer">
  {{-- TOP --}}
  <div class="footer-top">
    <div class="container">
      <div class="footer-columns">
        <div class="footer-column">
          <h4>DC COMICS</h4>
          <ul>
            <li><a href="{{ route('characters') }}">Characters</a></li>
            <li><a href="{{ route('comics') }}">Comics</a></li>
            <li><a href="{{ route('movies') }}">Movies</a></li>
            <li><a href="{{ route('tv') }}">TV</a></li>
            <li><a href="{{ route('games') }}">Games</a></li>
            <li><a href="{{ route('videos') }}">Videos</a></li>
            <li><a href="{{ route('news') }}">News</a></li>
          </ul>

          <h4 class="footer-subheading">SHOP</h4>
          <ul>
            <li><a href="{{ route('shop') }}">Shop DC</a></li>
            <li><a href="{{ route('shop') }}">Shop DC Collectibles</a></li>
          </ul>
        </div>

        <div class="footer-column">
          <h4>DC</h4>
          <ul>
            <li><a href="https://www.dc.com/terms/en-us/html/terms_en-us_20230322">Terms Of Use</a></li>
            <li><a href="https://www.wbdprivacy.com/policycenter/b2c/">Privacy Policy (New)</a></li>
            <li><a href="#">Ad Choices</a></li>
            <li><a href="#">Advertising</a></li>
            <li><a href="#">Jobs</a></li>
            <li><a href="#">Subscriptions</a></li>
            <li><a href="#">Talent Workshops</a></li>
            <li><a href="#">CPSC Certificates</a></li>
            <li><a href="#">Ratings</a></li>
            <li><a href="#">Shop Help</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>

        <div class="footer-column">
          <h4>SITES</h4>
          <ul>
            <li><a href="#">DC</a></li>
            <li><a href="#">Mad Magazine</a></li>
            <li><a href="#">DC Kids</a></li>
            <li><a href="#">DC Universe</a></li>
            <li><a href="#">DC Power Visa</a></li>
          </ul>
        </div>
      </div>

      {{-- logo gigante in trasparenza --}}
      <img class="footer-logo-bg" src="{{ asset('img/dc-logo-bg.png') }}" alt="DC logo">
    </div>
  </div>

  {{-- BOTTOM --}}
  <div class="footer-bottom">
    <div class="container footer-bottom-inner">
      <a href="{{ route('signup') }}" class="btn-signup">Sign-Up Now!</a>

      <div class="social">
        <span>Follow Us</span>
        <a href="https://www.facebook.com/?locale=it_IT"><img src="{{ asset('img/footer-facebook.png') }}" alt="Facebook"></a>
        <a href="https://twitter.com/?locale=it_IT"><img src="{{ asset('img/footer-twitter.png') }}" alt="Twitter"></a>
        <a href="https://www.youtube.com/?locale=it_IT"><img src="{{ asset('img/footer-youtube.png') }}" alt="YouTube"></a>
        <a href="https://www.pinterest.com/?locale=it_IT"><img src="{{ asset('img/footer-pinterest.png') }}" alt="Pinterest"></a>
        <a href="https://www.periscope.tv/?locale=it_IT"><img src="{{ asset('img/footer-periscope.png') }}" alt="Periscope"></a>
      </div>
    </div>
  </div>
</footer>
