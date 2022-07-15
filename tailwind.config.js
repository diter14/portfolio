const colors = require('tailwindcss/colors')

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
        fontFamily: {
            'heading': ['Red Hat Display', 'sans-serif'],
            'body': ['DM Sans', 'sans-serif'],
        },
        fontSize: {
            '2xl': ['54px', '140%'],
            'heading-h1': ['48px', '140%'],
            'heading-h2': ['40px', '140%'],
            'heading-h3': ['32px', '140%'],
            'heading-h4': ['24px', '140%'],
            'heading-h5': ['18px', '140%'],
            xl: ['18px', '180%'],
            md: ['16px', '180%'],
            sm: ['14px', '180%'],
            xs: ['12px', '180%'],
            xxs: ['9px', '180%'],
        },
        borderRadius: {
            'md': '8px',
            'lg': '32px',
            'full': '9999px'
        },
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            white: colors.white,
            gray: colors.gray,
            emerald: colors.emerald,
            indigo: colors.indigo,
            border: '#CBD1D7',
            'yellow': {
                900: '#806D00',
                800: '#9F8800',
                700: '#BFA400',
                600: '#DFBF00',
                500: '#FFDA00',
                400: '#FFE340',
                300: '#FFED80',
                200: '#FFF19F',
                100: '#FFF6BF',
                50: '#FFFDEF',
            },
            'blue': {
                900: '#001193',
                800: '#0015B8',
                700: '#0019DC',
                600: '#021FFF',
                500: '#273FFF',
                400: '#4257FF',
                300: '#7887FF',
                200: '#AEB7FF',
                100: '#E4E7FF',
                50: '#F8F9FF',
            },
            'black': {
                900: '#040405',
                800: '#0C0D0E',
                700: '#141618',
                600: '#1C1F22',
                500: '#202326',
                400: '#393F44',
                300: '#6B7680',
                200: '#A5ADB4',
                100: '#E1E4E6',
                50: '#F4F5F6',
            },
            body: {
                light: '#F6F7F8',
                alt: '#A5ADB4',
            },
            gray: {
                title: '#202326',
                normal: '#464C53',
                light: '#68737D',
                lighter: '#202326',
            }
        }
    },
    plugins: [],
}