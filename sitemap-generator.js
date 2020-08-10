const sitemap = require('nextjs-sitemap-generator');

sitemap({
    baseUrl: 'https://bimbala.com',
    pagesDirectory: __dirname + "/pages",
    extraPaths: ['public/img/posts'],
    targetDirectory : 'public/',
    nextConfigPath: __dirname + "/next.config.js",
});

console.log(`✅ sitemap.xml generated!`);