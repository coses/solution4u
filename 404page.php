<html>
<head>
<title>Solution4U | Agencia de detectives | Roleplay</title>
<style>
@import "https://fonts.googleapis.com/css?family=Inconsolata";
html {
  min-height: 100%;
}

body {
  margin: 0;
  box-sizing: border-box;
  height: 100%;
  background-color: #000000;
  background-image: radial-gradient(#11581E, #041607), url("https://media.giphy.com/media/oEI9uBYSzLpBK/giphy.gif");
  background-repeat: no-repeat;
  background-size: cover;
  font-family: 'Inconsolata', Helvetica, sans-serif;
  font-size: 1.5rem;
  color: rgba(128, 255, 128, 0.8);
  text-shadow: 0 0 1ex #33ff33, 0 0 2px rgba(255, 255, 255, 0.8);
}

.noise {
  pointer-events: none;
  position: absolute;
  width: 100%;
  height: 100%;
  background-image: url("https://media.giphy.com/media/oEI9uBYSzLpBK/giphy.gif");
  background-repeat: no-repeat;
  background-size: cover;
  z-index: -1;
  opacity: .02;
}

.overlay {
  pointer-events: none;
  position: absolute;
  width: 100%;
  height: 100%;
  background: repeating-linear-gradient(180deg, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, 0.3) 50%, rgba(0, 0, 0, 0) 100%);
  background-size: auto 4px;
  z-index: 1;
}

.overlay::before {
  content: "";
  pointer-events: none;
  position: absolute;
  display: block;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  background-image: -webkit-gradient(linear, left bottom, left top, from(transparent), color-stop(2%, rgba(32, 128, 32, 0.2)), color-stop(3%, rgba(32, 128, 32, 0.8)), color-stop(3%, rgba(32, 128, 32, 0.2)), to(transparent));
  background-image: linear-gradient(0deg, transparent 0%, rgba(32, 128, 32, 0.2) 2%, rgba(32, 128, 32, 0.8) 3%, rgba(32, 128, 32, 0.2) 3%, transparent 100%);
  background-repeat: no-repeat;
  -webkit-animation: scan 7.5s linear 0s infinite;
          animation: scan 7.5s linear 0s infinite;
}

@-webkit-keyframes scan {
  0% {
    background-position: 0 -100vh;
  }
  35%, 100% {
    background-position: 0 100vh;
  }
}

@keyframes scan {
  0% {
    background-position: 0 -100vh;
  }
  35%, 100% {
    background-position: 0 100vh;
  }
}
.terminal {
  box-sizing: inherit;
  position: absolute;
  height: 100%;
  width: 1000px;
  max-width: 100%;
  padding: 4rem;
  text-transform: uppercase;
}

.output {
  color: rgba(128, 255, 128, 0.8);
  text-shadow: 0 0 1px rgba(51, 255, 51, 0.4), 0 0 2px rgba(255, 255, 255, 0.8);
}

.output::before {
  content: "> ";
}

/*
.input {
  color: rgba(192, 255, 192, 0.8);
  text-shadow:
      0 0 1px rgba(51, 255, 51, 0.4),
      0 0 2px rgba(255, 255, 255, 0.8);
}

.input::before {
  content: "$ ";
}
*/
a {
  color: #fff;
  text-decoration: none;
}

a::before {
  content: "[";
}

a::after {
  content: "]";
}

.errorcode {
  color: white;
}

</style>
</head>

<body>
<div class="noise"></div>
<div class="overlay"></div>
<div class="terminal">
  <h1>Error <span class="errorcode">404</span></h1>
  <p class="output">La página que estás buscando puede haber sido eliminada, que tenga otro nombre o no está disponible temporalmente.</p>
  <p class="output">¿Qué tal si empezamos de cero desde la <a href="/">página de inicio</a>?</p>
  <p class="output">Buena suerte.</p>
</div>
</body>

</html>
