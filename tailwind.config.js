module.exports = {
  purge: {
    enabled: false,
    content: ['./**/*.php'],
  },
  theme: {
    extend: {
      colors: {
        main: '#250b0f',
        secondary: '#c11653',
        orange: '#f1543a',
      },
      fontFamily: {
        body: ['Rubik', 'sans-serif'],
        display: ['Lobster Two', 'cursive'],
        number: ['sans-serif'],
      },
    },
  },
  variants: {
    rotate: ['active', 'group-hover'],
    scale: ['active', 'group-hover'],
    opacity: ['active', 'group-hover'],
    translate: ['active', 'group-hover'],
    inset: ['active', 'group-hover'],
  },
  plugins: [require('@tailwindcss/typography')],
};
