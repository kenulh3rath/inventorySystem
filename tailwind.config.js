/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'media',
    content:
      [
          "./src/**/*.{html,js, php}",
          "./node_modules/flowbite/**/*.js",
          "./layouts/**/*.html", "./content/**/*.md", "./content/**/*.html", "./src/**/*.js", "./src/**/*.php"
      ],
    theme:
        {
        extend:
            {
              backgroundImage:
                  {
                    'login-bg': "url('/src/img/login-bg.jpg')",
                  }
            },
        },
  plugins:
      [
          require('flowbite/plugin')
      ],
}

