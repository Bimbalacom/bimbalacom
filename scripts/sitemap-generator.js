const sitemap = require('nextjs-sitemap-generator');
const path = require('path');

sitemap({
    baseUrl: 'https://bimbala.com',
    pagesDirectory:  path.resolve(__dirname, "../.next/server/pages"),
    targetDirectory: path.resolve(__dirname, "../public/"),
    ignoredExtensions: ["js"],
    nextConfigPath: path.resolve(__dirname, "../next.config.js"),
});

console.log(`✅ sitemap.xml generated!`);