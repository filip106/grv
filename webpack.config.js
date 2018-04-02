let Encore = require('@symfony/webpack-encore');

Encore
    .setOutputPath('public/build/') // the project directory where all compiled assets will be stored
    .setPublicPath('/build')  // the public path used by the web server to access the previous directory
    .addEntry('app', './assets/js/app.js') // will create public/build/app.js and public/build/app.css
    .addEntry('all_construction_sites', './assets/js/construction/all_construction_sites.js') // will create public/build/app.js and public/build/app.css
    .addEntry('all_vehicle', './assets/js/vehicle/all_vehicles.js') // will create public/build/app.js and public/build/app.css
    .enableSassLoader(function (sassOptions) {
    }, {
        resolveUrlLoader: false
    }).autoProvidejQuery()
    .autoProvideVariables({Popper: ['popper.js', 'default']})
    .enableSourceMaps(!Encore.isProduction())
    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()
    .createSharedEntry('vendor', [
        'jquery',
        'bootstrap',
        './assets/css/app.scss'
    ])
// .enableVersioning()
;

module.exports = Encore.getWebpackConfig();