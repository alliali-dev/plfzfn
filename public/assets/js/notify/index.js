'use strict';
var notify = $.notify('<i class="fa fa-bell-o"></i><strong>Chargement</strong> page ne fermez pas la page...', {
    type: 'theme',
    allow_dismiss: true,
    delay: 2000,
    showProgressbar: true,
    timer: 300
});

setTimeout(function () {
    notify.update('message', '<i class="fa fa-bell-o"></i><strong>Chargement</strong> des données.');
}, 1000);
