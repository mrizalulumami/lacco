<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="description"
    content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">


  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="/css/main.css">
  <!-- Font-icon css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

  <title>LACCO : {{$title}}</title>
</head>

<body class="app sidebar-mini">
  <!-- Navbar-->
  <header class="app-header"><a class="app-header__logo" href="/index.html">
      <div>
        <svg class="changeColor mb-1" width="210" height="52" viewBox="0 0 210 52" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path
            d="M29.9092 30.8952C30.8744 19.1138 41.2942 10.3185 53.1322 11.2895C64.9703 12.2605 73.8171 22.6375 72.8492 34.4189C72.5425 38.1735 71.2452 41.7872 69.0983 44.8691C67.0188 47.8553 64.1908 50.2814 60.9183 51.8912L57.4122 44.8353C61.7512 42.702 64.5763 38.5675 64.9703 33.7716C65.5809 26.3132 59.9841 19.747 52.4907 19.1307C44.9973 18.5143 38.4015 24.0813 37.7909 31.5397C37.3435 36.9886 40.2024 42.1475 45.0705 44.6833L41.4068 51.6548C33.7164 47.6498 29.2029 39.5019 29.9092 30.8952Z"
            fill="#F8FAFC" />
          <path
            d="M98.6467 51.9861C87.3968 51.623 78.5387 42.1719 78.9045 30.9196C79.2675 19.6673 88.7165 10.8073 99.9664 11.1732C103.551 11.2886 107.052 12.3469 110.082 14.2354C113.02 16.0648 115.463 18.6288 117.148 21.6515L110.603 25.2991C108.369 21.2913 104.303 18.8089 99.7244 18.6626C92.6025 18.4318 86.623 24.041 86.3922 31.1617C86.1615 38.2823 91.7696 44.2659 98.8887 44.4967C104.092 44.6656 108.864 41.7188 111.045 36.9905L117.846 40.1314C114.399 47.5983 106.863 52.2506 98.6467 51.9861Z"
            fill="#F8FAFC" />
          <path
            d="M143.626 51.9861C132.376 51.623 123.518 42.172 123.884 30.9197C124.247 19.6674 133.696 10.8074 144.946 11.1733C148.531 11.2887 152.031 12.3469 155.062 14.2354C158 16.0649 160.442 18.6289 162.127 21.6516L155.582 25.2992C153.348 21.2914 149.282 18.809 144.704 18.6626C137.582 18.4318 131.602 24.0411 131.372 31.1618C131.141 38.2852 136.749 44.266 143.868 44.4968C149.071 44.6656 153.843 41.7189 156.024 36.9905L162.825 40.1315C159.381 47.5983 151.843 52.2507 143.626 51.9861Z"
            fill="#F8FAFC" />
          <path
            d="M189.36 37.2494C192.507 37.2494 195.058 34.6977 195.058 31.5501C195.058 28.4024 192.507 25.8507 189.36 25.8507C186.213 25.8507 183.662 28.4024 183.662 31.5501C183.662 34.6977 186.213 37.2494 189.36 37.2494Z"
            fill="#F8FAFC" />
          <path
            d="M189.36 11.1083C187.815 11.1083 186.316 11.2856 184.869 11.6093C184.816 11.6206 184.765 11.6346 184.712 11.6459C184.467 11.7022 184.225 11.7613 183.986 11.8288C183.848 11.8654 183.71 11.9048 183.572 11.9471C183.42 11.9921 183.265 12.0371 183.113 12.085C182.894 12.1553 182.674 12.2285 182.458 12.3073C182.39 12.3298 182.323 12.3552 182.258 12.3777C174.674 15.1612 169.14 22.3297 168.861 30.8913C168.591 39.2138 173.372 46.5483 180.429 49.951C180.463 49.9679 180.494 49.9848 180.527 49.9989C180.724 50.0917 180.924 50.1818 181.127 50.2691C181.265 50.3282 181.4 50.3901 181.538 50.4464C181.636 50.4858 181.737 50.5252 181.839 50.5646C184.166 51.4877 186.701 52 189.357 52C200.644 52 209.797 42.8416 209.797 31.5556C209.803 20.2582 200.647 11.1083 189.36 11.1083ZM200.059 24.4405C201.415 26.4782 202.206 28.9212 202.206 31.5527C202.206 33.5341 201.744 35.4058 200.942 37.0804C200.779 37.4238 200.602 37.7531 200.413 38.0739C200.298 38.2709 200.182 38.4707 200.056 38.6593C199.994 38.755 199.924 38.8451 199.859 38.9379C199.69 39.18 199.515 39.4164 199.33 39.6472C199.29 39.6979 199.248 39.7457 199.206 39.7964C196.851 42.608 193.316 44.398 189.36 44.398C182.264 44.398 176.506 38.6481 176.506 31.5499C176.506 24.4518 182.264 18.6934 189.36 18.6934C193.744 18.6934 197.61 20.8943 199.929 24.2492C199.971 24.3167 200.016 24.3786 200.059 24.4405Z"
            fill="#F8FAFC" />
          <path
            d="M202.873 4.64671L200.008 5.54453L199.547 5.69088L195.883 6.84201L195.599 10.5599C193.955 9.95201 192.236 9.55517 190.486 9.38912C187.993 9.1527 185.48 9.38912 183.08 10.073L183.102 6.46768L175.845 3.99094L189.732 0L202.873 4.64671Z"
            fill="#F8FAFC" />
          <path d="M199.552 7.71774L199.834 7.72618L200.053 5.02146L199.541 5.00458L199.552 7.71774Z" fill="#F8FAFC" />
          <path
            d="M199.707 8.76783C200.04 8.76783 200.309 8.49817 200.309 8.16553C200.309 7.83289 200.04 7.56323 199.707 7.56323C199.375 7.56323 199.105 7.83289 199.105 8.16553C199.105 8.49817 199.375 8.76783 199.707 8.76783Z"
            fill="#F8FAFC" />
          <path
            d="M199.499 8.43286L199.442 10.4002C199.437 10.6253 199.471 10.8505 199.558 11.0588C199.732 11.4753 200.152 11.9031 201.114 11.0306C201.114 11.0306 200.064 10.2538 199.808 8.44131L199.499 8.43286Z"
            fill="#F8FAFC" />
          <path
            d="M31.524 51.8877H11.2105C5.0256 51.8877 0 46.861 0 40.6748V11.0692H8.03928V40.6748C8.03928 42.4254 9.4631 43.8495 11.2133 43.8495H26.0707C27.3876 46.8188 29.2307 49.5404 31.524 51.8877Z"
            fill="#F8FAFC" />
        </svg>
      </div>
    </a>
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"
      aria-label="Hide Sidebar"></a>

  </header>
  <!-- Sidebar menu-->
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <aside class="app-sidebar">
    <span class="ape-gene"><i class="bi bi-house-door mr-2"></i>Home</span>
    <ul class="app-menu">

      <li>
        <a <?= $active == 'dashboard' || $active == '' ? 'class="app-menu__item fo-col active"' : 'class="app-menu__item fo-col"'?> href="{{'/dashboard'}}">
          <i class="app-menu__icon fa fa-dashboard"></i>
          <span class="app-menu__label">Dashboard</span>
        </a>
      </li>
    </ul>

    <span class="ape-gene"><i class="bi bi-house-door mr-2"></i>Data</span>
    <ul class="app-menu">

      <li>
        <a <?= $active == 'ruangan' || $active == '' ? 'class="app-menu__item fo-col active"' : 'class="app-menu__item fo-col"'?> href="{{'/ruangan'}}">
          <i class="app-menu__icon fa fa-dashboard"></i>
          <span class="app-menu__label">Ruangan Camp</span>
        </a>
      </li>

      <li>
        <a <?= $active == 'tutor' || $active == '' ? 'class="app-menu__item fo-col active"' : 'class="app-menu__item fo-col"'?> href="{{'/tutor'}}">
          <i class="app-menu__icon fa fa-dashboard"></i>
          <span class="app-menu__label">Tutor</span>
        </a>
      </li>

      <li>
        <a <?= $active == 'pelajar' || $active == '' ? 'class="app-menu__item fo-col active"' : 'class="app-menu__item fo-col"'?>  href="{{'/pelajar'}}">
          <i class="app-menu__icon fa fa-dashboard"></i>
          <span class="app-menu__label">Pelajar</span>
        </a>
      </li>
    </ul>
  </aside>
  <main class="app-content">
    @yield('content')
  </main>
  <!-- Essential javascripts for application to work-->
  <script src="/js/dash/jquery-3.3.1.min.js"></script>
  <script src="/js/dash/popper.min.js"></script>
  <script src="/js/dash/bootstrap.min.js"></script>
  <script src="/js/dash/main.js"></script>

  <!-- Page specific javascripts-->
  <script type="text/javascript" src="/js/dash/plugins/chart.js"></script>

</body>

</html>