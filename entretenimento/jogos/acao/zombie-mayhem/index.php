<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Kill or be eaten in the Zombie Mayhem - Game build with HTML5, JavaScript, jQuery, CSS3 and SCSS, by Elior Shalev Tabeka | GPL License">
    <meta name="keywords" content="Front End Game, JavaScript, ES6, CSS, SCSS">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Elior Shalev Tabeka">

    <meta property="og:title" content="Kill or be eaten in the Zombie Mayhem">
    <meta property="og:image" content="">
    <meta property="og:description" content="Game build with HTML5, JavaScript, jQuery, CSS3 and SCSS, by Elior Shalev Tabeka | GPL License">

    <meta name="twitter:title" content="Kill or be eaten in the Zombie Mayhem">
    <meta name="twitter:url" content="Game build with HTML5, JavaScript, jQuery, CSS3 and SCSS, by Elior Shalev Tabeka | GPL License">
    <title>Kill or be eaten in the Zombie Mayhem</title>

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

<!--
<script src='//production-assets.codepen.io/comuns/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/comuns/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script><script src='//production-assets.codepen.io/comuns/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script>
-->

    <!-- build:css styles/vendor.css -->
    <!--<link rel='stylesheet prefetch' href='https://eliortabeka.github.io/zombie-mayhem/styles/vendor.css'>-->
    <link rel="stylesheet" type="text/css" href="styles/vendor.css">
    <!-- endbuild -->

    <!-- build:css styles/main.css -->
    <link rel="stylesheet" href="styles/main.css">
    <!-- endbuild -->

    <!-- build:js scripts/vendor/modernizr.js 
    <script src='//production-assets.codepen.io/comuns/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script> -->
    <script type="text/javascript" src="scripts/vendor/modernizr.js"></script>
   <!-- <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/250758/vendor.js'></script>-->
    <script type="text/javascript" src="scripts/vendor.js"></script>
    <!-- endbuild -->
    <script>'use strict';

