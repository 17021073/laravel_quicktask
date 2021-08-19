/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import swal from 'sweetalert';

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

/**
 * handle when click delete button
 */
 $(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".delete").on("click", function (e) {
        e.preventDefault();
        var delete_id = $(this).attr("attr-id");

        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be alble to recover this data!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if(willDelete){
                var data = {
                    "_token" : $('input[name="csrf-token"]').val(),
                    "id" : delete_id,
                };
                $.ajax({
                    type: "DELETE",
                    url: "/cards/" + delete_id,
                    data: "data",
                    success: function (response) {
                        swal(response.status, {
                            icon: "success",
                        });
                    }
                });
            }
        });
    });
})

