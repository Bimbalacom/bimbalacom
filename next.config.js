module.exports = {
  env: {
    WEBSITE_URL: 'https://bimbala.com',
  },
  dev: {
    WEBSITE_URL: 'https://bimbala.com',
  },
}
//Blog modules
module.exports = {
  webpack: function(config) {
    config.module.rules.push({
      test: /\.md$/,
      use: 'raw-loader',
    })
    return config
  },
}