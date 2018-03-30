var Encore = require('@symfony/webpack-encore');

Encore
    .setOutputPath('public/build/') // the project directory where all compiled assets will be stored
    .setPublicPath('/build')  // the public path used by the web server to access the previous directory
    .addEntry('all_construction_sites', './assets/js/construction/all_construction_sites.js') // will create public/build/app.js and public/build/app.css
    .addEntry('all_vehicle', './assets/js/vehicle/all_vehicles.js') // will create public/build/app.js and public/build/app.css
    .enableSassLoader() // allow sass/scss files to be processed
    .autoProvidejQuery() // allow legacy applications to use $/jQuery as a global variable
    .enableSourceMaps(!Encore.isProduction())
    .cleanupOutputBeforeBuild()  // empty the outputPath dir before each build
    .enableBuildNotifications() // show OS notifications when builds finish/fail
    .createSharedEntry('vendor', [
        'jquery',
        'bootstrap'
    ])
// create hashed filenames (e.g. app.abc123.css)
// .enableVersioning()
;

// export the final configuration
module.exports = Encore.getWebpackConfig();