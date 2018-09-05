var elixir = require('laravel-elixir');

elixir.config.assetsPath = 'themes/cifq/assets/';
elixir.config.publicPath = 'themes/cifq/assets/public/';

elixir (function(mix){
   mix.sass([
     'app.scss'
   ], 'themes/cifq/assets/compiled/app.css', 'themes/cifq/assets/src/stylesheets');

   mix.sass([
    'foret.scss'
  ], 'themes/cifq/assets/compiled/foret.css', 'themes/cifq/assets/src/stylesheets');

})
