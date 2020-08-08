module.exports = {
  env: {
    WEBSITE_URL: 'https://bimbala.com',
  },
  dev: {
    WEBSITE_URL: 'https://bimbala.com',
  },
}

module.exports = {
    webpack: (config, { isServer }) => {
      if (isServer) {
        require('./scripts/generate-sitemap')
      }
  
      return config
    },
  }

  // PureCSS
const withCss = require('@zeit/next-css')
const withPurgeCss = require('next-purgecss')

module.exports = withCss(withPurgeCss())