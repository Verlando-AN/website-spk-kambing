<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      .navbar {
        justify-content: flex-end;
      }
      .navbar-brand {
        margin-right: auto; 
        color: #fff; 
      }
      .navbar-nav {
        position: relative;
        left: 67%;
      }
      .nav-link {
        color: #fff;
      }
      .nav-link:hover {
        color: #ddd; 
      }
    .card-height {
        height: 100%;
    }

    .card-body-scroll {
        max-height: 400px;
        overflow-y: auto; 
    }

    </style>
  </head>

  <body>
   
@include('dashboard.layout.navuser')

@yield('containerr')
             


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
  document.getElementById('logout-button').addEventListener('click', function(event) {
      event.preventDefault(); 

      if (confirm('Apakah Anda ingin logout?')) {
          document.getElementById('logout-form').submit();
      }
  });
</script>

</body>
</html>
