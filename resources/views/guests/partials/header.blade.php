<nav class="navbar">
    <div class="container-fluid dcnavbar">
      <a class="navbar-brand" href="#">
        <img src="{{asset('images/dc-logo.png')}}" alt="">
      </a>
      <nav class="nav">
        <a class="nav-link nav-dcitem" href="">CHARACTERS</a>
        <a class="nav-link nav-dcitem" href="#">COMICS</a>
        <a class="nav-link nav-dcitem" href="#">MOVIES</a>
        <a class="nav-link nav-dcitem" href="#">TV</a>
        <a class="nav-link nav-dcitem" href="#">GAMES</a>
        <a class="nav-link nav-dcitem" href="#">COLLECTIBLES</a>
        <a class="nav-link nav-dcitem" href="#">VIDEOS</a>
        <a class="nav-link nav-dcitem" href="#">FANS</a>
        <a class="nav-link nav-dcitem" href="#">NEWS</a>
        <a class="nav-link nav-dcitem" href="#">SHOP</a>
      </nav>
    </div>
  </nav>
  <style lang="scss" scoped>
    .dcnavbar {
      background-color: rgb(255, 255, 255);
      display: flex;
      justify-content: space-between;
      height: 20vh;
      width: 100vw;
    }
    .nav-elements {
      display: flex;
      justify-content: space-between;
    }
    .nav-dcitem {
      font-size: smaller;
      color: black;
    }
    </style>

