<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


### Features

- **Laravel 8.***
- **Tailwind 2.1 Ready and Loaded**
  - @tailwindcss/typography
  - @tailwindcss/forms
  - Dark mode ready
  - All variants enabled by default
- **Vue 2, Vuex, Vue-Router, Vue-Axios - Ready**
- **Scss / Sass ready**

## Usage

Just download the ZIP release of the repository and init the laravel project

```bash
npm install #install npm dependencies

npm run dev #compile assets
```

```bash
composer install #install php dependencies
```

## Assets

```bash
resources/
┣ css/
┃ ┗ tailwind.css # Import tailwind classes
┣ js/
┃ ┣ components/
┃ ┃ ┗ App.vue # Default App.vue for initial Vue config
┃ ┣ app.js # Vue init & configuration
┣ scss/
┃ ┗ custom.scss # Custom scss file for your peoject
```

Webpack Mix configuration

```js
mix
    .js('resources/js/app.js', 'public/js').vue({ version: 2 }) // Vue template
    .postCss('resources/css/tailwind.css', 'public/css', [ // Tailwind css loaded
        require("tailwindcss"),
    ])
    .sass('resources/scss/custom.scss', 'public/css'); // Custom Scss file


```

### Libs Used

- [Laravel](https://laravel.com)
- [TailwindCss](https://tailwindcss.com)
- [Vue.js](https://vuejs.org/)
- [Vuex](https://vuex.vuejs.org/)
- [Vue-Router](https://router.vuejs.org/)
- [Vue-Axios](https://www.npmjs.com/package/vue-axios)
- [Vue-Router](https://router.vuejs.org/)
- [Scss/Sass](https://sass-lang.com/)

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Marc Garcia (magarrent) via [magarrent@gmail.com](mailto:magarrent@gmail.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
