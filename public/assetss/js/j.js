<script>
        $("#updtart").on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var nom = button.data('nom')
            var categorie = button.data('categorie')
            var description = button.data('description')
            var id = button.data('id')
            var modal = $(this)
            modal.find('.modal-body .description').val(description)
            modal.find('.modal-body #nom').val(nom)
            modal.find('.modal-body #id').val(id)
            modal.find('.modal-body #categorie').val(categorie)



        })
    </script>
