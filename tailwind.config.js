/**
 * Gnathos Facial — Tailwind build config.
 *
 * Replaces the old in-browser `cdn.tailwindcss.com` runtime (≈300 KB of render-blocking JS)
 * with a precompiled, purged stylesheet at /asset/css/site.css.
 *
 * The colour/typography tokens below keep the class names the inner pages already use
 * (`text-primary`, `bg-surface-container-low`, `font-headline-md` …) but map them onto the
 * editorial palette from the homepage (navy / steel / warm paper, Cormorant + Inter), so every
 * page shares one visual system.
 */
module.exports = {
  darkMode: 'class',
  content: [
    './*.php',
    './includes/**/*.php',
    './blogs/**/*.php',
    './Cosmetic-Facial-Surgery/**/*.php',
    './Face-Injuries/**/*.php',
    './Facial-Swellings/**/*.php',
    './OSA/**/*.php',
    './Orthognathic-Surgery/**/*.php',
    './Rhinoplasty/**/*.php',
    './Skin-Grafts/**/*.php',
    './tmj/**/*.php',
  ],
  theme: {
    extend: {
      colors: {
        // Brand (editorial) tokens
        navy: '#0E2A47',
        steel: '#1F6F8B',
        warm: '#F8F5EF',
        'warm-deep': '#EFE9DC',
        trauma: '#C8392E',
        slate: '#5A6573',
        // Legacy "care-*" tokens from the older page template, mapped onto the brand palette
        'care-blue': '#0E2A47',
        'care-light': '#F3EEE4',
        'care-gold': '#1F6F8B',

        // Legacy Material-style tokens, re-pointed at the brand palette
        primary: '#0E2A47',
        'on-primary': '#ffffff',
        'primary-container': '#1a3a5c',
        'on-primary-container': '#c9d6e6',
        'primary-fixed': '#dbe6f1',
        'primary-fixed-dim': '#b9cbe0',
        'on-primary-fixed': '#081b30',
        'on-primary-fixed-variant': '#2c4867',
        'inverse-primary': '#b9cbe0',
        'surface-tint': '#1F6F8B',

        secondary: '#1F6F8B',
        'on-secondary': '#ffffff',
        'secondary-container': '#d6e7ee',
        'on-secondary-container': '#0e4a5e',
        'secondary-fixed': '#d6e7ee',
        'secondary-fixed-dim': '#a9cbd9',
        'on-secondary-fixed': '#062a36',
        'on-secondary-fixed-variant': '#0e4a5e',

        tertiary: '#0B2139',
        'on-tertiary': '#ffffff',
        'tertiary-container': '#14324f',
        'on-tertiary-container': '#a9bdd3',
        'tertiary-fixed': '#dbe6f1',
        'tertiary-fixed-dim': '#b9cbe0',
        'on-tertiary-fixed': '#081b30',
        'on-tertiary-fixed-variant': '#2c4867',

        background: '#F8F5EF',
        'on-background': '#0E2A47',
        surface: '#F8F5EF',
        'surface-bright': '#F8F5EF',
        'surface-dim': '#E6DFD0',
        'on-surface': '#0E2A47',
        'on-surface-variant': '#4F5967',
        'surface-variant': '#E3DCCD',
        'surface-container-lowest': '#ffffff',
        'surface-container-low': '#F3EEE4',
        'surface-container': '#EFE9DC',
        'surface-container-high': '#E6DFD0',
        'surface-container-highest': '#DDD5C4',
        'inverse-surface': '#0E2A47',
        'inverse-on-surface': '#F8F5EF',
        outline: '#6f7781',
        'outline-variant': '#D9D1C1',

        error: '#ba1a1a',
        'on-error': '#ffffff',
        'error-container': '#ffdad6',
        'on-error-container': '#93000a',
      },
      borderRadius: {
        DEFAULT: '0.125rem',
        lg: '0.25rem',
        xl: '0.375rem',
        '2xl': '0.5rem',
        '3xl': '0.75rem',
        full: '9999px',
      },
      boxShadow: {
        sm: '0 1px 0 rgba(14,42,71,0.04)',
        DEFAULT: '0 1px 2px rgba(14,42,71,0.06)',
        md: '0 6px 18px -12px rgba(14,42,71,0.22)',
        lg: '0 14px 34px -18px rgba(14,42,71,0.28)',
        xl: '0 18px 40px -20px rgba(14,42,71,0.32)',
        '2xl': '0 24px 48px -24px rgba(14,42,71,0.34)',
      },
      spacing: {
        unit: '8px',
        'section-gap': '72px',
        gutter: '24px',
        'margin-mobile': '16px',
        'margin-desktop': '48px',
        'container-max': '1200px',
      },
      maxWidth: {
        'container-max': '1200px',
      },
      fontFamily: {
        sans: ['Inter', 'system-ui', '-apple-system', 'Segoe UI', 'Roboto', 'sans-serif'],
        serif: ['"Cormorant Garamond"', 'Georgia', 'serif'],
        playfair: ['"Cormorant Garamond"', 'Georgia', 'serif'],
        'headline-md': ['"Cormorant Garamond"', 'Georgia', 'serif'],
        'headline-sm': ['"Cormorant Garamond"', 'Georgia', 'serif'],
        'display-lg': ['"Cormorant Garamond"', 'Georgia', 'serif'],
        'display-lg-mobile': ['"Cormorant Garamond"', 'Georgia', 'serif'],
        'body-md': ['Inter', 'system-ui', 'sans-serif'],
        'body-lg': ['Inter', 'system-ui', 'sans-serif'],
        'label-sm': ['Inter', 'system-ui', 'sans-serif'],
        'label-md': ['Inter', 'system-ui', 'sans-serif'],
      },
      fontSize: {
        'headline-md': ['clamp(1.9rem, 1.4rem + 1.6vw, 2.5rem)', { lineHeight: '1.12', fontWeight: '500' }],
        'headline-sm': ['1.6rem', { lineHeight: '1.2', fontWeight: '500' }],
        'display-lg': ['3.5rem', { lineHeight: '1.05', letterSpacing: '-0.015em', fontWeight: '500' }],
        'display-lg-mobile': ['clamp(2.2rem, 1.4rem + 3.4vw, 2.75rem)', { lineHeight: '1.08', letterSpacing: '-0.01em', fontWeight: '500' }],
        'body-lg': ['17px', { lineHeight: '1.65', fontWeight: '400' }],
        'body-md': ['16px', { lineHeight: '1.65', fontWeight: '400' }],
        'label-md': ['12px', { lineHeight: '1.2', letterSpacing: '0.16em', fontWeight: '600' }],
        'label-sm': ['11px', { lineHeight: '1.2', letterSpacing: '0.12em', fontWeight: '500' }],
      },
    },
  },
  plugins: [require('@tailwindcss/forms'), require('@tailwindcss/container-queries')],
};
