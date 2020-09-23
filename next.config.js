const fs = require("fs");
module.exports = {
  env: {
    WEBSITE_URL: 'https://bimbala.com',
  },
  dev: {
    WEBSITE_URL: 'https://bimbala.com',
  },
  webpack: function(config) {
    config.module.rules.push({
      test: /\.md$/,
      use: 'raw-loader',
    })
    return config
  },
  generateBuildId: async () => {
    const rev = fs.readFileSync('.git/HEAD').toString();
    console.log("Rev: "+rev);
    if (rev.indexOf(':') === -1) {
      return rev;
    } else {
      return fs.readFileSync('.git/' + rev.slice(5,-1)).toString();
    }
  },
}