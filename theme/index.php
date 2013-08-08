<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta, title, CSS, favicons, etc. -->
    {% include header.html %}
    <!-- Place anything custom after this. -->
  </head>
  <body>
    <a class="sr-only" href="#content">Skip navigation</a>

    <!-- Docs master nav -->
    {% include nav-main.html %}

    <!-- Docs page layout -->
    <div class="bs-header" id="content" role="banner">
      <div class="container">
        <h1>{{ page.title }}</h1>
        <p>{{ page.lead }}</p>
        {% include ads.html %}
      </div>
    </div>

    <!-- Callout for the old docs link -->
    {% include old-bs-docs.html %}

    <div class="container bs-docs-container">
      <div class="row">
        <div class="col-lg-3">
          <div class="bs-sidebar" role="complementary">
            <ul class="nav bs-sidenav">
              {% if page.slug == "getting-started" %}
                {% include nav-getting-started.html %}
              {% elsif page.slug == "css" %}
                {% include nav-css.html %}
              {% elsif page.slug == "components" %}
                {% include nav-components.html %}
              {% elsif page.slug == "js" %}
                {% include nav-javascript.html %}
              {% elsif page.slug == "customize" %}
                {% include nav-customize.html %}
              {% endif %}
            </ul>
          </div>
        </div>
        <div class="col-lg-9" role="main">
          {{ content }}
        </div>
      </div>

    </div>

    <!-- Footer
    ================================================== -->
    <footer class="bs-footer" role="contentinfo">
      {% include social-buttons.html %}

      <p>Designed and built with all the love in the world by <a href="http://twitter.com/mdo" target="_blank">@mdo</a> and <a href="http://twitter.com/fat" target="_blank">@fat</a>.</p>
      <p>Code licensed under <a href="http://www.apache.org/licenses/LICENSE-2.0" target="_blank">Apache License v2.0</a>, documentation under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
      <ul class="footer-links">
        <li><a href="{{ site.blog }}">Blog</a></li>
        <li class="muted">&middot;</li>
        <li><a href="{{ site.repo }}/issues?state=open">Issues</a></li>
        <li class="muted">&middot;</li>
        <li><a href="{{ site.repo }}/releases">Releases</a></li>
      </ul>
    </footer>

    <!-- JS and analytics only. -->
    {% include footer.html %}

  </body>
</html>