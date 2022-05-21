<!DOCTYPE html>
<html lang="fr">

<head>
  @include('components.head')
</head>

<body>
  @include('components.header')
  
  @yield('content')

  @include('components.footer')

  <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</body>
</html>