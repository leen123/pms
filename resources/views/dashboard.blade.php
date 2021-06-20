@extends('master')
@section('content')
      <main>
        <p>Dashboard page</p>
      </main>



      <script src="js/script-nav.js"></script>

      <script type="text/javascript">
        let timer = 25000; //25s

        document.addEventListener('mousemove', e => {
          timer = 25000;
        });
        document.addEventListener('mousedown', e => {
          timer = 25000;
        });
        document.addEventListener('keydown', e => {
          timer = 25000;
        });

        setInterval(function() {
          timer -= 1000;
          if(timer == 0){
            location.replace("launcher.html");
          }
        }, 1000);
      </script>
@stop

