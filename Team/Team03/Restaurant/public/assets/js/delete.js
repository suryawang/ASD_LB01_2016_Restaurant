(function() {

    var deletedObject = {
        // jalan pertama kali dari sini.
        init: function() {
            this.methodLinks = $('a[data-method]');
            this.registerEvent();
        },
        // memberi event onclick ke semua link yang memiliki attr data-method
        registerEvent: function() {
            this.methodLinks.on('click', this.deleteData);
        },
        userConfirm: function (link) {
            return confirm(link.data('confirm'));
        },
        deleteData: function (e) {
            var link = $(this);
            var httpMethod = link.data('method').toUpperCase();
            // kalau data-method bukan delete
            if(httpMethod !== 'DELETE')
                return;

            // meminta persetujuan untuk user untuk delete, jika batal return false
            if(!deletedObject.userConfirm(link)) {
                e.preventDefault();
                return;
            }

            var form = deletedObject.createForm(link, httpMethod);
            e.preventDefault();
            form.submit();
        },
        createForm: function(link, httpMethod) {
            //buat komponen form
            var form = $('<form>', {
                method: 'POST',
                action: link.attr('href')
            });
            // buat token
            var token = $('<input>', {
                type: 'hidden',
                name: '_token',
                value: link.data('token')
            });
            // buat method
            var method = $('<input>', {
                type: 'hidden',
                name: '_method',
                value: httpMethod
            });

            return form.append(token, method).appendTo('body');
        }

    };

    deletedObject.init();
})();