$(document).ready(function () {
  var ZOMBIEMAYEM = function () {

    // Cache te DOM
    var $canves = $('#canves'),
        $overlayScreen = $canves.find('.overlay-screen'),
        $gameCover = $canves.find('.game-cover'),
        $killedTitle = $canves.find('.killed-status span'),
        $lifeIcons = $canves.find('.life'),
        $muteMusic = $canves.find('#mute-music'),
        $muteSounds = $canves.find('#mute-sounds'),
        $ammoTitle = $canves.find('.ammo'),
        $reloadHint = $canves.find('.reload-hint'),
        $reloadHintSpinner = $reloadHint.find('.reload-trigger'),
        $pasueGameTrigger = $canves.find('#pause-game');

    // Sounds
    var SHOOT_SOUND = 'SHOOT_SOUND',
        NO_AMMO_SOUND = 'NO_AMMO_SOUND',
        RELOAD_SOUND = 'RELOAD_SOUND',
        ROAR_3 = 'ROAR_3',
        ROAR_4 = 'ROAR_4',
        ROAR_5 = 'ROAR_5',
        ROAR_6 = 'ROAR_6',
        LAUGHTER = 'LAUGHTER',
        SOUNDTRACK = 'SOUNDTRACK',
        PUNCH_1 = 'PUNCH_1',
        PUNCH_2 = 'PUNCH_2',
        PUNCH_3 = 'PUNCH_3',
        PUNCH_4 = 'PUNCH_4';

    // General
    var pauseZombieTracking = undefined;

    // Game Info
    var mutedMusic = false,
        mutedSounds = false,
        gamePaused = false,
        life = 3,
        zombieKilled = 0,
        wave = 0,
        ammo = 6;

    // Random number
    var getRandom = function getRandom(min, max) {
      return Math.floor(Math.random() * (max - min + 1)) + min;
    };

    // Zombie Frequency per Level
    var WAVE_1_ZOMBIE_FRQ = getRandom(1300, 1700),
        WAVE_2_ZOMBIE_FRQ = getRandom(1500, 1900),
        WAVE_3_ZOMBIE_FRQ = getRandom(1700, 2100),
        WAVE_4_ZOMBIE_FRQ = getRandom(1800, 2400);

    // Zombie Quantity per Level
    var WAVE_1_ZOMBIE_QTY = getRandom(5, 7),
        WAVE_2_ZOMBIE_QTY = getRandom(7, 10),
        WAVE_3_ZOMBIE_QTY = getRandom(10, 14),
        WAVE_4_ZOMBIE_QTY = getRandom(14, 17),
        ALL_ZOMBIES = WAVE_1_ZOMBIE_QTY + WAVE_2_ZOMBIE_QTY + WAVE_3_ZOMBIE_QTY + WAVE_4_ZOMBIE_QTY;

    // Load sounds
    (function loadSound() {
      createjs.Sound.registerSound('https://s3-us-west-2.amazonaws.com/s.cdpn.io/250758/shoot_1.mp3', SHOOT_SOUND);
      createjs.Sound.registerSound('https://s3-us-west-2.amazonaws.com/s.cdpn.io/250758/noammo.mp3', NO_AMMO_SOUND);
      createjs.Sound.registerSound('https://s3-us-west-2.amazonaws.com/s.cdpn.io/250758/reload.mp3', RELOAD_SOUND);
      createjs.Sound.registerSound('https://s3-us-west-2.amazonaws.com/s.cdpn.io/250758/3.mp3', ROAR_3);
      createjs.Sound.registerSound('https://s3-us-west-2.amazonaws.com/s.cdpn.io/250758/4.mp3', ROAR_4);
      createjs.Sound.registerSound('https://s3-us-west-2.amazonaws.com/s.cdpn.io/250758/5.mp3', ROAR_5);
      createjs.Sound.registerSound('https://s3-us-west-2.amazonaws.com/s.cdpn.io/250758/6.mp3', ROAR_6);
      createjs.Sound.registerSound('https://s3-us-west-2.amazonaws.com/s.cdpn.io/250758/laughter.mp3', LAUGHTER);
      createjs.Sound.registerSound('https://s3-us-west-2.amazonaws.com/s.cdpn.io/250758/soundtrack.mp3', SOUNDTRACK);
      createjs.Sound.registerSound('https://s3-us-west-2.amazonaws.com/s.cdpn.io/250758/punch_2.mp3', PUNCH_2);
      createjs.Sound.registerSound('https://s3-us-west-2.amazonaws.com/s.cdpn.io/250758/punch_3.mp3', PUNCH_3);
      createjs.Sound.registerSound('https://s3-us-west-2.amazonaws.com/s.cdpn.io/250758/punch_4.mp3', PUNCH_4);
    })();

    var playSound = function playSound(sound) {
      createjs.Sound.play(sound);
    };

    // Create Zombie
    var createZombies = function createZombies() {
      var zombieType = wave === 1 ? getRandom(1, 3) : wave === 2 ? getRandom(1, 4) : getRandom(1, 6);
      $canves.append($('<div class="zombie zombie-' + zombieType + ' walk-speed-' + getRandom(1, 6) + ' walk-delay-' + getRandom(1, 6) + '" data-strength="' + zombieType + '"><div class="strength-bar"></div></div>'));
    };

    var setHandlers = function setHandlers() {
      // Shoot Handler
      $canves.on('click', function () {
        if (ammo > 0) {
          ammo--;
          if (!mutedSounds) {
            playSound(SHOOT_SOUND);
          }
          $ammoTitle.attr('data-ammo', ammo);
        }
        if (ammo === 0) {
          $reloadHint.addClass('visible');
          if (!mutedSounds) {
            playSound(NO_AMMO_SOUND);
          }
        }
      });

      // Reload Handler
      $('body').on('keydown', function (e) {
        if (e.which === 82) {
          if (ammo !== 6) {
            reload();
          }
        }
      });
      $reloadHintSpinner.on('click', function () {
        if (ammo === 0) {
          reload();
          return false;
        }
      });

      // Zombie Kill Handler
      $canves.delegate('.zombie', 'click', function (e) {
        e.stopPropagation;
        if (zombieKilled >= ALL_ZOMBIES) {
          return false;
        }

        if (ammo === 0) {
          if (!mutedSounds) {
            playSound(NO_AMMO_SOUND);
          }
          return false;
        }

        var $this = $(this),
            strength = e.target.dataset.strength.toString(),
            $strengthBar = $this.find('.strength-bar');

        if (strength === '1' && strength !== 0) {
          zombieKilled++;
          $killedTitle.html(zombieKilled);
          $this.css('pointer-events', 'none');
          $strengthBar.addClass('hide');

          setTimeout(function () {
            $this.addClass('killed');
            if (!mutedSounds) {
              playSound('ROAR_' + getRandom(3, 6));
            }
          }, 220);
          setTimeout(function () {
            $this.fadeOut(function () {
              $this.remove();
            });
          }, 370);
          calcWave();
        }

        strength--;
        $this.attr('data-strength', strength);
      });
    };

    // interval function From https://thecodeship.com/web-development/alternative-to-javascript-evil-setinterval/
    var interval = function interval(func, wait, times) {
      var interv = function (w, t) {
        return function () {
          if (typeof t === 'undefined' || t-- > 0) {
            setTimeout(interv, w);
            try {
              func.call(null);
            } catch (e) {
              t = 0;
              throw e.toString();
            }
          }
        };
      }(wait, times);

      setTimeout(interv, wait);
    };

    // Start Waves
    var startWave = function startWave(frequency, quantity) {
      $('body').off('keydown');
      $canves.off('click');
      $reloadHint.removeClass('visible');
      pauseZombieTracking = true;
      wave++;

      $overlayScreen.find('.level-title span').html(wave);
      $canves.addClass('level-message');
      $canves.attr('data-wave', wave);

      setTimeout(function () {
        interval(function () {
          createZombies();
        }, frequency, quantity);
      }, 1000);

      setTimeout(function () {
        $canves.removeClass('level-message');
        if (wave === 1) {
          $canves.removeClass('intro');
        }

        // Start Track Zombies
        pauseZombieTracking = false;
        trackZombies();
        setHandlers();
      }, 2200);
    };

    // End Game
    var endGame = function endGame(endType) {
      $('body').off('keydown');
      $canves.off('click');
      pauseZombieTracking = true;
      var screenType = endType === 'lose' ? 'game-over' : 'end-game';

      $canves.addClass(screenType);
      if (!mutedMusic) {
        playSound(LAUGHTER);
      }

      $canves.find('.restart-hint').on('click', function () {
        $canves.removeClass(screenType);
        // reset game
        resetGame();
        if (endType === 'win') {
          startGame();
        } else {
          if (!mutedMusic) {
            playSound(SOUNDTRACK);
          }
          startGame();
        }
      });
    };

    // Calc Wave
    var calcWave = function calcWave() {
      if (zombieKilled === WAVE_1_ZOMBIE_QTY) {
        // Start Wave 2
        if (!mutedMusic) {
          playSound(SOUNDTRACK);
        }
        startWave(WAVE_2_ZOMBIE_FRQ, WAVE_2_ZOMBIE_QTY);
      } else if (zombieKilled === WAVE_1_ZOMBIE_QTY + WAVE_2_ZOMBIE_QTY) {
        // Start Wave 3
        if (!mutedMusic) {
          playSound(SOUNDTRACK);
        }
        startWave(WAVE_3_ZOMBIE_FRQ, WAVE_3_ZOMBIE_QTY);
      } else if (zombieKilled === WAVE_1_ZOMBIE_QTY + WAVE_2_ZOMBIE_QTY + WAVE_3_ZOMBIE_QTY) {
        // Start Wave 4
        if (!mutedMusic) {
          playSound(SOUNDTRACK);
        }
        startWave(WAVE_4_ZOMBIE_FRQ, WAVE_4_ZOMBIE_QTY);
      } else if (zombieKilled >= ALL_ZOMBIES) {
        // End Game
        endGame('win');
      }
    };

    // Track Zombies on screen
    var trackZombies = function repeatOften() {
      var $zombie = $('.zombie');

      if ($zombie.length !== 0) {
        for (var i = 0, z = $zombie.length; i < z; i++) {
          var zombieWidth = $zombie.eq(i).width() - 20;

          if ($zombie.eq(i).hasClass('tracking')) {
            if ($zombie.eq(i).position().left.toFixed() <= -zombieWidth) {
              $zombie.eq(i).remove();
              createZombies();
              life--;
              if (!mutedSounds) {
                playSound('PUNCH_' + getRandom(2, 4));
              }
              $lifeIcons.find('.heart-icon').not('.hide').eq(-1).addClass('hide');
            }
          } else {
            $zombie.eq(i).addClass('tracking');
          }
        }
      }

      if (life !== 0) {
        if (!pauseZombieTracking) {
          requestAnimationFrame(trackZombies);
        }
      } else {
        endGame('lose');
      }
    };

    // Reload Ammo
    var reload = function reload() {
      if (!mutedSounds) {
        playSound(RELOAD_SOUND);
      }
      ammo = 6;

      setTimeout(function () {
        $ammoTitle.addClass('reload');
      }, 120);
      setTimeout(function () {
        $ammoTitle.attr('data-ammo', ammo);
      }, 150);
      setTimeout(function () {
        $ammoTitle.removeClass('reload');
      }, 250);

      $reloadHint.removeClass('visible');
    };

    // Mute Music
    $muteMusic.on('click', function () {
      var $this = $(this);
      $this.toggleClass('muted');
      if (!mutedMusic) {
        createjs.Sound.stop();
        mutedMusic = true;
      } else {
        mutedMusic = false;
      }
      if (ammo !== 0) {
        ammo++;
      }
    });

    // Mute Sounds
    $muteSounds.on('click', function () {
      var $this = $(this);
      $this.toggleClass('muted');
      !mutedSounds ? mutedSounds = true : mutedSounds = false;
      if (ammo !== 0) {
        ammo++;
      }
    });

    // Pause Game
    $pasueGameTrigger.on('click', function () {
      var $this = $(this);

      if (!gamePaused) {
        $this.addClass('paused');
        $canves.addClass('game-paused');
        createjs.Sound.stop();
        $('body').off('keydown');
        $canves.off('click');
        gamePaused = true;
      } else {
        $this.removeClass('paused');
        $canves.removeClass('game-paused');
        setHandlers();
        gamePaused = false;
      }
    });

    var resetGame = function resetGame() {
      zombieKilled = 0;
      wave = 0;
      ammo = 6;
      life = 3;
      $lifeIcons.find('.heart-icon').removeClass('hide');
      $killedTitle.html(zombieKilled);
      $ammoTitle.attr('data-ammo', ammo);
      createjs.Sound.stop();
      // Clear all zombies on screen
      $('.zombie').remove();
    };

    // Start Game
    var startGame = function startGame() {
      // reset game
      resetGame();

      // Game Cover
      $gameCover.fadeIn('slow', function () {
        $canves.attr('data-wave', '1');
      });
      setTimeout(function () {
        $gameCover.fadeOut('slow', function () {
          // Start Wave 1
          if (!mutedMusic) {
            playSound(SOUNDTRACK);
          }
          startWave(WAVE_1_ZOMBIE_FRQ, WAVE_1_ZOMBIE_QTY);
        });
      }, 2500);
    };

    // Preload from https://stackoverflow.com/a/10999147
    var preload = function preload(files, cb) {
      var len = files.length;
      $(files.map(function (f) {
        return '<img src="' + f + '" />';
      }).join('')).load(function () {
        if (--len === 0) {
          cb();
        }
      });
    };

    return {
      initInto: function initInto() {
        $canves.find('.zombie-loader').addClass('zombie-' + getRandom(1, 3));
        // Preload all games graphics
        preload(['https://s3-us-west-2.amazonaws.com/s.cdpn.io/250758/zombie-1.png', 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/250758/zombie-2.png', 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/250758/zombie-3.png', 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/250758/bg-1.png', 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/250758/bg-2.png', 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/250758/bg-3.png', 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/250758/bg-4.png', 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/250758/frame.png', 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/250758/icons.png', 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/250758/zombie-1-death.png', 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/250758/zombie-2-death.png', 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/250758/zombie-3-death.png', 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/250758/zombie-4.png', 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/250758/zombie-4-death.png', 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/250758/zombie-5.png', 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/250758/zombie-5-death.png', 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/250758/zombie-6.png', 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/250758/zombie-6-death.png'], function () {
          $canves.find('.loader').remove();
          startGame();
        });
      },
      killed: zombieKilled,
      ammoLeft: ammo
    };
  }();

  // Init Game
  ZOMBIEMAYEM.initInto();
});
//# sourceURL=pen.js
</script>

