<!DOCTYPE html>
<html lang="en">
@include('layout.head')

<body>
  <div id="app">
    <div class="main-wrapper">
      @include('layout.nav')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          @yield('content')
        </section>
      </div>
      @include('layout.footer')
    </div>
  </div>

  @include('layout.scripts')
</body>

</html>