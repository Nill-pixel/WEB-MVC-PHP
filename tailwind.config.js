module.exports = {
  content: ["./views/**/*.{html,js,php}", 'node_modules/preline/dist/*.js'],
  theme: {
    extend: {},
  },
  plugins: [
    require('preline/plugin')
  ],
}

