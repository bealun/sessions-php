<footer>
  <div class="footer-container">
    <a href="http://validator.w3.org/check/referer"> HTML5</a>
    <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>
    <a href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance">Unicorn</a>
<p> Specifikationer
  <a href="https://www.w3.org/Style/CSS/specs.en.html">CSS specs</a>
  <a href="https://html.spec.whatwg.org/multipage/">HTML</a>
  <a href="https://www.w3.org/TR/CSS/">CSS1</a>
  <a href="https://www.w3.org/2009/cheatsheet/">Cheatsheet</a></p>
</div>
<p>Time to load page: <?= round($loadTime * 1000, PHP_ROUND_HALF_EVEN) ?> s.
Files included: <?= $numFiles ?> st.
Memory used: <?= round($memoryUsed/(1024*1024), PHP_ROUND_HALF_EVEN) ?> MB.</p>
</footer>
</body>
</html>
