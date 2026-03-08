/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
  ],
  theme: {
      extend: {
          colors: {
              bg: {
                  DEFAULT: '#080a0f',
                  2: '#0d1018',
              },
              surface: '#131720',
              accent: {
                  DEFAULT: '#4f8eff',
                  2: '#00d4aa',
              },
              muted: '#6b7280',
              border: 'rgba(255,255,255,0.07)',
          },
          fontFamily: {
            syne: ['Plus Jakarta Sans', 'sans-serif'],
            dm:   ['Manrope', 'sans-serif'],
          },
          animation: {
              'float-slow': 'float 8s ease-in-out infinite',
              'float-slow-delay': 'float 8s ease-in-out -4s infinite',
              'marquee': 'marquee 20s linear infinite',
              'pulse-dot': 'pulseDot 2s ease infinite',
              'scroll-line': 'scrollLine 2s ease infinite',
              'fade-up-1': 'fadeUp 0.8s ease 0.3s forwards',
              'fade-up-2': 'fadeUp 0.8s ease 0.5s forwards',
              'fade-up-3': 'fadeUp 0.8s ease 0.7s forwards',
              'fade-up-4': 'fadeUp 0.8s ease 0.9s forwards',
              'fade-up-5': 'fadeUp 0.8s ease 1.2s forwards',
          },
          keyframes: {
              float: {
                  '0%, 100%': { transform: 'translateY(0) scale(1)' },
                  '50%': { transform: 'translateY(-30px) scale(1.05)' },
              },
              marquee: {
                  from: { transform: 'translateX(0)' },
                  to: { transform: 'translateX(-50%)' },
              },
              pulseDot: {
                  '0%, 100%': { opacity: '1', transform: 'scale(1)' },
                  '50%': { opacity: '0.5', transform: 'scale(1.4)' },
              },
              scrollLine: {
                  '0%, 100%': { width: '40px', opacity: '1' },
                  '50%': { width: '20px', opacity: '0.4' },
              },
              fadeUp: {
                  from: { opacity: '0', transform: 'translateY(30px)' },
                  to: { opacity: '1', transform: 'translateY(0)' },
              },
          },
          backgroundImage: {
              'grid-pattern': `linear-gradient(rgba(255,255,255,0.025) 1px, transparent 1px),
                               linear-gradient(90deg, rgba(255,255,255,0.025) 1px, transparent 1px)`,
          },
          backgroundSize: {
              'grid': '60px 60px',
          },
      },
  },
  plugins: [],
};