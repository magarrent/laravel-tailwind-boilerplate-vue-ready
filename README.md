![Laravel Tailwind Boilerplate - Vue Ready](https://user-images.githubusercontent.com/6561770/129886774-bf666556-28df-40b7-9007-726e088f1828.png)

![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)

[!["Buy Me A Coffee"](https://www.buymeacoffee.com/assets/img/custom_images/orange_img.png)](https://www.buymeacoffee.com/magarrent)


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

```
🌟 Give a repo Star :)
```

Just [download the latest ZIP release](https://github.com/magarrent/laravel-tailwind-boilerplate-vue-ready/releases) of the repository and init the laravel project

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

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