<style class="cp-pen-styles">@font-face {
  font-family: 'Cinzel';
  font-style: normal;
  font-weight: 400;
  src: local("Cinzel-Regular"), url("http://s3-us-west-2.amazonaws.com/s.cdpn.io/250758/i2BwM1Eq2JyiNOY_VrkubOvvDin1pK8aKteLpeZ5c0A.woff2") format("woff2");
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215, U+E0FF, U+EFFD, U+F000;
}
</style>

<link rel="stylesheet" type="text/css" href="styles/cssinterno.css">

  </head>
  <body>

  <!--  <a href="https://github.com/eliorshalev/zombie-mayhem" class="github-corner" target="_blank"><svg width="80" height="80" viewBox="0 0 250 250" style="fill:#171717; color:#fff; position: absolute; top: 0; border: 0; right: 0"><path d="M0,0 L115,115 L130,115 L142,142 L250,250 L250,0 Z"></path><path d="M128.3,109.0 C113.8,99.7 119.0,89.6 119.0,89.6 C122.0,82.7 120.5,78.6 120.5,78.6 C119.2,72.0 123.4,76.3 123.4,76.3 C127.3,80.9 125.5,87.3 125.5,87.3 C122.9,97.6 130.6,101.9 134.4,103.2" fill="currentColor" style="transform-origin: 130px 106px" class="octo-arm"></path><path d="M115.0,115.0 C114.9,115.1 118.7,116.5 119.8,115.4 L133.7,101.6 C136.9,99.2 139.9,98.4 142.2,98.6 C133.8,88.0 127.5,74.4 143.8,58.0 C148.5,53.4 154.0,51.2 159.7,51.0 C160.3,49.4 163.2,43.6 171.4,40.1 C171.4,40.1 176.1,42.5 178.8,56.2 C183.1,58.6 187.2,61.8 190.9,65.4 C194.5,69.0 197.7,73.2 200.1,77.6 C213.8,80.2 216.3,84.9 216.3,84.9 C212.7,93.1 206.9,96.0 205.4,96.6 C205.1,102.4 203.0,107.8 198.3,112.5 C181.9,128.9 168.3,122.5 157.7,114.1 C157.9,116.9 156.7,120.9 152.7,124.9 L141.0,136.5 C139.8,137.7 141.6,141.9 141.8,141.8 Z" fill="currentColor" class="octo-body"></path></svg></a>-->

    <div id="canves" data-wave="" class="loading intro">
      <div class="loader"><div class="loading-char"><div class="zombie-loader"></div><span>Carregando</span></div></div>
      <div class="game-cover"></div>
      <div class="overlay-screen">
        <h2 class="big-title game-over-title">Game <div>Over</div></h2>
        <h2 class="big-title end-game-title">Você <div>Ganhou</div></h2>
        <span class="restart-hint">Clique aqui para Reiniciar</span>
        <h2 class="big-title game-pause-title">Pausado</h2>
        <h2 class="big-title level-title">Level <span></span></h2>
      </div>
      <ul class="info-board">
        <li class="killed-status"><span>0</span></li>
        <li class="life"><i class="heart-icon"></i><i class="heart-icon"></i><i class="heart-icon"></i></li>
        <li id="mute-music" data-tootik="Mute Music" data-tootik-conf="right invert"></li>
        <li id="mute-sounds" data-tootik="Mute Sounds" data-tootik-conf="right invert"></li>
      </ul>
      <div id="pause-game"></div>
      <div class="ammo" data-ammo="6"><span class="reload-key">R</span></div>
      <div class="reload-hint"><div class="reload-trigger"></div></div>
    </div>

    <!--<div id="footer">
      <p>Handcrafted with <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 492.7 492.7" width="8" height="8"><path d="M492.7 166c0-73.5-59.6-133.1-133.1-133.1 -48 0-89.9 25.5-113.3 63.6 -23.4-38.1-65.3-63.6-113.3-63.6C59.6 33 0 92.5 0 166c0 40 17.7 75.8 45.7 100.2l188.5 188.6c3.2 3.2 7.6 5 12.1 5 4.6 0 8.9-1.8 12.1-5l188.5-188.6C475 241.8 492.7 206 492.7 166z"/></svg> by <a href="http://codepen.io/eliorshalev" target="_blank" title="Elior's Codepen">Elior Shalev Tabeka</a> | GPL License<p>
      <div class="credits"><p>Resources used building this game: <a href="https://eliorshalev.github.io/sprite-spirit/" target="_blank" title="Image Sprite to Animation using SCSS Mixin">Sprite Spirit</a> | <a href="https://eliorshalev.github.io/tootik/" target="_blank" title="Tooltips with Tootik">Tooltips</a></p></div>
    </div>-->


    <!-- build:js scripts/vendor.js -->
    <!-- bower:js -->
    <script src="https://code.createjs.com/soundjs-0.6.2.min.js"></script>
    <!-- endbower -->
    <!-- endbuild -->

    <!-- build:js scripts/main.js -->
    <script src="scripts/main.js"></script>
    <!-- endbuild -->
  </body>
</html>
