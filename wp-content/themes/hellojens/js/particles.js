particlesJS('particles-js', {
  particles: {
    color: '#D84B4B',
    color_random: false,
    shape: 'triangle', // "circle", "edge" or "triangle"
    opacity: {
      opacity: .6,
      anim: {
        enable: false,
        speed: 2.5,
        opacity_min: 0.3,
        sync: false
      }
    },
    size: 4.5,
    size_random: true,
    nb: 50,
    line_linked: {
      enable_auto: true,
      distance: 200,
      color: '#aeaeae',
      opacity: 1,
      width: 1,
      condensed_mode: {
        enable: false,
        rotateX: 600,
        rotateY: 600
      }
    },
    anim: {
      enable: true,
      speed: 1
    }
  },
  interactivity: {
    enable: true,
    mouse: {
      distance: 250
    },
    detect_on: 'window', // "canvas" or "window"
    mode: 'grab', // "grab" of false
    line_linked: {
      opacity: .7
    },
    events: {
      onclick: {
        enable: true,
        mode: 'push', // "push" or "remove"
        nb: 3
      },
      onresize: {
        enable: true,
        mode: 'bounce', // "out" or "bounce"
        density_auto: true,
        density_area: 1000 // nb_particles = particles.nb * (canvas width *  canvas height / 1000) / density_area
      }
    }
  },
  /* Retina Display Support */
  retina_detect: true
});