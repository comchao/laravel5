

/**
 * Created by chaowalitchaoprakhon on 06/18/2017.
 */

var app = new Vue({
    el: '#app',
    data: {
        message: 'Hello Vue!',
        'teacher': [],
    },
    created: function () {

        this.$http.get('/api/vue')
            .then((response) => {
                this.teacher = response.data['list'];
                console.log(this.teacher);
            }, error => {
                alert(error)
                console.log(error);
            });
    },
});

